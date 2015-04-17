<?php

namespace LSI\OrderBundle\Service;

use LSI\SalesRabbitBundle\Entity\SalesRabbitOrder;

class OrderToCsvService
{
    protected $outputDir;

    public function __construct($outputDir)
    {
        $this->outputDir = $outputDir;
    }

    /**
     * Function imported from Brians Webservices code. Could use lots of improvements. Basically takes the salesrabbit
     * posted json and converts it so CSVs that will be imported into the cobol system
     *
     * @param SalesRabbitOrder $orderObj
     * @return bool
     */
    public function convert(SalesRabbitOrder $orderObj)
    {
        $errors = array(); // Place to put errors

        // Process json into useable order data
        $rawOrderData = $orderObj->getData();
        $orderData = $rawOrderData['Customers'][0];

        // var_dump($rawOrderData); die();

        // Order field closure
        // Handles shorthand access to data and reports errors
        $o = function($field) use ($orderData, &$errors) {
            $dateFields = array();

            if(isset($orderData[$field])) {
                return $orderData[$field];
            }
            else {
                // Custom handling
                $returnVal = '';
                $errorMessage = 'Field '.$field.' is missing.';
                switch($field) {
                    case 'Email':
                        $returnVal = 'exampleEmail@livingscriptures.com';
                        break;
                    default:
                        $returnVal = '';
                        break;
                }
                $errors[] = $errorMessage;
                return $returnVal;
            }
        };
        if(strpos(strtolower($o('FirstName')), 'test') ===0){
            return true;
        }

        // Derive order number
        $orderId = $orderObj->getId();
        $orderNumber = 500000 + $orderId;

        // Derive formatted date and time strings
        $rawOrderDateTimeString = $o('OrderDate'). ' ' .$o('OrderTime');
        $orderDateTime = new \DateTime($rawOrderDateTimeString, new \DateTimeZone('America/Denver'));
        $dateString = date_format($orderDateTime, 'Ymd');
        $timeString = date_format($orderDateTime, 'His');

        // var_dump($timeString); die();

        // Designate filenames
        // C_SR{ordernum}_{datestring}_{timestring}.CSV
        $customerFilename = 'C_SR'.$orderNumber.'_'.$dateString.'_'.$timeString.'.CSV';

        // O_SR{ordernum}_{datestring}_{timestring}.CSV
        $ordersFilename = 'O_SR'.$orderNumber.'_'.$dateString.'_'.$timeString.'.CSV';

        // Streaming code: 1 for DVD only; 2 for Streaming only; 3 for DVD + streaming
        $streamingCode = 1; // Default to DVD Only
        if($o('PlanOptions') == 'Streaming Only') {
            $streamingCode = 2;
        }
        elseif($o('Streaming') == TRUE) {
            $streamingCode = 3;
        }

        // Payment codes
        // - AA: echeck, ACH
        // - CC: Credit Card
        // - CK: paper check [unused]
        // - CA: Cash [unused]
        // - MO: Money Order [unused]
        // - SC: Salesman Cash [unused]

        // Coming in:
        // - DownPaymentMethod
        // - FuturePaymentMethod

        // chargeDown and chargeFuture should really be called
        // "usePaymentInfoNow" and "usePaymentInfoFuture".
        // Since salesrabbit can't denote to send bills, hard-code these for now.
        $chargeDown = TRUE;
        $chargeFuture = TRUE;

        // If FuturePaymentMethod is CC, choose CC
        // If FuturePaymentMethod is not CC and ACH info is filled in, choose AA
        $paymentMethod = NULL;
        if($o('FuturePaymentMethod') == 'CC') {
            $paymentMethod = 'CC';
        }
        // TODO: give this some attention, study what combinations we have coming in
        elseif($o('ACHRoutingNumber' != '')) {
            $paymentMethod = 'AA';
        }
        else {
            // Payment method error
            die('unknown payment method!');
        }




        // Strip CRLF from notes field
        $notes = $o('Notes');
        $notes = str_replace("\n", ' ', $notes);
        $notes = str_replace("\r", ' ', $notes);

        // Credit Card Expiration Date Logic to account for different formats
        $creditCardExpiration = '';
        $rawCreditCardExpiration = $o('CreditCardExpiration');
        $ccExpirationArray = explode('/', $rawCreditCardExpiration);
        if(count($ccExpirationArray) == 0) {
            // leave as blank string
        }
        elseif(count($ccExpirationArray) == 3) { // ex: xx/xx/xxxx
            $creditCardExpiration = new \DateTime($rawCreditCardExpiration);
        }
        elseif(count($ccExpirationArray) == 2) { // ex: xx/xxxx
            $fullDateString = implode('/', array($ccExpirationArray[0], '1', $ccExpirationArray[1]));
            $creditCardExpiration = new \DateTime($fullDateString);
        }
        else {
            // TODO: Log error here and skip rest of execution
        }


        // Organize (map) data for C_ csv file
        $cFieldMap = array(
            '1' => $orderNumber, // WEBORDER-TORDER-NUMBER
            '2' => $o('SalesmanNumber'), // WEBORDER-TORDER-SLSM
            '3' => $dateString, // WEBORDER-TORDER-DATE
            '4' => $timeString, // WEBORDER-TORDER-TIME
            '5' => $o('LastName').', '.$o('FirstName'), // WEBORDER-TORDER-NAME
            '6' => $o('Address1'), // WEBORDER-TORDER-ADDR1
            '7' => $o('Address2'), // WEBORDER-TORDER-ADDR2
            '8' => $o('City'), // WEBORDER-TORDER-CITY
            '9' => $o('State'), // WEBORDER-TORDER-ST
            '10' => $o('Zip'), // WEBORDER-TORDER-ZIP
            '11' => $o('ShipName'), // WEBORDER-TORDER-SHIP-NAME
            '12' => $o('BillingAddress1'), // WEBORDER-TORDER-SHIP-ADDR1
            '13' => $o('BillingAddress2'), // WEBORDER-TORDER-SHIP-ADDR2
            '14' => $o('BillingCity'), // WEBORDER-TORDER-SHIP-CITY
            '15' => $o('BillingState'), // WEBORDER-TORDER-SHIP-ST
            '16' => $o('BillingZip'), // WEBORDER-TORDER-SHIP-ZIP
            '17' => str_replace('-', '', $o('SSN')), // WEBORDER-TORDER-SSN
            '18' => ($o('DateOfBirth') != '') ? date_format(new \DateTime($o('DateOfBirth')), 'Ymd') : '', // WEBORDER-TORDER-BIRTH-DATE
            '19' => $o('Phone'), // WEBORDER-TORDER-PHONE
            '20' => $o('AltPhone'), // WEBORDER-TORDER-WPHONE
            '21' => $o('JointBuyerLastName').', '.$o('JointBuyerFirstName'), // WEBORDER-TORDER-JOINT-NAME
            '22' => str_replace('-', '', $o('JointBuyerSSN')), // WEBORDER-TORDER-JOINT-SSN
            '23' => $o('Employer'), // WEBORDER-TORDER-EMPLOYER
            '24' => $o('Income'), // WEBORDER-TORDER-INCOME
            '25' => $o('NumberOfChildren'), // WEBORDER-TORDER-NUMBER-OF-CHILDREN
            '26' => $o('YoungestChildAge'), // WEBORDER-TORDER-AGE-OF-YOUNGEST
            '27' => $o('NumberToShip'), // WEBORDER-TORDER-SHIP-NO // TODO
            '28' => $o('ShippingFrequency'), // WEBORDER-TORDER-SHIP-FREQ
            '29' => $o('CreditCardNumber'), // WEBORDER-TORDER-CC-NO
            '30' => ($creditCardExpiration != '') ? date_format($creditCardExpiration, 'm') : '', // WEBORDER-TORDER-CC-EXP-MM
            '31' => ($creditCardExpiration != '') ? date_format($creditCardExpiration, 'Y') : '', // WEBORDER-TORDER-CC-EXP-YEAR
            '32' => $o('CreditCardCode'), // WEBORDER-TORDER-CC-SECURITY
            '33' => $o('CreditCardSignature') ? 1 : 0, // WEBORDER-TORDER-CC-SIGNATURE
            '34' => $chargeDown ? 1 : 0, // WEBORDER-TORDER-CHARGE-DOWN
            '35' => $chargeFuture ? 1 : 0, // WEBORDER-TORDER-CHARGE-FUTURE
            '36' => '', // WEBORDER-TORDER-SOLD-AT
            '37' => $o('RelativeName'), // WEBORDER-TORDER-REL-NAME
            '38' => $o('RelativeAddress1'), // WEBORDER-TORDER-REL-ADDR1
            '39' => $o('RelativeAddress2'), // WEBORDER-TORDER-REL-ADDR2
            '40' => $o('RelativeCity'), // WEBORDER-TORDER-REL-CITY
            '41' => $o('RelativeState'), // WEBORDER-TORDER-REL-ST
            '42' => $o('RelativeZip'), // WEBORDER-TORDER-REL-ZIP
            '43' => $o('RelativePhone'), // WEBORDER-TORDER-RPHONE
            '44' => $o('Email'), // WEBORDER-TORDER-EMAIL
            '45' => $o('WeeklyEmailsOptIn'), // WEBORDER-TORDER-EMAIL-FHE
            '46' => $o('ContractSigned'), // WEBORDER-TORDER-SIGNED-DATED
            '47' => $o('TotalsSameBy50') ? 1 : 0, // WEBORDER-TORDER-TOTALS-SAME-BY-50
            '48' => $o('ModifiedPage2') ? 1 : 0, // WEBORDER-TORDER-MODIFIED-PAGE-TWO
            '49' => ($o('PostDatedCheckDate') != '') ? date_format(new \DateTime($o('PostDatedCheckDate')), 'Ymd') : '', // WEBORDER-TORDER-POST-DATED-CHECK
            '50' => $notes, // WEBORDER-TORDER-INSTRUCTION-1
            '51' => '', // WEBORDER-TORDER-INSTRUCTION-2
            '52' => '', // WEBORDER-TORDER-INSTRUCTION-3
            '53' => '', // WEBORDER-TORDER-INSTRUCTION-4
            '54' => $o('TotalPurchasePrice'), // WEBORDER-TORDER-PURCHASE-PRICE
            '55' => $o('DownPayment'), // WEBORDER-TORDER-DOWN-PAYMENT
            '56' => $o('AmountRemaining'), // WEBORDER-TORDER-AMT-REMAINING
            '57' => $paymentMethod, // WEBORDER-TORDER-PAY-METHOD
            '58' => $o(''), // WEBORDER-TORDER-ORDER-STATUS
            '59' => ($o('CanCancelUntilDate') != '') ? date_format(new \DateTime($o('CanCancelUntilDate')), 'Ymd') : '', // WEBORDER-TORDER-CAN-CANCEL-TILL
            '60' => 'LSI', // WEBORDER-TORDER-COMPANY
            '61' => $o('ACHRoutingNumber'), // WEBORDER-TORDER-ROUTING
            '62' => $o('ACHAccountNumber'), // WEBORDER-TORDER-BANK-ACCT
            '63' => '', // WEBORDER-TORDER-SHIP-1ST
            '64' => '', // WEBORDER-TORDER-SHIP-2ND
            '65' => '', // WEBORDER-TORDER-SHIP-3RD
            '66' => $o('ExpediteOrder'), // WEBORDER-TORDER-EXPEDITE
            '67' => $o('PromoCode'), // WEBORDER-TORDER-PROMO
            '68' => '', // WEBORDER-TORDER-VERIFIER
            '69' => '', // WEBORDER-TORDER-VER-PERCENT
            '70' => $o('Religion') ? 0 : 1, // WEBORDER-TORDER-RELIGION
            '71' => $streamingCode, // Streaming: 1 for DVD only; 2 for Streaming only; 3 for DVD + streaming
            '72' => $o('SoldAt'), // Location

        );

        $arrayKeysContainingProducts = array(
            'SelectedRegularDVDs',
            'SelectedUpgradedDVDs',
            'AudioRecordings',
            'BonusItems',
            'AdditionalItems',
        );

        // Find a way to denote item left
        $orderItemArrays = array();
        $currentLineNumber = 1;
        foreach($arrayKeysContainingProducts as $productArrayKey) {

            $orderItems = array();
            if(is_array($o($productArrayKey))) {
                $orderItems = $o($productArrayKey);
            }


            //// DEV STUFF
            // var_dump($orderItems); die();
            //// DEV STUFF
            // echo $productArrayKey;
            // var_dump($orderItems);
            foreach($orderItems as $orderItem) {
                // var_dump($orderItem);

                $oi = function($field) use ($orderItem, &$errors, $productArrayKey) {
                    // var_dump($orderItem);


                    if(isset($orderItem[$field])) {
                        return $orderItem[$field];
                    }
                    else {
                        throw new \Exception('Field '.$field.' is missing for item '. json_encode($orderItem) .'. Under '.$productArrayKey);
                        // Custom handling
                        $returnVal = '';
                        $errorMessage = 'Field '.$field.' is missing for item '. json_encode($orderItem) .'.';
                        // var_dump($orderItem);
                        switch($field) {

                            default:
                                $returnVal = '';
                                break;
                        }
                        $errors[] = $errorMessage;
                        // echo $errorMessage;
                        return $returnVal;
                    }
                };

                $fullProductDesignation = $oi('Designation');

                // Product Designation Logic
                $productSeries = '';
                $productFrom = '';
                $productThrough = '';

                // Match Example: BA0105
                if(preg_match('/^([A-Z]{2})([0-9]{2})([0-9]{2})/', $fullProductDesignation, $matches) == 1) {
                    $productSeries = $matches[1];
                    $productFrom = $matches[2];
                    $productThrough = $matches[3];
                }
                // Match Example: BA01
                elseif(preg_match('/^([A-Z]{2})([0-9]{2})/', $fullProductDesignation, $matches) == 1) {
                    $productSeries = $matches[1];
                    $productFrom = $matches[2];
                    $productThrough = $productFrom;
                }
                // Add more designation rules here

                else {
                    $productSeries = $fullProductDesignation;
                }

                //// DEV STUFF
                // var_dump($orderItem); die();
                //// DEV STUFF

                $oFieldMap = array(
                    '1' => $orderNumber, // Order number
                    '2' => $currentLineNumber, // Line number
                    '3' => $productSeries, // Product Series
                    '4' => $productFrom, // Product From
                    '5' => $productThrough, // Product Thru
                    '6' => $oi('Name'), // Product Description
                    '7' => $oi('Quantity'), // Quantity
                    '8' => $oi('Price'), // Amount
                    '9' => $oi('Handling'), // Handling
                    '10' => $oi('Tax'), // Tax
                    '11' => '', // First Shipment (no longer used)
                    '12' => '0', // Ship Order (Series)
                    '13' => '999', // Ship Order (DVD)
                    '14' => '0', // Upgrade (1 or 0, hardcode here to be modified later)
                    '15' => $oi('DVDLeftWithCustomer'), // Product Left (1=yes,2=no)
                    '16' => '', // Bonus Code
                    '17' => '', // Bonus Points
                    '18' => $oi('ACHBonus'), // ACH Bonus
                    '19' => '', // Free DVD flag
                );

                // Special processing for different array fields
                if($productArrayKey == 'SelectedUpgradedDVDs') {
                    $oFieldMap[14] = 1;
                }

                if($productArrayKey == 'BonusItems') {
                    $oFieldMap[16] = $oi('Code');
                    $oFieldMap[17] = $oi('Points');
                }

                $currentLineNumber++;
                $orderItemArrays[] = $oFieldMap;

                // var_dump($oFieldMap);
                // die();


            }
        }

        if($this->saveCsv($this->outputDir.$customerFilename, array($cFieldMap), '|')){
            if($this->saveCsv($this->outputDir.$ordersFilename, $orderItemArrays, '|')){
                return true;
            }
            else{
                unlink($this->outputDir.$customerFilename);
                return false;
            }
        }
        return false;
    }

    /**
     * Method written by Chase Noel, to basically take the salesrabbit json data that comes in and generate CSVs from it
     * We are just going to take all params that are strings and pass them in a single file, then any that are arrays we will create
     * new files with the same ID for them
     */
    public function straightConvertToCsv(SalesRabbitOrder $orderObj)
    {
        //throw new \Exception('Testing mailing options');
        // Not sure why we start here but brian did, so ill leave it
        $baseOrderId = 500000;

        $rawOrderData = $orderObj->getData();
        $orderId = $orderObj->getId();
        $numCustomer = 0;
        $filesToBeWritten= array();

        if(!is_array($rawOrderData) || !array_key_exists('Customers',$rawOrderData)){
            throw new \Exception('Order data is not an array. Something has gone terribly wrong');
        }

        foreach($rawOrderData['Customers'] as $customerOrderData){
            $orderNumber = $baseOrderId + $orderId + $numCustomer;
            if(!is_array($customerOrderData)){
                throw new \Exception('Customer information is malformed');
            }
            foreach($customerOrderData as $columnName => $value){
                if(is_array($value)){
                    try {
                        $imploded = implode(',',$value);
                        $customerOrderData[$columnName] = $imploded;
                    }
                    catch(\Exception $e){
                        $filesToBeWritten['order_'.$orderNumber.'_'.strtolower($columnName).'.csv'] = $this->buildDataForCsv($value);
                        unset($customerOrderData[$columnName]);
                    }
                }
            }
            $filesToBeWritten['order_'.$orderNumber.'_customer.csv'] = $this->buildDataForCsv($customerOrderData);
            $numCustomer++;
        }
        foreach($filesToBeWritten as $filename => $data){
            if(!$this->saveCsv($this->outputDir.$filename,$data,'|')){
                throw new \Exception('Failed to save file');
            }
        }
    }

    private function buildDataForCsv($data=array())
    {
        $headers = $this->getAllHeaders($data);
        $allData = array();

        if(!$this->isAssoc($data)){
            foreach($data as $item){
                $rowData = array();
                foreach($headers as $header => $ignoreMe){
                    if(array_key_exists($header,$item)){
                        array_push($rowData,$item[$header]);
                    }
                    else{
                        array_push($rowData,'');
                    }
                }
                array_push($allData,$rowData);
            }
            array_unshift($allData,array_keys($headers));
        }
        else{
            $rowData = array();
            foreach($headers as $header => $ignoreMe){
                if(array_key_exists($header,$data)){
                    array_push($rowData,$data[$header]);
                }
                else{
                    array_push($rowData,'');
                }
            }
            array_push($allData,$rowData);
            array_unshift($allData,array_keys($headers));
        }
        return $allData;
    }

    private function getAllHeaders($items=array())
    {
        $headers = array();
        if(!$this->isAssoc($items)) {
            foreach ($items as $item) {
                if(!is_array($item)){
                    var_dump($items, $item); exit;
                }
                foreach ($item as $fieldName => $value) {
                    $headers[$fieldName] = 1;
                }
            }
        }
        else{
            foreach ($items as $fieldName => $value) {
                $headers[$fieldName] = 1;
            }
        }
        return $headers;
    }

    private function isAssoc($array) {
        return (bool)count(array_filter(array_keys($array), 'is_string'));
    }

    private function saveCsv($filename, $data, $delimiter = ',') {
        $file = fopen($filename, 'w');
        if($file === false){
            return false;
        }
        foreach($data as $row) {
            if(fputcsv($file, $row, $delimiter) ===false){
                //if we fail to write a line delete the file and get out of here
                unlink($filename);
                return false;
            }
        }
        return fclose($file);
    }

}