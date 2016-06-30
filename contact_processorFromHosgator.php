<!--
You may even copy and paste this working example. Create a file named email_form.php and paste this code inside and save. (If you use a different file name, you must change that file name as shown in bold in the code sample.)

Note: You will need to replace postmaster@example.com with your real email address. You can use any email address you want, even a third party email hosted somewhere else.

Note: You will also need to replace thank_you.html with the real page name where visitors are sent after they submit the form.

Note: Some of the text below has been word-wrapped. For best results, copy and paste the whole block of code to ensure proper formatting.
-->

<?php
switch (@$_GET['do'])
 {

 case "send":

      $fullname = $_POST['fname'];   
      $senderemail = $_POST['femail']; 
      $messagetosend = $_POST['mailmessage'];

    if (!preg_match("/\S+/",$fullname))
    {
      unset($_GET['do']);
      $errmessage = " Your Name required. Please try again.";
      break;
    }
 
    if (!preg_match("/^\S+@[A-Za-z0-9_.-]+\.[A-Za-z]{2,6}$/",$senderemail))
    {
      unset($_GET['do']);
      $errmessage = "  Email Address is incorrect. Please try again.";
      break;
    }
 
    if (!preg_match("/\S+/",$messagetosend))
    {
      unset($_GET['do']);
      $errmessage = "Message required  please.";
      break;
    }
 
    if ($secretinfo == "")
    {
       $myemail = "postmaster@example.com";
       $emess = "  Name: ".$fullname."\n";
        
       $emess.= "Sent a contact us message below: \n ";
       $emess.= "  Message: ".$messagetosend."\n";
       $emess.= "  From: ".$senderemail."\n";

       $ehead = "From: ".$senderemail."\r\n";
       $subj = "A Contact us Email from ".$fullname."!";
       $mailsend=mail("$myemail","$subj","$emess","$ehead");
       $errmessage = "Email was sent.";
    }
 
       unset($_GET['do']);
       header("Location: thank_you.html");
     break;
 
 default: break;
 }
?>


<html>
<body>
<form action="email_form.php?do=send" method="POST">
<p>* Required fields</p>
<?php
   if ($errmessage) echo '<p style="color:red;">'.$errmessage.'</p>';
?>
   <table border="0" width="500">
     <tr><td align="right">* First Name: </td>
         <td><input type="text" name="fname" size="30" value="<?php echo @$fname ?>"></td></tr>
     <tr><td align="right">Middle Name: </td>
         <td><input type="text" name="mname" size="30" value="<?php echo @$mname ?>"></td></tr>
     <tr><td align="right">* Last Name: </td>
         <td><input type="text" name="lname" size="30" value="<?php echo @$lname ?>"></td></tr>
   </table>
<p>
   <table border="0" width="500">
     <tr><td align="right">* Primary Email: </td>
         <td><input type="text" name="femail" size="30" value="<?php echo @$femail ?>"></td></tr>
     <tr><td align="right">Secondary Email: </td>
         <td><input type="text" name="f2email" size="30" value="<?php echo @$f2email ?>"></td></tr>
   </table>
<p>
   <table border="0" width="600">
     <tr><td align="right">* Street Address: </td>
         <td><input type="text" name="saddy" size="40" value="<?php echo @$saddy ?>"></td></tr>
     <tr><td align="right">Apartment/Suite Number: </td>
         <td><input type="text" name="sapt" size="10" value="<?php echo @$sapt ?>"></td></tr>
     <tr><td align="right">* City: </td>
         <td><input type="text" name="scity" size="30" value="<?php echo @$scity ?>"></td></tr>
         <td align="right">State: </td>
         <td><input type="text" name="sstate" size="10" value="<?php echo @$sstate ?>"></td></tr>
     <tr><td align="right">* Zip/Post Code: </td>
         <td><input type="text" name="szip" size="10" value="<?php echo @$szip ?>"></td></tr>
     <tr><td align="right">Country: </td>
         <td><input type="text" name="scountry" size="30" value="<?php echo @$scountry ?>"></td></tr>
   </table>
<p>
   <table border="0" width="500">
     <tr><td align="right">* Phone Number 1: </td>
         <td><input type="text" name="fphone1" size="20" value="<?php echo @$fphone1 ?>"></td></tr>
     <tr><td align="right">Phone Number 2: </td>
         <td><input type="text" name="fphone2" size="20" value="<?php echo @$fphone2 ?>"></td></tr>
     <tr><td align="right">Phone Number 3: </td>
         <td><input type="text" name="fphone3" size="20" value="<?php echo @$fphone3 ?>"> <input style="display:none;" name="info" type="text" value=""> </td></tr>
   </table>
<p>
   <table border="0" width="500"><tr><td>
     Comments:<br />
     <TEXTAREA name="fsendmail" ROWS="6" COLS="60"><?php if($fsendmail) echo $fsendmail; ?></TEXTAREA>
     </td></tr>
     <tr><td align="right"><input type="submit" value="Send Now">
     </td></tr>
   </table>
   </form>
</body>
</html>