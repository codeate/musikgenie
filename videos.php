<?php 

 
 ?>
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" xmlns="http://www.w3.org/1999/xhtml" lang="en-US"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<!--<![endif]-->
<head>
	<title>Videos of the week | MusikGenie.com | Sharing Love through Music </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="Musikgenie | Artists">
		<meta name="keywords" content="song dedication, caller tunez, bulk song dedication,Nigerian songs, hiphops, entertainment news, nigeria, zent systems, agidigbi ayodeji, victor, ">

	<!-- Styles -->
		<!-- base -->		
			<?php include 'rekua/base.php';?>		
		<!-- base -->
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

		<!--Backgroung Image below the header-->
		<div class="under_header">
			<img src="images/assets/breadcrumbs14.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">
			<div class="row clearfix mb">
			<div class="breadcrumbIn">
					<ul>
						<li><a href="home" class="toptip" title="Homepage"> <i class="icon-home"></i> </a></li>
					 
						<li> Videos </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="posts">
					<div class="def-block">
						<ul class="tabs">
							<li><a href="#Latest" class="active"> Video of the Week </a></li> 
						</ul><!-- tabs -->

						<div class="post row-fluid clearfix">
   <?php
   include("rekua/konectam.php");
     $query="SELECT * FROM videos_of_the_week order by video_id desc LIMIT 1";
      $result = mysql_query($query);
            if (mysql_num_rows($result) > 0)
               {
                    //   $sn = 1;
            	  	 if (list($video_id, $youtube_embed_url, $artist, $title)=mysql_fetch_array($result))
                 		{ 
                 			 
                        }
                } 
							 if(isset($_GET['video']))
								    {
								    	$video= $_GET['video'];
								     } 
								else{
									$video = $youtube_embed_url;
								}
 	?> 
						<iframe width="854" height="480" src="<?php echo 'https://www.youtube.com/embed/'.$video;?>" frameborder="0" allowfullscreen></iframe>

						</div>  
					</div>
				</div>
			</div>

			<div class="row row-fluid clearfix mbf">
				<div class="posts">
					<div class="def-block">
 
						<ul class="tabs-content">

						<!-- START TAB FOR ARTISTS  content -->
							<li id="Latest" class="active">
								<div class="video-grid">
   <?php
   include("rekua/konectam.php");
     $query="SELECT * FROM videos_of_the_week order by video_id desc LIMIT 1,4";
      $result = mysql_query($query);
            if (mysql_num_rows($result) > 0)
               {
                    //   $sn = 1;
            	  	 while (list($video_id, $youtube_embed_url, $artist, $title)=mysql_fetch_array($result))
                 		{ 
                 			echo '
                 				<a href="videos/'.$youtube_embed_url.'" class="grid_3">
										<iframe src="https://www.youtube.com/embed/'.$youtube_embed_url.'" frameborder="0"></iframe>
										<i class="icon-play-sign icon_vid_home"></i>
										<span><strong>'.$artist.' </strong> '.$title.'</span>										 
									</a> 
                 			';
                        }
                }
         ?> 
								 
								</div><!-- video grid -->								
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
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/theme20.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>