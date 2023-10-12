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

class Validate{

    static $valid_status=[];

    // It is up to you on how to implement the valid_status array. 
    // Make sure that you can use the array to display the notification error
    // and the validated post data
    // make sure to update the valid_status attribute everytime you validate an input.
    // all input are required
    
    static function validateForm()    {  
        $errors = [];  
        
        //Validate the name
        $fullName = filter_input(INPUT_GET, 'fullName', FILTER_SANITIZE_STRING);
        if(!($fullName)){
            $errors[] = "Please enter a valid name.";
            self::$valid_status[] = false;
        }  
        
        //Validate the email address, use filter_input  
        $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_STRING);
        if(!($email)){
            $errors[] = "Please enter a valid email address.";
            self::$valid_status[] = false;
        }  

        //Validate the phone number, use filter_input with regexp 
        $phoneNumber = filter_input(INPUT_GET, 'phoneNumber', FILTER_SANITIZE_STRING);
        $phoneNumber = strip_tags($phoneNumber, " /^\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/ ");
        if(!($phoneNumber)){
            $errors[] = "Please enter a valid 10 digits phone number.";
            self::$valid_status[] = false;
        }            

        //Validate the amount of prodcut amount, use filter_input with minimum range (1) and maximum range (6)
         $filterOption = array(
            "options" => array(
                'min_range'=>1,
                'max_range'=>6
            )
        );
        $productAmount = filter_input(INPUT_GET, 'productAmount', FILTER_SANITIZE_INT, $filterOption);
        if(!($productAmount)){
            $errors[] = "The number of product should be between 1 until 6.";
            self::$valid_status[] = false;
        }      
        

        //Ensure one of the gift wrap options is checked
        $giftWrap = filter_input(INPUT_GET, 'giftWrap', FILTER_SANITIZE_STRING);
        if(!(isset($giftWrap))){
            $errors[] = "Please choose the gift wrap option.";
            self::$valid_status[] = false;
        }


        //Ensure the drop down shipping option was selected      
        $shipping = filter_input(INPUT_GET, 'shipping', FILTER_SANITIZE_STRING); 
        if(!(isset($shipping))){
            $errors[] = "Please select the shipping method!";
            self::$valid_status[] = false;
        }    

        
    }
}