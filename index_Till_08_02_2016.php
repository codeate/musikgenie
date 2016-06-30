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
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

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

			<!-- row music player Playsongs Here -->
			<div class="row clearfix mbf">	

				<div class="music-player-list"></div>

			</div>
			<!-- row music player Ends here -->

			<div class="clearfix"></div>

	<!-- Feeatured Songs box -->
			<div class="row row-fluid clearfix mbf">
				<div class="posts">
					<div class="def-block">
						<ul class="tabs">
							<li><a href="#Latest" class="active"> FEATURED SONGS </a></li>
							 
						</ul><!-- tabs -->

						<ul class="tabs-content">
							<li id="Latest" class="active">
								<div class="video-grid">

<?php 
 
							$query="SELECT songs.* , artists.artist_name FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id WHERE songs.show_on_homepage = 'yes' order by RAND()  LIMIT 12"; 
							  $result = mysql_query($query);

							      if (mysql_num_rows($result) > 0)
							      	{
							            while (list($song_id, $album_id, $artist_id,  $song_title, $song_image, $storage_path, $airtel_dial_to_listen_code, $airtel_dedication_code, $airtel_crbt_vcode, $glo_dial_to_listen_code, $glo_dedication_code, $glo_crbt_vcode, $genre_id, $show_on_homepage, $show_on_top_20, $likes, $artist_name)=mysql_fetch_array($result))
							             {	
							            
											// Check for song image
						                    if (!file_exists("songs/songimages/$song_image")) 
						                    { 
						                         $song_image ="noimage.jpg";
						                    }

							             	echo '
  									<a href="songs/track/'.$song_id.'" title=
											          "'.$artist_name.' - '.$song_title.'" class="grid_3">
										<img class="artisthome_image" alt="'.$song_title.'" src="songs/songimages/'.$song_image.'" />
										<span class="capitalised"><strong>'.$song_title.'</strong>'.$artist_name.'</span>
									</a>

 
							             		';
			              				}
			      					}
 
 ?>  
								</div><!-- video grid -->
							</li><!-- tab content -->
  
						</ul><!-- end tabs -->
					</div><!-- def block -->
				</div><!-- posts -->

			</div><!-- row clearfix -->


 	

			<div class="row row-fluid clearfix mbf">
				<div class="span8">
					<div class="def-block">
						<h4> Latest News </h4><span class="liner"></span>

<?php 

				 			 $queryx="SELECT * from news order by news_id DESC LIMIT 3 ";
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
		<?php include 'rekua/footer.php';?>
		<!-- End Footer -->

	</div><!-- end layout -->
<!-- Scripts -->
	<scr ipt type="text/javascript" src="js/jq uery.min.js"></script>
	<script type="text/javascript" src="js/theme20.js"></script>
	<scr ipt type="text/javascript" src="boot strap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js"></script>	
	<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.jplayer.js"></script>
	<script type="text/javascript" src="js/ttw-music-player-min.js"></script>
	<script type="text/javascript" src="music/myplaylist-home.js"></script>
	<script type="text/javascript" src="js/jquery.nanoscroller.js"></script>
	<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
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
           
	 
<!-- Send Data to Dedicate Modal Script -->
<script type="text/javascript">
	$(document).on("click", ".track", function () {
	 var myBookId = $(this).find(".duration").html();
	// var data =$('.date').text();
	var arr = myBookId.split(',');
	var airteldedi = arr[0];
	var glodedi = arr[1];
	var airtelcaller = arr[2];
	var glocaller = arr[3];
    // var myBookId = $("span.duration").html();
    //  var myBookIdx = $("span.durationx").text();
    $(".modal-body #airteldedi").val( airteldedi );
    $(".modal-body #glodedi").val( glodedi );
    $(".modal-body #airtelcrbt").val( airtelcaller );
    $(".modal-body #glocrbt").val( glocaller );

    //Empty prvious Dedication success or failed nofication on click
     $('#dediloading').html('');

      // if Glo Dedication is not Available
     if ($(".modal-body #glodedi").val() == 'nil' || $(".modal-body #glodedi").val() == 'nill' || $(".modal-body #glodedi").val() == '') {
     	$(".modal-body .select-networks-btn .btn-success").hide();
     };
}); 

		$(document).ready(function(){
			//  $('.dedicatebtn').attr('disabled','disabled'); 
		         if($(airtelcaller) == 'nil')	
		        {
		           $('.callertunezbtn').attr('disabled','disabled');
		           
		          $('.callertunezbtn').attr('title','This song is not available on Caller Tunez');
		        // $('.callertunezbtn').tooltip({title: "toooo", html: true, placement: "bottom"}); 
		        }
		 
		});


</script>
<!-- /Send Data to Dedicate Modal Script -->

</body>
</html>

