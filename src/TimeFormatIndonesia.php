<?php
/* 
* Author : Bayu p
* github : https://github.com/bayupriyambada
* Version : 1
*/
namespace bayup\response;

use DateTime;
use DateTimeZone;

class TimeFormatIndonesia{
  
  public static function IndonesiaFormatData(){
    $location = 'Asia/Jakarta';
    $date = Date('Y-m-d');
    $time = Date('H:i:s');
    $dateTime = new DateTime($date . ' ' . $time);
    $dateTime->setTimezone(new DateTimeZone($location));
    return $dateTime->format('Y-m-d H:i:s');
  }
  public static function IndonesiaFormatDate(){
    $location = 'Asia/Jakarta';
    $date = Date('Y-m-d');
    $dateTime = new DateTime($date);
    $dateTime->setTimezone(new DateTimeZone($location));
    return $dateTime->format('Y-m-d');
  }
  public static function IndonesiaFormatTime(){
    $location = 'Asia/Jakarta';
    $time = Date('H:i:s');
    $dateTime = new DateTime($time);
    $dateTime->setTimezone(new DateTimeZone($location));
    return $dateTime->format('H:i:s');
  }

}
