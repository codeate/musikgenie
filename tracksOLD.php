<?php 

				/*	 if(!isset($_GET['product_id']))
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
	<title>Tracks | MusikGenie.com.ng | Sharing Love through Music </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="Videos | Remix - Music & Band Site Template HTML5 and CSS3">
		<meta name="keywords" content="musical Albums, nigerian songs, nigeria artists, hip hop songs, zent systems, agidigbi ayodeji, musikgenie.com.ng, nigerian musci videos,  nigeria artist gossips, sharing love through music">

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


	<!--Style for FLip GRid Layers Neede for the Flip Effects-->
	<link rel="stylesheet" type="text/css" href="styleflip.css" media="screen" />


	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body id="fluidGridSystem">
	<div id="layout" class="full">

		<!-- start header -->

		
			<?php include 'rekua/header.php';?>
		
		<!-- end header -->

		<!--Backgroung Image below the header-->
		<div class="under_header">
			<img src="images/assets/breadcrumbs14.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">
			<div class="row clearfix mb">
				<div class="Alphabet">
					<ul>
						<li><a  >  Genre: </a></li>
						<li><a href="tracks.php?prefix=a"> HipHop </a></li>
						<li><a href="tracks.php?prefix=b"> Gospel </a></li>
						<li><a href="tracks.php?prefix=c"> Blues </a></li>
						<li><a href="tracks.php?prefix=d"> Country </a></li>
						<li><a href="tracks.php?prefix=e"> AfroBeat </a></li>
						<li><a href="tracks.php?prefix=f"> Pop </a></li>
						<li><a href="tracks.php?prefix=g"> Highlife </a></li>
						<li><a href="tracks.php?prefix=h"> Soul </a></li>
						<li><a href="tracks.php?prefix=i"> Raggae </a></li>
						<li><a href="tracks.php?prefix=j"> Fuji</a></li>
						<li><a href="tracks.php?prefix=k"> Juju </a></li>
						<li><a href="tracks.php?prefix=l"> Dance Hall </a></li> 
						<li><a href="tracks.php?prefix=l"> Hausa </a></li>  
						<li><a href="tracks.php?prefix=l"> Igbo </a></li>  
						<li><a href="tracks.php?prefix=l"> Yoruba </a></li>  
						<li><a href="#"> Other Genre </a></li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="posts">
					<div class="def-block">
						<ul class="tabs">
							<li><a href="#Latest" class="active"> Songs </a></li>

							<!-- Ayo.. uncomment bellow to show more tabs if needed in the fuutre-->
					<!-- start coment	
							<li><a href="#Featured"> Featured Videos </a></li>
							<li><a href="#Lightbox"> With Lightbox </a></li>
					end comment-->

						</ul><!-- tabs -->

						<ul class="tabs-content">

						<!-- START TAB FOR ARTISTS  content -->
							<li id="Latest" class="active">
								<div class="video-grid">

 					<!-- End Flib Albums .. start badest flipper omo to badt  tp-grid .grid_3 -->	 			
								    <ul class="albums-photos-videos "> 
  
 	<div class="span12">
 		<!-- First Column -->
 		<div class="span10 scrollbar">
			 	<ol class="mylistofsongs" > 
					<div class="span12 mytrack">
						<div class="span6">
							<li class="">
								<a href="#" data-src="songs/oluchi.wav"><i class="icon-play"> Oluchi</i> | Dial:  00978 on glo,  08839 on Airtel</a>
							</li>
						</div>

						<div class="span6">
							<a  class="dedicatebtn" href="#"><i class="icon-music"></i> Caller Tunez</a>
							<a data-toggle="modal" data-id="ISBN-001122_BAAA" data-idx="ISBN-001122_id2BAAKK" href="#myModal" class="open-AddBookDialog dedicatebtn" ><i class="icon-gift"></i> Dedicate</a>
						</div>
					</div>
					
					
					<div class="span12 mytrack">
						<div class="span6">
							<li class="">
								<a href="#" data-src="songs/alingo.wav"><i class="icon-play"> Alingo</i> | Dial:  00978 on glo,  08839 on Airtel</a>
							</li>
						</div>
						
						<div class="span6">
							<a  class="dedicatebtn" href="#"><i class="icon-music"></i> Caller Tunez</a>
							<a data-toggle="modal" data-id="ISBN-001122_KKKK" data-idx="ISBN-001122_id2KKKK" href="#myModal" class="open-AddBookDialog dedicatebtn" ><i class="icon-gift"></i> Dedicate</a>
						</div>
					</div>
					 	
			 
				</ol> 
 		</div>
 		<!-- End Span 6 -->

 		<!-- Second Column -->
 		<div class="span2 scrollbar">
 			bnnnnnnng sssssss ssssssss ssssss sssssssssss ssss afwwfed afwfaef wwwwwea avrwa
 		</div>
 
 	</div>
 

 


									   </ul><!-- End Flib Albums -->
											    
								</div><!-- video grid -->
								<div class="clearfix mbf"></div>

											<!-- pagination to show more artist into page numbers -->
											<div class="clearfix"><br/></div>		
											<div class="pagination-tt clearfix">
												<ul>
													<li><span class="deactive">1</span></li>
													<li><a href="#" class="tbutton"><span>2</span></a></li>
													<li><a href="#" class="tbutton"><span>3</span></a></li>
													<li><span class="deactive">...</span></li>
													<li><a href="#" class="tbutton"><span>8</span></a></li>
												</ul>
												<span class="pages">Pcage 1 of 8</span>
											</div>
		<div><audio preload></audio></div>
											<!-- pagination -->
							</li><!-- END TAB FOR ARTISTS  content -->
							

						</ul><!-- end tabs -->
					</div><!-- def block -->
				</div><!-- posts -->

			</div><!-- row clearfix -->
		</div><!-- end page content -->

		<!-- Start Footer -->
		<?php include 'rekua/footer.php';?>
		<!-- End Footer -->

	</div><!-- end layout -->
<!-- Scripts -->
	<script type="text/javascript" src="js/jque ry.min.js"></script>
	<script type="text/javascript" src="bootst rap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/theme20.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<!--Script for AudioJs  -->
	<script src="audiojs/audio.min.js"></script>
	<script  type="text/javascript" src="audiojs/audio.min_body_script.js"></script>
</body>
</html>