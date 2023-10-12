<?php
/**
 * Student Name:            Tomoya Sano
 * Student ID:              300372332
 * Assignment/File Name:    Assignment2
 * Section:                 001
 **/

// MAKE SURE TO PUT THE REQUIRED DEFINITIONS HERE
  define("ITEMCOST",25);
  define("WRAPCOST",10);
  define("DISCOUNT",0.15);
  define("TAX",0.12);



// DECLARE THE ASSOCIATIVE ARRAY SHIPPING COST
  $shippingCost = [
    'regular' => 6,
    'express' => 15,
    'priority' => 25
  ];


// SETUP THE LOG FILE DEFINITION AND SETTINGS
// definition for log file, get these from demo(2)
define("LOGFILE","log/error_log.txt");
// setting error logging to be active 
ini_set("log_errors", TRUE);
// setting the logging file in php.ini 
ini_set("error_log",LOGFILE);


?>