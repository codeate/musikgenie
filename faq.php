<?php 

				/*	 if(!isset($_GET['sendmessage']))
				    {
				    	header('Location:index.php');
				    	exit();
				     }
				*/

	include("rekua/konectam.php");
 ?>
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" xmlns="http://www.w3.org/1999/xhtml" lang="en-US"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<!--<![endif]-->
<head>
	<title>FAQs | MusikGenie.com | Sharing Love through Music</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="Contact | MusikGenie.com | Latest Songs">
		<meta name="keywords" content="Nigerian songs, latest songs, gists, nigeria news, nigerian artists, download songs, play songs online">

	<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="styletry.css" id="dark" media="screen" />
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
						<li> Frequently Asked Questions </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="span8 posts">
					<div class="def-block clearfix">
						<h4> FAQs </h4><span class="liner"></span>

														<ul class="tt-toggle">
									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>What is MusiKGenie?</p>
										</div>
										<div class="toggle-content">
											MusikGenie is a Mobile Music Messaging Service that allows a user to listen to a song and/or share the song to someone else.  There are more than a thousand songs to share and listen!
										</div>
									</li>
									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>How do I access the MusikGenie Service?</p>
										</div>
										<div class="toggle-content">You can access the service by dialing the short code 399 from an Airtel line or calling 32300 using a Glo number or by visiting the website www.musikgenie.com
 
										</div>
									</li>
									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>How can I subscribe (optional) to this service?</p>
										</div>
										<div class="toggle-content">You can subscribe to the service in THREE ways<br /> 

										<strong>A</strong>	By dialing the voice portal’s short code 399 on Airtel  or 32300 on Glo and follow these steps; <br />
										<ul>
											<li>1. User hears the welcome prompt</li>
												<blockquote class="faqblockquote">“Good Morning/Good Afternoon/ Good Evening (Nigeria time based) Welcome to MusikGenie, here you can do lot more with music of your choice.<br/>
												Dedicate Songs to your friends or loved ones, now or any time in future, with a personalized message in your voice, Create play list of your favorite songs Or simply enjoy listening to selected full songs. Press 1 to continue by subscribing now.”
													</blockquote>
											<li>2.	When one (1) is pressed</li>
											<blockquote class="faqblockquote">
												I.	If charging is successful user gets 15mins of listening time valid for 7days and daily entertainment news. <br/> 
												II.	If charging is not successful due to low balance you would be informed and need to recharge your line and try again.

											</blockquote>
										</ul>
										<strong>B. </strong>
											<p>
													By sending the keyword “MMS” to 38296 on Airtel or “MMS” to 32300 on Glo.
											</p>
											<strong>C.</strong>
											<p>
												By dialing the unique song code (Multimodal) of any song and selecting any key to get the subscription option.
											</p> 
										</div>
									</li>



									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>How much does the service subscription cost?</p>
										</div>
										<div class="toggle-content">
										<P><strong>On Airtel:</strong> Subscription cost 35NGN/7days with 15mins listening time.</P>
										<P><strong>On Glo: </strong>  Subscription cost 25 NGN/7days with 15mins listening time.</P>
										</div>
									</li>
									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>What happens after a successful subscription?</p>
										</div>
										<div class="toggle-content"><p>Upon subscribing you will be taken to the Main Menu flow where you hear</p>  
											 <blockquote class="faqblockquote">Now listen and dedicate songs from our vast catalogue…
											For latest songs this week press 1
											For Naija musicpress 2
											For African hits press 3
											For Old school music Press 4
											If you are an international music fan, press 5
											For more info & help on the service, please press 0
											</blockquote> 
										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>How do I listen to a song?</p>
										</div>
										<div class="toggle-content">
										<p><h6>You can listen to a song in TWO ways</h6>
										<strong>A.</strong>
										Dial 399 (on Airtel) or 32300 (on Glo) and follow the prompt flow <br/>
										i.	If you are already subscribed; you will hear how many minutes you have left to listen and you will be taken to the Main menu flow where you can select the desired song category by pressing the number against your choice. (e.g. if you choose latest song of the week by pressing 1 you will be taken to the category and you will hear the instructions below after which the full length songs will start playing).
										 </p>
										 <blockquote class="faqblockquote">
										 	Welcome to the Latest songs of the Week.
											To make your favorite song the number one and remain on the chart, dedicate the song to your loved ones now. The song with the most dedications stays on, and may even be Number one!
											Hey, but before you start, let me share some instructions, you don’t want to miss
											To dedicate a song press 5
											To skip to next song, press 2
											To go back to previous song, press 3
											For main menu, press Hash
											For more information & help for the service, press 0.
										 </blockquote> 
										 <ul>
										 	<li>Song 1 file plays….</li>
										 	<li>Song 2 file plays….</li>
										 	<li>Song 3 file plays…</li>
										 	<li>Song 4 file plays….</li>
										 	<li>Song 1 file plays….</li> 
										 	<i>Song 100 file play….</li> 
										 </ul>
										 <p>If you are not subscribed; the system will take you to subscription flow then after subscribing it will take you to main menu where you can select the song category of your choice</p>

										 <p><strong>B.</strong>
										 		Alternatively you can listen to a song by dialing the song code associated to each song e.g dial 39910942 to listen to bottles by Sean Tizzle.
										 </p>
										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>How much does it cost to listen to a song?</p>
										</div>
										<div class="toggle-content">if you have subscribed, you will make use of your 15mins listening time to listen to the songs.<br/>
										If you are not subscribed, it cost 5NGN/min on Airtel or 25NGN/5mins on Glo.

										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>What happens if I exhaust my listening time?</p>
										</div>
										<div class="toggle-content">when you have exhausted all your listening minutes but the validity period still holds. Then you can top up your minutes at 20NGN for 10 minutes on Airtel or 25NGN for 10 minutes on Glo. <br/>
										<strong>Note:</strong>	There is no minute’s rollover after the 7days validity expires.

										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>How do i Dedicate songs on MusikGenie Website?</p>
										</div>
										<div class="toggle-content">Click on the <button class="open-AddBookDialog dedicatebtn" ><i class="icon-gift"></i> Dedicate
											</button> button next to the song of your choice. A pop up with the options to input your number and loved one’s number appears. Please input appropriate details and click submit.<br /> You can also do a bulk dedication of up to 10 numbers from the website.
										</div>
									</li>

									  
									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>How do I dedicate a song via SMS?</p>
										</div>
										<div class="toggle-content"><strong>On Airtel:</strong> To dedicate a song via SMS, simply send song code in the format [SONG < song code>< Number >] to 38296. (e.g send “SONG 10020 0708436xxxx” to 38296).<br/>

										On Glo: 
										<p>
											To dedicate a song via SMS, simply send song code in the format [SONG < song code>< Number >] to 32300. (e.g send “SONG 0020 0708436xxxx” to 32300).
										</p>
										<blockquote class="faqblockquote">
											If you send a wrong message format, you will be notified with an SMS telling you the correct format.<br />
											Hey, wrong format sent! The correct format is [Keyword] [songcode] [Number] [DD-MM-YYYY-HH:MM] e.g. send SONG 91641 08067264763 09-05-2014-15:20 to 38296. Date & Time is optional
										</blockquote>
										<p><strong>Note:</strong> Date and time is optional. Airtel song code is 5 digits and Glo song code is 4 digits.</p>


										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>How do I dedicate a song when I dial <strong>399</strong> or <strong>32300</strong> ?</p>
										</div>
										<div class="toggle-content">When you dial the short code follow the voice prompt flow.<br/>
										After listening to the main menu, press the number according to the song category of your choice (e.g press 2 for naija music) you will hear the following;
										<br/>
										<blockquote class="faqblockquote">Welcome to Naija Music Section
										To make your favorite song the number one and remain on the chart, dedicate the song to your loved ones now. The song with the most dedications stays on, and may even be Number one! <br/>
										Hey, but before you start, let me share some instructions, you don’t want to miss
										</blockquote>
										<blockquote class="faqblockquote">To dedicate a song press 5
										To skip to next song, press 2
										To go back to previous song, press 3
										For main menu, press Hash
										For more information & help for the service, press 0.
										<ul>
											<li>Song 1 file plays….</li>
											<li>
										Song 2 file plays….</li>
										<li>
										Song 3 file plays….</li>
										<li>
										Song 4 file plays….</li>
										<li>
										Song 100 file play…..</li>
										</ul>

										</blockquote>
										<p>Then you can choose to dedicate any of the song by pressing5 when the song plays.</p>
										<strong>After pressing 5 </strong>
										<ul>
											<li>i.	You will hear a prompt that will request you to enter the person’s number you want to dedicate the song to 		
											</li>
											<li>ii.	After entering the number and pressing the hash key (e.g 08067345344#)
													Press 1 to confirm the number after which you will hear the prompt;<br/>
													<blockquote class="faqblockquote">'Please enter your message options with a maximum of 20 seconds duration followed by the hash key.<br/>press1: to continue <br/> Press 2: to re-record.' </blockquote>
											</li>
											<li>iii. Press 1 to enter a personalized message and follow the voice prompt OR</li>
											<li> 
											iv.	Press 2 to continue without the personalized voice message.</li>
										</ul>


										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>How do I listen or dedicate a particular song without having to dial 399 or 32300?</p>
										</div>
										<div class="toggle-content">You can listen and dedicate songs through multimodal also by dialing 399 on Airtel or 32300 on Glo followed by song code suffix. e.g dial 39910020 to start listening to the song.<br/>

										<ul>
											<p>
												To dedicate: while listening to the song just press any key to hear the dedication option
											</p>
											<li>i.	Press any key to listen to the dedication options (press 1 to dedicate or press 2 to subscribe to the services)</li>
											<li>ii.	Then upon pressing 1 you will be taken to the dedication call flow</li>
										</ul>
										</div>
									</li>

									

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>What happens after I finish making a dedication? </p>
										</div>
										<div class="toggle-content">The person to whom you have dedicated the song will get a call with the song, once the person picks the call, he/she will start listening to the song. The receiver sees the call as originating from your mobile number, thus increasing the chances of it being picked up.<br/>
										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>What is a song code?</p>
										</div>
										<div class="toggle-content">A song code is a unique digit number (5 digits for Airtel and 4 digits for glo) that is assigned to each song. Every song on the portal will have this unique code assigned to it for easy access to the song. e.g 10020 for Airtel or 0020 for Glo
										</div>
									</li> 

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>How do I use the song code?</p>
										</div>
										<div class="toggle-content"><p>You can use the song code when dedicating a song via SMS e.g 10931 for Timaya's 'some more' on Airtel or 0931 on Glo</p> 
										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>What is Multimodal code?</p>
										</div>
										<div class="toggle-content"><p>Multimodal code is simply a combination of the shortcode (399) and the song code (10020) e.g 39910020.</p> 
										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>How do I use the Multimodal code?</p>
										</div>
										<div class="toggle-content"><p>You can use the multimodal code to listen to a song and also dedicate the song by dialing the  code e.g 39910931 for Timaya's 'some more' on Airtel or 323000931 on Glo</p> 
										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>What happens if the person misses the call?</p>
										</div>
										<div class="toggle-content"><p>The System will push the call to the person three times at 10 minutes interval but if the person misses the call three times, he/she will get an SMS notification with an instruction on how to retrieve the song. </p> 
										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>What does it cost to retrieve the missed dedicated song?</p>
										</div>
										<div class="toggle-content"><p><strong>For Airtel number:</strong> It will not cost anything. Retrieval is free on-net.<br/>
										<strong>For non Airtel number: </strong> It will cost the receiver his/her normal call tariff charge on his/her home network.<br/><strong>For Glo:</strong> will not cost anything. Retrieval is free on-net.</p> 
										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>How do I know whether the receiver got the dedicated song or not?</p>
										</div>
										<div class="toggle-content"><p> You will be notified with an SMS that your song was successfully delivered to the receiver.</p> 
										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>How much does it cost to dedicate a song?</p>
										</div>
										<div class="toggle-content"><p> <strong>On Airtel:</strong> Dedication to an Airtel Mobile user costs 40 naira and to other networks costs 80naira.<br/>
										<strong>On Glo:</strong> Dedication to a Glo Mobile user costs 40naira. No dedication to other networks on Glo.
										</p> 
										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>Must I subscribe to the service before I can listen or dedicate a song?</p>
										</div>
										<div class="toggle-content"><p>No.If you are not subscribed to the Service, you can listen or dedicate a song by dialing the multimodal code or dedicate via SMS.</p> 
										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>How much will I be charged to listen to a song if I am not subscribed to the service?</p>
										</div>
										<div class="toggle-content"><p>If you are not subscribed you will be charged 5NGN/min on Airtel or 25NGN/5minutes on Glo to listen.</p> 
										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>What are the benefits of subscribing to the service?</p>
										</div>
										<div class="toggle-content"><p> You will be given free 15mins/7days to listen to songs of your choice. Also you will be receiving free Entertainment news feeds for 7 days.</p> 
										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>What is the validity of this service?</p>
										</div>
										<div class="toggle-content"><p> 7 days.</p> 
										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>What happens after the 7 days validity?</p>
										</div>
										<div class="toggle-content"><p> Service will be renewed and subscriber will get another 15mins to listen to songs and will continue to receive the entertainment news.</p> 
										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>How many messages would I get daily?</p>
										</div>
										<div class="toggle-content"><p> You will get one message daily (entertainment news).</p> 
										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>Will I get SMS notification for subscription to this service?</p>
										</div>
										<div class="toggle-content"><p> Yes. You will get a confirmation SMS for this.</p> 
										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>What will happen if I do not have sufficient balance to subscribe or re-subscribe?</p>
										</div>
										<div class="toggle-content"><p> The service will not be activated and a message notifying you of low balance will be sent.<br/>
										Just recharge your line and try again.
										</p> 
										</div>
									</li>

									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p><i class="icon-question-sign"></i>How do I deactivate?</p>
										</div>
										<div class="toggle-content"><p> 
										<ul>
											<strong>On Airtel:</strong> To deactivate,
											<li>•	Send STOP MMS to 38296.</li>
											<strong>On Glo:</strong>  To deactivate,
											<li>•	Send STOP MMS to 32300.</li>
										</ul>
										</p> 
										</div>
									</li>

								</ul>

						<div class="grid_12 mbs">
 
						</div><!-- end grid12 acc -->
	
						<div class="grid_6 mbs">
						
						</div><!-- end grid6 acc -->
	 
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
	<script type="text/javascript" src="js/theme20.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.nanoscroller.js"></script>
	<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/gmap3.js"></script>
	<script type="text/javascript">
	/* <![CDATA[ */
		jQuery(function () {
		    jQuery("#map").gmap3({
		        marker: {
		            address: "5 Idowu Taylor Street, Victoria Island, Lagos, Nigeria"
		        },
		        map: {
		            options: {
		                zoom: 16
		            }
		        }
		    });
		});
	/* ]]> */
	</script>
</body>
<?php include 'rekua/tawkchat.php';?>
</html>