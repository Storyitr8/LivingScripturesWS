<?php
namespace LSI\OrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Order
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    protected $customer;

    protected $number_to_ship;

    protected $credit_card_number;

    protected $credit_card_expiration;

    protected $credit_card_code;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $credit_card_signature;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $charge_down;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $charge_future;

    protected $contract_signed;

    protected $totals_same_by_50;

    protected $modified_page_2;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $post_dated_check_date;

    protected $notes;

    protected $total_purchase_price;

    protected $down_payment;

    protected $amount_remaining;

    protected $payment_method;

    protected $can_cancel_until_date;

    protected $ach_routing_number;

    protected $ach_account_number;

    protected $expedite_order;

    protected $promo_code;

    protected $streaming_code;

    protected $sold_at;

}