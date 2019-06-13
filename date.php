<?php
    echo date('d'); //day
    echo date('m'); //mon
    echo date('y'); //year 2 digit
    echo date('Y'); //year 4 digit
    echo date('l'); //day of week
    

// set time zone 
    date_default_timezone_set("Australia/Sydney");
    echo date('Y/m/d l h:i:s a');


// make a time
    $timestamp = mktime(10, 14, 54, 9, 10, 1981);
    echo date('m d Y', $timestamp);


// string to time
    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('2 weeks sunday');
    
    echo $timestamp2;
    echo date('d l Y', $timestamp4);
?>