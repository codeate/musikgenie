<?php 
if(!isset($_GET['event']) or empty($_GET['event']))
    {
		   	header('Location:events'); 
			   	exit();
	} 
	    if(isset($_GET['event']))
	   {		   	
				$posted_new_id = $_GET['event']; 
				include("rekua/konectam.php");	
				// To confirm that the sent Artist ID is in the Database and not just typed on the url
				$query="SELECT * FROM events WHERE event_id = '$posted_new_id'";
				$result = mysql_query($query);

			      if (mysql_num_rows($result) <= 0)
				  	{
				 		header('Location:events');
				  	} 
				  	// if THe event is found in the Database
				  	if(mysql_num_rows($result) >= 1)
				{ 
				  		 if (list($event_id, $event_title, $event_date, $event_time, $event_venue, $event_city, $event_img, $event_details)=mysql_fetch_array($result))
							   { 
							            $event_date = explode('-', $event_date);
 										$event_year = $event_date[0];
 										$event_month = $event_date[1];
 										$event_day = $event_date[2];

 										switch ($event_month) 
 										{
 											case '01':
 												$event_month = 'January';
 												break;
 											case '02':
 												$event_month = 'February';
 												break;
 											case '03':
 												$event_month = 'March';
 												break;
 											case '04':
 												$event_month = 'April';
 												break;
 											case '05':
 												$event_month = 'May';
 												break;
 											case '06':
 												$event_month = 'June';
 												break;
 											case '07':
 												$event_month = 'July';
 												break;
 											case '08':
 												$event_month = 'August';
 												break;
 											case '09':
 												$event_month = 'September';
 												break;
 											case '10':
 												$event_month = 'October';
 												break;
 											case '11':
 												$event_month = 'November';
 												break;
 											case '12':
 												$event_month = 'December';
 												break;
 											
 											default:
 												$event_month = $event_month;
 												break;
 										}
		         			}
				}
		} 
 ?>

<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" xmlns="http://www.w3.org/1999/xhtml" lang="en-US"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<!--<![endif]-->
<head>
	<title><?php echo $event_title;?> | MusikGenie.com </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="MusikGenie - sharing love through music">
		<meta name="keywords" content="artist news, artist gossips, MusikGenie, music, nigerian artists, nigerian songs, nigerian news, songs, download, events, zent systems, zent, agidigbi">
 
	<!-- Styles -->
		<!-- base -->		
			<?php include 'rekua/base.php';?>		
		<!-- base -->
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
<!-- Facebook Share SCricpt -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- /Facebook Share SCricpt -->

<!-- Twitter Tweet SCricpt -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<!-- /Twitter Tweet SCricpt -->
  
	<div id="layout" class="full">
		<!-- start header -->		
			<?php include 'rekua/header.php';?>		
		<!-- end header -->

		<div class="under_header">
			<img src="images/assets/breadcrumbs14.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">
			<div class="row clearfix mb">
				<div class="breadcrumbIn">
					<ul>
						<li><a href="home" class="toptip" title="Homepage"> <i class="icon-home"></i> </a></li>
						<li><a href="events"> Event </a></li>
						<li> <?php echo "$event_title";?> </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="span8 posts">
					<div class="def-block">
						<div class="post row-fluid clearfix">
							 <img src="<?php echo "$event_img";?>" alt="#"> 
							<h3 class="post-title">   <?php echo "$event_title";?> </h3>

							<?php
								echo '
                            <div class="eventminilist"><span>Date:</span><span>'.$event_month.'  '.$event_day.',</span></div>

							<div class="eventminilist"><span>Time:</span><span>'.$event_time.',</span></div>

							<div class="eventminilist"><span>City:</span><span>'.$event_city.'</span></div>

							<div class="eventminilist"><span>Venue:</span><spann>'.$event_venue.'.</spann></div>
 							<hr/>
								';
							?>

							<p><?php echo "$event_details";?></p>

							<div class="social_share"><span>Share on Social Media</span>
								<br/> 


								<div class="fb-share-button" data-layout="button"></div> 
							 	 
								<a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a>
								  
							</div>		 

							<div class="like-post">
								<div id="fb-root"></div>
								<script>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								   
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>
								<div  ></div>
							</div><!-- like -->
						</div><!-- post --> 

					</div><!-- def block -->
				</div><!-- span8 posts -->

				<div class="span4 sidebar">

					<?php 									 
						include("rekua/top20artists.php");									 
					 ?>  
					<div class="def-block widget">
						<h4> Featured Videos </h4><span class="liner"></span>
						<div class="widget-content row-fluid">
							<div class="videos clearfix flexslider">
								<ul class="slides">
 										<!-- Start Revolution Slider -->
											<?php include 'rekua/videooftheweek.php';?>
										<!-- End Revolution Slider -->
								</ul>
								</ul>
							</div>
						</div><!-- widget content -->
					</div><!-- def block widget videos --> 
				<!--
					<div class="def-block widget">
						<h4> Ads </h4><span class="liner"></span>
						<div class="widget-content tac">
							<a href="contact" title="Advertise"><img src="images/ads1.jpg" alt="#"></a>
						</div>
					</div>
				-->
					<!-- def block widget ads -->

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
	<script type="text/javascript">
	/* <![CDATA[ */
	// Disqus
		var disqus_shortname = 'remixtemplate'; 
		(function () {
			var s = document.createElement('script'); s.async = true;
			s.type = 'text/javascript';
			s.src = '//' + disqus_shortname + '.disqus.com/count.js';
			(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
		}());
	/* ]]> */
	</script>
	<script type="text/javascript" src="customize/script.js"></script><link rel="stylesheet" type="text/css" href="customize/style.css" media="screen" /><style id="themecolors" type="text/css"></style> 
<?php include 'rekua/tawkchat.php';?>
</body>
</html>