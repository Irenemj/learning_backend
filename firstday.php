<?php
$months=["January","February","March","April","May","June","July","August","September","October","November","December"];

foreach ($months as $month) {
$firstDayOfMonth = 1;
$year = 2015;


    $time = strtotime($year.'-'.$month.'-'.$firstDayOfMonth);
    $monthsInWords = date('F',$time);
    $dayOfWeek = date('l',$time);
    
    echo $monthsInWords.', '.$year ." ". 'first day is '.$dayOfWeek.' 
         .<br />';
}

