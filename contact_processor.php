<?php
/*
 * A Design by W3layouts
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
 *

 							echo $sendername;
							echo $senderemail;
							echo $senderphone;
							echo $message_to_send;
							echo $sentmessage;


 */			
			$email_id = "princeayvictor@yahoo.com";

 			$userName=$_REQUEST['sendername'];
			$userEmail=$_REQUEST['senderemail'];
			$userPhone=$_REQUEST['senderphone'];
			$userMsg=$_REQUEST['message_to_send'];
			$subject = "Message from ".$userName; 
			$message = '<html><head><title>'.$subject.'</title></head><body><table><tr><td>Email id :  </td><td> '.$userEmail.'</td></tr>
<tr><td>Phone No : </td><td> '.$userPhone.'</td></tr><tr><td>Name : </td><td> '.$userName.'</td></tr><tr><td>Says : </td><td> '.$userMsg.'</td>
</tr></table></body></html>';
			//$message = "Email id :  ".$userEmail. "\r\nPhone No : ".$userPhone."\r\nName : ".$userName."\r\nSays : ".$userMsg;
			$to=$email_id;
			$headers = "From: " . strip_tags($userEmail) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($userEmail) . "\r\n";
			//$headers .= "CC: susan@example.com\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			if(!mail($to, $subject, $message, $headers)){
             $mail_status='no';
				header("Location: contact.php");
			exit();
          }else{
          	  $mail_status='sent';
          	header("Location: contact.php");
			exit();
           
         } ?>