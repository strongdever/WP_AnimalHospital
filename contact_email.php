<?php

if (!isset($_REQUEST['safety_key'])) {
    die();
}
// Admin Email.
$to = "hkhan.cse@gmail.com"; // write you email address in here.// Fetching Values from URL.
//
$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$email_subject = $_POST['email_subject'];
$email_message = $_POST['email_message'];
$template = '<div>Hello ' . $user_name . ',<br/>'        . '<br/>Thank you...! For Contacting Us.<br/><br/>'        . 'Name:' . $user_name . '<br/>'        . 'Email:' . $user_email . '<br/>'        . 'Message:' . $email_message . '<br/><br/>'        . 'This is a Contact Confirmation mail.'        . '<br/>'        . 'We Will contact You as soon as possible .</div>';
$message = "<div>" . $template . "</div>";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers.='Content-type: text/html; charset=utf-8; charset=iso-8859-1' . "\r\n";
$headers.='From:' . $user_email . "\r\n"; 
// Sender's Email
 mail($to, $email_subject, $message, $headers, '');
 $data = array(    'status' => 1,    'msg' => "Your Query has been received, We will contact you soon.");
 echo json_encode($data);