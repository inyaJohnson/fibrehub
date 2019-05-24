<?php
session_start();
//connect to database
require('template.php');


if($_POST['signup']){
    $firstname = input($_POST["firstname"]);
    $lastname =input($_POST["lastname"]);
    $address = input($_POST["address"]);
    $phone = input($_POST["phone"]);
    $email = input($_POST["email"]);
    $organizationName = input($_POST["organizationame"]);
    $organizationEmail = input($_POST["organizationemail"]);
    $organizationTelephone = input($_POST["organizationtelephone"]);
    $customerMessage = input($_POST["message"]);
   

    $to ='signup@fibrehub.com.ng';
    $subject = 'New Customer'.' '.date('r');
    $headers = 'From:' . $email;
    $message = 
            "First Name : $firstname \n 
            Last Name :$lastname \n
            Email : $email \n
            Phone : $phone \n
            Address : $address \n
            Organistion Name : $organizationName \n
            Organistion Email : $organizationEmail \n
            Organistion Telephone : $organizationTelephone  ";

        if(mail($to, $subject, $message, $headers)){
            $success = 1;
        };
                
            $response = [
                    'status' => 0,
                    'message' => 'Message Not Sent',
                ];

                if($success)
                {
                    $response = [
                        'status' => 1,
                        'message' => 'Message Sent',
                    ];
                }

                header('Content-type: application/json');
                echo json_encode($response);
                exit();
        
    }

?>