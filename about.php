<?php 
 
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
	<title>About | MusikGenie.com |Sharing Love through Music</title>
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
						<li> About Us </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="span8 posts">
					<div class="def-block clearfix">
						<h4> About </h4><span class="liner"></span>
						<p><strong>MusikGenie</strong> is Nigeria’s foremost global portal for lovers of music.</p>
						<p>
 The platform houses thousands of music from all categories and ages...classic hip-hop, Afro beat, Jazz, R n B, old school Rap...etc. Share Love through music.<br/>
<strong>MusikGenie</strong>  is available every second of the day, weather you want to LISTEN directly from your mobile phone or from your laptop or other devices like a Tab. <br/> Try it now; <strong>dial 399 from an Airtel line</strong> and surf through different tunes. Or <strong>call 32300 from your Glo mobile </strong> and get every kind of music category.  It even gets better, SHARE songs you have listened to with one or more persons at the same time.  </p>

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
<?php include 'rekua/tawkchat.php';?>
</body>
</html>