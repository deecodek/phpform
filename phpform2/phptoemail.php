<?php

#Receive user input
$email_address = $_POST['email'];
$name = $_POST['name'];
$datetime = $_POST['dt'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$zip = $_POST['zip'];

$selectedProjects  = 'None';
if(isset($_POST['projects']) && is_array($_POST['projects']) && count($_POST['projects']) > 0){
    $selectedProjects = implode(', ', $_POST['projects']);
}

 


$to_email = "deepakddm1@gmail.com";
$subject = "Session Booking Notification";
$body = "Hello Mr.Deepak, 

        This is booking mail for Session: $selectedProjects 
        Booked slot: $datetime 
        
        Name Of Visitor: $name 
        Contact No: $contact 
        E-mail: $email_address
        City: $city 
        Zipcode: $zip" ;

$headers = "From: Deepesh Mahato";

if (mail($to_email, $subject, $body, $headers))

{
    echo "Email successfully sent to Mr.Deepak Mahato";
}

else

{
    echo "Email sending failed!";
}
