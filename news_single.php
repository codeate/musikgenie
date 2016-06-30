<?php 
if(!isset($_GET['news']) or empty($_GET['news']))
    {
				    	header('Location:enews');

				    	exit();
	}


	    if(isset($_GET['news']))
	   {		   	
				$posted_new_id = $_GET['news'];
				//$posted_new_id = $_GET['id'];
	
				include("rekua/konectam.php");
				// To confirm that the sent Artist ID is in the Database and not just typed on the url
				$query="SELECT * FROM news WHERE news_id = '$posted_new_id'";
				$result = mysql_query($query);

			      if (mysql_num_rows($result) <= 0)
				  	{
				  		header('Location:enews');
				  	}

				  	// if THe news is found in the Database
				  	if(mysql_num_rows($result) >= 1)
				{

				  		 if (list($news_id, $news_title, $featured_image, $post_content, $news_date, $news_author, $news_categories, $news_tags)=mysql_fetch_array($result))
							   {				    
							    //   echo $news_id.'i see an here<br />';
								// echo 	$featured_image;
								//  echo 	$news_image;
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
	<title><?php echo $news_title;?> | MusikGenie.com </title>
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
			<div class="row row-fluid    ">
				<div class="span8 posts">
					<div class="def-block">
						<div class="post row-fluid  ">

							<h3 class=" "><?php echo "$news_title";?> </h3>
							 <img src="<?php echo "$featured_image";?>" alt="#">  
							<p><?php echo "$post_content";?></p>

							<div class="social_share"><span>Share on Social Media</span>
								<br/> 


								<div class="fb-share-button" data-layout="button"></div> 
							 	 
								<a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a>
								 

								
							</div>							
							
							<div class="meta">
								<span> <i class="icon-user mi"></i><?php echo $news_author;?> </span> 
								<span> <i class="icon-time mi"></i><?php echo $news_date;?></span> 
							</div><!-- meta -->

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

								<script data-cfasync="false" placementID = "3093" src="https://www.adblabla.com/widgets/placement.js" type="text/javascript"></script> 
<div id="widget-container_3093"></div>
	
							<script data-cfasync="false" placementID = "3093" src="https://www.adblabla.com/widgets/placement.js" type="text/javascript"></script> 
<div id="widget-container_3093"></div>
								 
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
</body>
</html>