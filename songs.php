<?php
session_start();
// Check if the use clicked from the artist page..
if(isset($_GET['artist'])and isset($_GET['id']) and!empty($_GET['artist']))
	   {	
		   $_SESSION['artist'] = $_GET['artist'];	
		   $_SESSION['id'] = $_GET['id'];   	
		}
?>
<?php 

 //if the user did not click from the artist page
//if(!isset($_SESSION['artist']) or empty($_SESSION['artist']))
if(!isset($_SESSION['artist']))
    {
				    	header('Location:artists.php');
				    	exit();
	}
	    if(isset($_SESSION['artist']))
	   {		   	

				$posted_artist_name = $_SESSION['artist'];
				$posted_artist_id = $_SESSION['id'];

				// if the artist details in not in my database 
				include("rekua/konectam.php");
				// To confirm that the sent Artist ID is in the Database and not just typed on the url
				$query="SELECT * FROM artists where artist_id = '$posted_artist_id'";
				$result = mysql_query($query);

			      if (mysql_num_rows($result) <= 0)
				  	{
				  		header('Location:artists.php');
				  	}

				  	// if THe artist is found in the Database
				  	if(mysql_num_rows($result) >= 1)
				{
											

				  		 if (list($artist_id, $artist_name,  $artist_details, $artist_image)=mysql_fetch_array($result))
			       			{			    
							  
							  // Check for song image
						                    if (!file_exists("artists/$artist_image")) 
						                    { 
						                         $artist_image ="noimage.jpg";
						                    }
							            // echo $artist_details.'i see an here';
								//	echo 	$artist_details;
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
	<title><?php echo 	$artist_name; ?> | MusikGenie.com | Sharing Love through Music</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="Musikgenie | songs">
		<meta name="keywords" content="song dedication, caller tunez, bulk song dedication,Nigerian songs, hiphops, entertainment news, nigeria, zent systems, agidigbi ayodeji, victor, ">

	<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style.css" id="dark" media="screen" />
		<link rel="stylesheet" type="text/css" href="styles/icons/icons.css" media="screen" />
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="build.css">
		<link rel="stylesheet" href="font-awesome.min.css">

	<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.png"> 

	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/icons/font-awesome-ie7.min.css" />
	<![endif]-->

	<!--Jquery Script keep am for the head bcos audio need am  -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	

</head>
<body id="fluidGridSystem">
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
						<li><a href="index.php" class="toptip" title="Homepage"> <i class="icon-home"></i> </a></li>
						<li><a href="artists.php"> Artists </a></li>
						<li> <?php echo 	$artist_name; ?> </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="span8 posts">
				 
					<div class="def-block">
						<div class="post ">
							<!--<div class="music-single mbf clearfix"></div>--> <!-- Player -->
								<div class="fll four-radius">
									<?php echo '<img  src="artists/'.$artist_image.'" alt="'.$artist_name.'">';?>
									<br />
									<div class="likes">
										<h4><?php echo $artist_name ;  ?> </h4> 
									<!--	<a ><i class="icon-thumbs-up-alt"></i><small> Like</small> </a> -->
									</div>
								</div>
 
								<?php 
									echo 	$artist_details;
								 ?>

						<div class="mbf clearfix"></div>
						<h4> Tracks </h4><span class="liner"></span>

		<!-- start header -->		
			<?php //include 'rekua/hiddendedicator.php';?>		
		<!-- end header -->
 
						<div class="mbf clearfix">
						<p><strong> These songs are previews of the Full tracks. </strong> To listen to the FULL tracks, dial the song codes associated with each track on your mobile network.<br/>
				If you dedicate these songs to your loved ones, they will receive the FULL tracks.</p>
						<div><audio preload></audio></div>
						<div class="mtracks popular-by-person clearfix">
							<div class="content">

	<ol class="mylistofsongs" >

		<?php 
	 
			include("rekua/konectam.php");
							 
 							  $query="SELECT songs.* , artists.artist_name FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id WHERE songs.artist_id = $artist_id";
							  $result = mysql_query($query);

							//  $total_pages = mysql_num_rows($rs_result);

							      if (mysql_num_rows($result) > 0)
							      	{

					 		            while (list($song_id, $album_id, $artist_id,  $song_title, $song_image, $storage_path, $airtel_dial_to_listen_code, $airtel_dedication_code, $airtel_crbt_vcode, $glo_dial_to_listen_code, $glo_dedication_code, $glo_crbt_vcode, $genre_id, $show_on_homepage, $show_on_top_20, $artist_name)=mysql_fetch_array($result))
							             {			    

							             	echo ' 

		<div class="span12 mytrack">

			<div class="span6">
				<li class="eachsong">
					<a title="Listen to Preview" class="playsong" href="#" data-src="songs/'.$storage_path.'">
						<div>
							<i class="icon-play"></i> <span class="track_details">'.$song_title.'   | Dial the song-code:  '.$airtel_dial_to_listen_code.' on Airtel or '.$glo_dial_to_listen_code.' on Glo to listen to Full Track</span> 
						</div> 
					</a>
				</li>
			</div>

			
			<div class="span6"> <!--  buttons-->
				<span class="callertunezbtn_wraper">
				<button data-toggle="modal" data-id="'.$airtel_crbt_vcode.'" data-idx="'.$glo_crbt_vcode.'" href="#mycallertModal" class="open-AddBookDialog callertunezbtn" ><i class="icon-music"></i> Caller Tunes
				</button>
				</span>

				<button data-toggle="modal" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'" href="#myModal" class="open-AddBookDialog dedicatebtn" ><i class="icon-gift"></i> Dedicate</button>

					<div class="span12 sms_dedi_span"> 
						<a class="smsdedication" data-toggle="modal" href="#smsdeddi" data-idxx='.$song_title.' data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'">Dedicate  Via sms</a>  
					</div><!-- Close span12 sms Dedi -->

			</div><!--/    buttons-->
		</div><!--/    mytrack-->
		
						             		';
			              				}			              				 
			      					} 
 	?>
	</ol>



							</div><!-- /content-->
						</div> <!-- /mtracks popular-by-person clearfix-->
 
						</div>
 					<p> To Listen to the FULL tracks, dial the respective Song-Code above depending on your mobile network</p>
						</div><!-- post -->
 

					</div><!-- def block -->
				</div><!-- span8 posts -->

				<div class="span4 sidebar">

									<?php 									 
									include("rekua/top20artists.php");									 
									 ?> 

					<div class="def-block widget">
						<h4> Ads </h4><span class="liner"></span>
						<div class="widget-content tac">
							<a href="contact.php" title="Advertise"><img src="images/ads1.jpg" alt="#"></a>
						</div><!-- widget content -->
					</div><!-- def block widget ads -->

				</div><!-- span4 sidebar -->
			</div><!-- row clearfix -->
		</div><!-- end page content -->

		<!-- Start Footer -->
		<?php include 'rekua/footer.php';?>
		<!-- End Footer -->


	</div><!-- end layout -->
<!-- Scripts -->
	<scr ipt type="text/javascript" src="js/jq uery.min.js"></script>
	<sc ript type="text/javascript" src="boots trap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/mainscript.js"></script>
	<script type="text/javascript" src="js/theme20.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.jplayer.js"></script>
	<script type="text/javascript" src="js/ttw-music-player-min.js"></script>
	<script type="text/javascript" src="music/single-track.js"></script>
	<script type="text/javascript" src="js/jquery.nanoscroller.js"></script>
	<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<!--Script for AudioJs  -->
	<script src="audiojs/audio.min.js"></script>
	<script  type="text/javascript" src="audiojs/audio.min_body_script.js"></script>
 
 
 
		<!-- Start script to pass input to Caller Tunes and dedication modals -->
		<?php // include 'rekua/getinputsformodals.php';?>
		<!-- End  script to pass input to Caller Tunes and dedication modals -->
</body>
</html> 