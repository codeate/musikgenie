<?php 
	
	/* 
		if (isset($_POST['sendcontactmessage'])) 
		{ 
					foreach (array_keys($_POST) as $key)							
							{

							$$key = $_POST[$key];
							}
							echo $sendername;
							echo $senderemail;							 
							echo $message_to_send;
							echo $sendcontactmessage; 	 
		}
	*/	 	
 ?>

<?php
if(isset($_POST['sendcontactmessage']))
{
	foreach (array_keys($_POST) as $key)
                        {
                            $$key = $_POST[$key];                        
                        } 
 
 require_once "Mail.php"; // PEAR Mail package
require_once ('Mail/mime.php'); // PEAR Mail_Mime packge

 $name = $_POST['sendername']; // form field
 $email = $_POST['senderemail']; // form field
 $message = $_POST['message_to_send']; // form field
 
  

 $from = "myemail@mydomain.com"; //enter your email address
 $to = "victor.agidigbi@genieng.com"; //enter the email address of the contact your sending to
 $subject = "Contact Form"; // subject of your email

$headers = array ('From' => $from,'To' => $to, 'Subject' => $subject);

$text = ''; // text versions of email.
$html = "<html><body>Name: $name <br> Email: $email <br>Message: $message <br></body></html>"; // html versions of email.

$crlf = "\n";

$mime = new Mail_mime($crlf);
$mime->setTXTBody($text);
$mime->setHTMLBody($html);

//do not ever try to call these lines in reverse order
$body = $mime->get();
$headers = $mime->headers($headers);

 $host = "localhost"; // all scripts must use localhost
 $username = "info@musikgenie.com"; //  your email address (same as webmail username)
 $password = "w!lb@tgen!3"; // your password (same as webmail password)

$smtp = Mail::factory('smtp', array ('host' => $host, 'auth' => true,
'username' => $username,'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
}
else {
$senderemail = $senderemail;
	include("rekua/konectam.php");
	$date = date('M d, Y h:i:s');
    mysql_query("INSERT INTO contact_us VALUES ('null', '$sendername', '$senderemail', '$message_to_send', '$date')"); 	 
	 
	$contact_us_success = '<div class="alert alert-success fade in">
							    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							    <strong class="site_color"><i class="icon-thumbs-up-alt"></i> Thanks </strong> for Contacting MusikGenie, you will receive a reply into your email soon.
							  </div>';
}
 

}
?>

 ?>

<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" xmlns="http://www.w3.org/1999/xhtml" lang="en-US"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<!--<![endif]-->
<head>
	<title>Contact | MusikGenie.com |Sharing Love through Music</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="Contact | MusikGenie.com | Latest Songs">
		<meta name="keywords" content="Nigerian songs, latest songs, gists, nigeria news, nigerian artists, download songs, play songs online">

	<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style.css" id="dark" media="screen" />
		<link rel="stylesheet" type="text/css" href="styles/icons/icons.css" media="screen" />
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/icons/font-awesome-ie7.min.css" />
	<![endif]-->
</head>
<body id="fluidGridSystem">
	<div id="layout" class="full">

		<!-- start header --> 
			<?php include 'rekua/header.php';?> 
		<!-- end header -->

		<div class="under_header">
			<img src="images/assets/breadcrumbs11.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">
			<div class="row clearfix mb">
				<div class="breadcrumbIn">
					<ul>
						<li><a href="home" class="toptip" title="Homepage"> <i class="icon-home"></i> </a></li>
						<li> Contact </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="span8 posts">
				<?php 
					if (isset($contact_us_success)) {
						echo $contact_us_success;
					}
					 ?>
					<div class="def-block clearfix">
						<h4> Contact us </h4><span class="liner"></span>
						<p>Should you have a question or comment, kindly fill out the form below and we will get back to you. </p>
						 
						<form method="post" id="contactForm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<div class="clearfix">
								<label> </label>
								<div class="grid_6 alpha fll">Name:*<input type="text" name="sendername" id="senderName" placeholder="What's Your Name? *" class="requiredField" required="required" /></div>
								<label>email:*</label>
								<div class="grid_6 omega flr"><input type="email" name="senderemail" id="senderEmail" placeholder=" What's Your Email Address? *" class="requiredField email" required="required" /></div>
							</div> 
							<div>
								<label>Say Something:*</label>
								<textarea name="message_to_send" id="message" placeholder=" What's Your Message? *" class="requiredField" rows="8" required="required"></textarea></div>
							<input type="submit" id="sendMessage" name="sendcontactmessage" value="Send Message" />
							<span>  </span>
						</form><!-- end form -->
					</div><!-- def block -->
					
				</div><!-- span8 posts -->

				<div class="span4 sidebar">

					<!-- Start Get In touch sideBar -->
					<?php include 'rekua/getintouch_sidebar.php';?>
					<!-- End Get In touch sideBar -->

				</div><!-- span4 sidebar -->
			</div><!-- row clearfix -->
		</div><!-- end page content -->

		<!-- Start Footer -->
		<?php include 'rekua/footer.php';?>
		<!-- End Footer -->

	</div><!-- end layout -->
<!-- Scripts -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/them e20.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.nanoscroller.js"></script>
	<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>