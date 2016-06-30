<?php
session_start();


 // checking if anyone has visited before
 	include("rekua/konectam.php");
	$query="SELECT unique_count FROM visitor_counter order by unique_count DESC LIMIT 1"; 
	$result = mysql_query($query);

		if (mysql_num_rows($result) <= 0) 
		{	
				$counterVal=1;
				$date = date('M d, Y h:i:s');
 			    mysql_query("INSERT INTO visitor_counter VALUES ('null', '$counterVal', '$date')"); 
		}

	  if (mysql_num_rows($result) > 0)
		{
		 if (list($unique_count)=mysql_fetch_array($result))
		{	
			$counterVal=$unique_count;
			// Has visitor been counted in this session?
			// If not, increase counter value by one
			if(!isset($_SESSION['hasVisited']))
			{
			  $_SESSION['hasVisited']="yes";
			  $counterVal++; 
			  	$date = date('M d, Y h:i:s');

 			    mysql_query("INSERT INTO visitor_counter VALUES ('null', '$counterVal', '$date')"); 
  				mysql_query("UPDATE visitor_counter SET unique_count = '$counterVal', date = '$date' WHERE  counter_id = 1"); 
	

			}

		}
	}
 
 ?>
 <?php
/*
// Check counter text is set
$counter_name = "counter.txt";

// Check if a text file exists. If not create one and initialize it to zero.
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}

// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

// Has visitor been counted in this session?
// If not, increase counter value by one
if(!isset($_SESSION['hasVisited'])){
  $_SESSION['hasVisited']="yes";
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f); 
}
	  include("rekua/konectam.php");
	$date = date('M d, Y h:i:s');
  	mysql_query("UPDATE visitor_counter SET unique_count = '$counterVal', date = '$date' WHERE  counter_id = 2 "); 
	
     mysql_query("INSERT INTO visitor_counter VALUES ('null', '$counterVal', '$date')"); 

*/	  
 ?>

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
	<title>MusikGenie.com | Sharing Love through Music </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="MusikGenie - sharing love through music">
		<meta name="keywords" content="MusikGenie, music, nigerian artists, nigerian songs, nigerian news, songs, download, events, zent systems, zent, agidigbi">

	<!-- Styles -->
		<!-- base -->		
			<?php include 'rekua/base.php';?>		
		<!-- base -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="styletry.css" id="dark" media="screen" />
		<link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="styles/icons/icons.css" media="screen" />
		<!--<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.png">


	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/icons/font-awesome-ie7.min.css" />
	<![endif]-->



	<!--Style for FLip GRid Layers Neede for the Flip Effects-->
		<link rel="stylesheet" href="build.css">
		<link rel="stylesheet" href="font-awesome.min.css">

	<!--Jquery Script keep am for the head bcos audio need am  -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '1108041639220436');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1108041639220436&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

</head>
<body id="fluidGridSystem">
	<div id="layout" class="boxed-margin">
		<!-- start header -->		
			<?php include 'rekua/header.php';?>		
		<!-- end header -->

		<!-- Start Revolution Slider -->
			<?php include 'slides/slider.php';?>
		<!-- End Revolution Slider -->

		<div class="page-content">

			<div class="span12 ">
			<div class="span8 offset1 welcome_msg">
			<p>
			Show love to your loved ones by sending songs directly into their mobile phones..
			Its simple.. pick a song you love, click on DEDICATE button next to the song then fill the form to DEDICATE the song to the person.
			</p>
			</div>
			</div>



			<!-- row music player Playsongs Here -->
			<!--
			<div class="row clearfix mbf">	

				<div class="music-player-list"></div>

			</div>
			-->
			<!-- row music player Ends here -->

			<div class="clearfix"></div>

	<!--- -->
			<!-- Song Listing pannels -->
			<div class="row row-fluid "> 
				<!--- First Column -->
				<div class="span12">				 
					<div class="def-block">						 
						<div class="mtracks popular-by-person">
							<div class="content">
							<h4> Top Love Songs </h4> 
								<ol class="mylistofsongs koko" > 
<?php 
	 
							include("rekua/konectam.php");

 							  	 	// Select Without Genre
 							  	$query="SELECT DISTINCT   songs.* , artists.artist_name FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id INNER JOIN song_genre ON song_genre.song_id = songs.song_id WHERE song_genre.genre_id = '10' order by songs.likes  DESC ";
 				  
 								// now the real result
							  $result = mysql_query($query); 

							      if (mysql_num_rows($result) > 0)
							      	{

					 		            while (list($song_id, $album_id, $artist_id,  $song_title, $song_image, $storage_path, $airtel_dial_to_listen_code, $airtel_dedication_code, $airtel_crbt_vcode, $glo_dial_to_listen_code, $glo_dedication_code, $glo_crbt_vcode, $show_on_homepage, $show_on_top_20, $likes, $artist_name)=mysql_fetch_array($result))
							             {			    
							             	// blow the rows out my guy..lol

							             	echo ' 
									<div class="mytrack">

										<div class="span8"> <!--  span8  title-->
											<li class="eachsong">
												<a class="playsong" href="#" data-src="songs/'.$storage_path.'">
												<i class="icons-play playsongplay"></i>
											</a>
											</li>
												<a href="songs/track/'.$song_id.'" class="track_details">
												<div>
												 <span class="scrollup">'.$song_title.' By '.$artist_name.' <div class="hide-on-mobile">Dial the song-code:  '.$airtel_dial_to_listen_code.' on Airtel or  '.$glo_dial_to_listen_code.' on Glo to listen to full Track</div></span> 
												</div>
												</a>
												
										</div> <!-- /  span8  title-->

										
										<div class="span4 withsmsdedi" > <!--  span4  buttons-->

											 
											<button data-toggle="modal" data-id="'.$airtel_crbt_vcode.'" data-idx="'.$glo_crbt_vcode.'" href="#mycallertModal" class="open-AddBookDialog callertunezbtn callertune" ><i class="icon-music"></i> Caller Tunes
											</button>
											  <!--/  Caller Tunez  button--> 


											<button data-toggle="modal" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'" href="#myModal" class="open-AddBookDialog dedicatebtn dedicate" ><i class="icon-gift"></i> Dedicate
											</button> <!--/  Dedicate button--> 

											
										</div>  <!--/buttons--> 
									</div>  <!--/    mytrack-->
							             		';
			              				} 			              				 
			      					} 
 ?>
 
								</ol> 	

						</div> 				  
						</div> <!-- mtracks popular-by-person clearfix -->
					</div><!-- def block -->
				</div><!-- span6   --> 
			</div><!-- row clearfix -->		 
	   
			<!-- Top Mood -->
			<div class="row row-fluid clearfix mbf">
				<div class="posts">
					<div class="def-block" style="min-height: 400px;">

					<div class="topbar">
						<div id="close" class="tbutton small tback"><span>Back to Moods</span></div>
						<h4 id="name">Top Moods</h4><span class="liner"></span>
					</div> 
					<ul id="tp-grid" class="tp-grid">
<?php
					////////////////////////////////////////////
					function showGenreSongs ($genre)
					{
							//$genre = 1;
							$query="SELECT DISTINCT   songs.* , artists.artist_name FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id INNER JOIN song_genre ON song_genre.song_id = songs.song_id WHERE song_genre.genre_id = '$genre' order by songs.likes  DESC LIMIT 12"; 
							  $result = mysql_query($query);
							      if (mysql_num_rows($result) > 0)
							      	{
							      		$genrenamequery = "SELECT genre from genre WHERE genre_id = '$genre'";
							      		$genrenameresult = mysql_query($genrenamequery);
								      	  list($genrename)=mysql_fetch_array($genrenameresult);
								       
							            while (list($song_id, $album_id, $artist_id,  $song_title, $song_image, $storage_path, $airtel_dial_to_listen_code, $airtel_dedication_code, $airtel_crbt_vcode, $glo_dial_to_listen_code, $glo_dedication_code, $glo_crbt_vcode, $show_on_homepage, $show_on_top_20, $likes, $artist_name)=mysql_fetch_array($result))
							             	{	
												// Check for song image
							                    if (!file_exists("songs/songimages/$song_image")) 
							                    { 
							                         $song_image ="noimage.jpg";
							                    }
							             	echo '
				<li data-pile="'.$genrename.'" class="grid_3"><a href="songs/track/'.$song_id.'"><img src="songs/songimages/'.$song_image.'"alt="'.$song_title.'"/><span class="capitalised"> '.$song_title.' - '.$artist_name.'</span></a></li>
 
							             		';
							            	}
							         }  
					} // end function showGenreSongs
			////////////////////////////////////////////////////////////////////////////////////////////////
					// Call showGenreSongs 
					// for my local host
					 $array = array( 1, 2, 3, 4, 5,6,7,8);

					 // for online
					 // $array = array( 14,16,18,19,20,13,22,3,4,2,12,7); 
					 foreach( $array as $value )
					 	{
        				    showGenreSongs($value);;
        				} 
?> 
 				</ul>	
						<a href="tracks" class="sign-btn tbutton small"><span>More...</span></a>
					</div><!-- def block -->

				</div><!-- posts -->

			</div><!-- row clearfix --> 

			<div class="row row-fluid clearfix mbf">
				<div class="span8">
					<div class="def-block">
						<h4> Latest News </h4><span class="liner"></span>

<?php 

				 			 $queryx="SELECT * from news order by news_id DESC LIMIT 7 ";
							  $resultx = mysql_query($queryx);

							      if (mysql_num_rows($resultx) > 0)
							      	{
							            while (list($news_id, $news_title, $featured_image, $post_content, $news_date, $news_author, $news_categories, $news_tags)=mysql_fetch_array($resultx))
							             {	 
							             	echo '

						<div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
							<div class="span5"><a href="enews/news'.$news_id.'"><img class="four-radius" src="'.$featured_image.'" alt="'.$news_title.'"></a> </div>
							<div class="span7">
								<h3 class="news-title"> <a href="enews/news'.$news_id.'">'.$news_title.'</a></h3>
								 <div class="news_block_small">'.$post_content.'</div>
								<div class="meta">
									<span> <i class="icon-time mi"></i>'.$news_date.' 
								</div><!-- meta -->
								<a href="enews/news'.$news_id.'" class="sign-btn tbutton small"><span>Read More</span></a>
							</div><!-- span7 -->
						</div><!-- news --> 
							             	';

							             }
							     	}
 ?>

						<div class="load-news tac"><a href="enews" class="tbutton small"><span>Go to Main News Page</span></a></div>
					</div><!-- def block -->
				</div><!-- span8 news -->

				<div class="span4">

					<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
						<h4>Upcoming Events &nbsp;&nbsp;&nbsp; <a href="events" class="tbutton buy-ticket small"> <span>more</span></a></h4><span class="liner"></span>  
					 <?php include 'rekua/eventtop3.php';?>
 					<!--
						<div class="widget-content row-fluid event-thumb-content">
						<a href="#"><img class="eventlistthumb" src="news/king-battle-30.jpeg" alt="event"></a>
							<div class="span3 tac">
								<span class="event-date">22</span>
								<span class="event-month">aug</span>
								<span class="event-date">Lagos</span>
							</div>
							<div class="span9">
								<a href="#"><h4>Headies Awards</h4></a>
								<p>  - music awards - music awards - music awards    </p>
								<a href="#" class="tbutton buy-ticket small"><span>View event</span></a>
							</div>
						</div>    --> 
						 <a href="events" class="tbutton buy-ticket small"><span>View more events</span></a>
					</div><!-- def block widget events -->  
						<!-- Start Revolution Slider -->
								<?php include 'rekua/top20artists.php';?>
						<!-- End Revolution Slider -->  
					<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
						<h4>   Videos of the Week </h4><span class="liner"></span>
						<div class="widget-content row-fluid">
							<div class="videos clearfix flexslider">
								<ul class="slides">
										<!-- Start Revolution Slider -->
											<?php include 'rekua/videooftheweek.php';?>
										<!-- End Revolution Slider -->
								</ul> 
							</div>
						</div><!-- widget content -->
					</div><!-- def block widget videos --> 

				</div><!-- span4 sidebar -->
			</div><!-- row clearfix -->

		</div><!-- end page content -->

				<!-- Start Footer -->
		
		<?php //include 'rekua/footer.php';?>
		<!-- End Footer -->

	</div><!-- end layout -->
<?php include 'rekua/footer-playbar.php';?>
<!-- Scripts -->
	<script type="text/javascript" src="js/mainscript.js"></script>
	<!--<scr ipt type="text/javascript" src="js/jq uery.min.js"></script> -->
	<script type="text/javascript" src="js/theme20.js"></script> 
	<script type="text/javascript" src="js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js"></script>	
	<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.jplayer.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.63321.js"></script>
	<script type="text/javascript" src="js/jquery.stapel.js"></script>
	<!--<script type="text/javascript" src="js/ttw-music-plassyer-min.js"></script>
	<script type="text/javascript" src="music/myplaylist-home.js"></script> -->
	<script type="text/javascript" src="js/jquery.nanoscroller.js"></script>
	<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<!--Script for AudioJs  -->
	<script src="audiojs/audio.min.js"></script>
	<script  type="text/javascript" src="audiojs/audio.min_body_script.js"></script>
	<script type="text/javascript">	
	/* <![CDATA[ */
		var tpj=jQuery;
		//tpj.noConflict();
		tpj(document).ready(function() {
		if (tpj.fn.cssOriginal!=undefined)
			tpj.fn.css = tpj.fn.cssOriginal;
			var api= tpj('.revolution').revolution({
				delay:9000,
				startheight:380,
				startwidth:960,
				hideThumbs:200,
				thumbWidth:80,
				thumbHeight:50,
				thumbAmount:5,
				navigationType:"none",
				navigationArrows:"verticalcentered",
				navigationStyle:"square",	
				touchenabled:"on", 
				onHoverStop:"on", 
				navOffsetHorizontal:0,
				navOffsetVertical:20,
				shadow:0
			});
		});
	/* ]]> */
	</script>
	<script type="text/javascript" src="customize/script.js"></script><link rel="stylesheet" type="text/css" href="customize/style.css" media="screen" /><style id="themecolors" type="text/css"></style> 
<?php include 'rekua/tawkchat.php';?> 
</body>
</html>

