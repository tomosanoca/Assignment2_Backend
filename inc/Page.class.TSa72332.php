<?php
/**
 * Student Name:            Tomoya Sano
 * Student ID:              300372332
 * Assignment/File Name:    Assignment2
 * Section:                 001
 * 
 * Description: 
 *      This portion describes the File/Assignment
 * 
 * References:
 *      Please make sure you provide the appropriate url references
 *      or any comment for example if you referenced some help you
 *      received from your instructor or demo code provided in class      
**/

class Page{
    static private $title="PLEASE WRITE SOMETHING HERE";
    static private $studentName="Tomoya";
    static private $studentID="300372332";

    // This static function set the HTML header including the title and display the student name and ID
    static function getHeader($title){
        ?>
        <!-- Start Header, use the same flow as demo(3) in the class -->
        <!DOCTYPE html>
            <html>
                <head>
                    <meta charset="utf-8">
                    <meta name="author" content="">
                    <title><?php echo $title; ?></title>        
                    <link href="css/styles.css" rel="stylesheet">
                </head>
                <body>
                    <header>
                        <h1>Assignment 2: Form Processing by<?php echo self::$studentName;  ?> (<?php echo self::$studentID;  ?>)</h1>
                    </header>
        <?php
        
    }

    // This static function close all the HTML tags at the bottom of the document
    static function getFooter(){
        ?>
                <!-- Start Footer -->
                </body>
            </html> 
        <?php
        
    }

    // This static function display the form. It gets the information of the valid input 
    // that can be part of the $validation status array from the Validate class
    // Note: The correct post data will be displayed within the HTML input control object
    static function showForm($valid_status){
        
    }

    // This static function read the validation status property of the Validate class 
    // and display the error messages or submission notification
    static function ShowNotification($valid_status){
        
    }

    

    // This static function display the submitted data. The shipping cost variable is the 
    // shipping cost associative array declared in config.inc.php
    // Make sure to calculate the total cost
    static function showData($shippingCost){
        
    }
}
?>