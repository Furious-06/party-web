<?php

// ------------------------------sending email to admin---------------------------
$firstname = $_REQUEST["firstname"]; // User Name
$lastname = $_REQUEST["lastname"]; // User Email
$title = $_REQUEST["title"]; // User Email
$email = $_REQUEST["email"]; // User Email
$domain = $_REQUEST["domain"]; // User Email
$phone = $_REQUEST["phone"]; // User Email
$company = $_POST['company'];
$test = $_REQUEST['company'];
// $querytype = $_REQUEST["querytype"];
$to =   "refbois@hotmail.com";  
$subject = "Query from ".$firstname; // Subject
$headers = "From:".$email; // FROM header
$body = $msg; // EMAIL BODY
$company_type = array();

$call = "";

foreach($_REQUEST['company'] as $selected){
    $call = $call.$selected." - ";
}

// if(isset($_POST['submit'])){
//     if(!empty($company)) {
//         // Counting number of checked checkboxes.
//         $checked_count = count($company);
//         echo "You have selected following ".$checked_count." option(s): <br/>";
//         // Loop to store and display values of individual checked checkbox.
//         foreach($company as $selected) {
//             $company_type[] = $selected; 
//         }
//     }
// }

$msg = 'Top Golf Las Vegas Party RSVP Details : 
First Name : '.$firstname.'
Last Name : '.$lastname.'
Title : '.$title.'
Email : '.$email.'
Domain : '.$domain.'
Phone No : '.$phone.'
What kind of company are you? '.$call;




if(mail($to,$subject,$msg,$headers)){
    //echo $call;

    header('Location: /clients/party');    
}





    

// if(mail($to,$subject,$body,$headers)){
//     header('Location: /clients/party');
// } else {
//     echo "error";
// }

/// ---------------------------SENDING EMAIL TO THE USER--------------------------------


// $touser = $email; // $email; // 
// $visitorsubject = "Thank You for submiting your query.";
// $ourheader = "From: yusufansari563@gmail.com"; //"From: mandar.b@amfordgroup.com";
// // $visitorbody = "Dear".$name \n"."Thank you for contacting Bizz2Apps.\n"."We have received your email and our customer representative will response soon to your mail.\n"."Have a great day!\n\n\n"."Regards,\n"."Bizz2Apps Pvt. Ltd.\n"."Website:www.bizz2apps.com \n"."Email Us:jd@draftss.com";
// $userbody = "Hey ". $name .",

// Thanks for reaching out to FocusQ.
// All our superheroes are on a mission right now. They should be able to reply
// back as soon as their mission is complete. Usually in a few hours.
// Regards,
// Team FocusQ
// The Superhero HQ for Design, Marketing & Code ";

// mail($touser,$visitorsubject,$userbody,$ourheader);

?>


