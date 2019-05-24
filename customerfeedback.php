<?php
session_start();
//connect to database
require('template.php');
if($_POST['submit']){
    $name = input($_POST["name"]);
    $from = input($_POST["email"]);
    $customerSubject = input($_POST["subject"]);
    $customerMessage = input($_POST["message"]);
   

    $to ='info@fibrehub.com.ng';
    $subject = $customerSubject;
    $headers = 'From:' . $from;
    $message = 'My name is '. $name .' '. $customerMessage;

        mail($to, $subject, $message, $headers);

            $success = 1;
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