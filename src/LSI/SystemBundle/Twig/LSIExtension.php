<?php
namespace LSI\SystemBundle\Twig;

class LSIExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('dayOfWeekToString', array($this, 'dayOfWeekToStringFilter')),
            new \Twig_SimpleFilter('statusToCssClass', array($this, 'statusToCssClassFilter')),
        );
    }

    public function dayOfWeekToStringFilter($weekdaynumber)
    {
        if(!$weekdaynumber instanceof int){
            $weekdaynumber = str_replace('</label>', '', str_replace('<label>', '', $weekdaynumber));
        }
        $weekdaynumber = intval($weekdaynumber);
        if($weekdaynumber < 0 || $weekdaynumber > 6){
            return 'Invalid Day of Week Number';
        }
        $day = ['Sunday','Monday','Tuesday','Wednesay','Thursday','Friday','Saturday'];
        return $day[$weekdaynumber];
    }

    public function statusToCssClassFilter($string){
        if(strpos($string, 'POSTDATE') !==false){
            $string = 'POSTDATE';
        }
        if(strpos($string, 'PROCESS/CREDIT') !==false){
            $string = 'PROCESS/CREDIT';
        }
        return str_replace("'",'',str_replace('/','-',str_replace(' ','-',strtolower(trim($string)))));
    }

    public function getName()
    {
        return 'lsi_extension';
    }
}