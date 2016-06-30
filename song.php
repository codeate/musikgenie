<?php
ob_start();
session_start();

// Check if the use clicked from the valid page..
if(isset($_GET['song']) and (isset($_GET['song']) == (preg_match(' /^[1-9][0-9]*$/', $_GET['song']))) and !empty($_GET['song']))
	   {	
		   $_SESSION['song'] = $_GET['song'];	
		  //  $songid = $_SESSION['song'];
		  // $_SESSION['id'] = $_GET['id'];   	
		}

		elseif(!isset($_SESSION['song']))
   		 {
				    	header('Location:../../tracks');
				    	exit();
		}

// For 2 baba codedtinz

	if ($_SESSION['song'] == 352) 
	{
		header('Location:/../codedtinz');
				    	exit();
	}
// End 2baba redirect codedtinz

			include("rekua/konectam.php");
			// getting session song it..
			$songid = $_SESSION['song'];

			// looking for the song in db
 				$query="SELECT DISTINCT   songs.* , artists.artist_name FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id WHERE songs.song_id = $songid";

 				$result = mysql_query($query); 

 				if (mysql_num_rows($result) < 1)
 				{
 					header('Location:../../tracks');
				    	exit();
 				} 
					 		            if (list($song_id, $album_id, $artist_id,  $song_title, $song_image, $storage_path, $airtel_dial_to_listen_code, $airtel_dedication_code, $airtel_crbt_vcode, $glo_dial_to_listen_code, $glo_dedication_code, $glo_crbt_vcode,   $show_on_homepage, $show_on_top_20, $likes, $artist_name)=mysql_fetch_array($result))
							             {			    

							             //	echo 'llklk';
							             }

							            // Check for song image
						                    if (!file_exists("songs/songimages/$song_image")) 
						                    { 
						                         $song_image ="noimage.jpg";
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
	<title><?php echo "Dedicate -".$song_title."- by ".$artist_name.""; ?> | MusikGenie.com |</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="Musikgenie | Songs">
		<meta name="keywords" content="song dedication, caller tunez, bulk song dedication,Nigerian songs, hiphops, entertainment news, nigeria, zent systems, agidigbi ayodeji, victor, ">

	<!-- Styles --> 
		<!-- base -->		
			<?php include 'rekua/base.php';?>		
		<!-- base -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" media="screen" />

		<link rel="stylesheet" type="text/css" href="styletry.css" id="dark" media="screen" />
		<link rel="stylesheet" type="text/css" href="xtra.css" id="dark" media="screen" />
		<link rel="stylesheet" type="text/css" href="styles/icons/icons.css" media="screen" />
		<!--<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

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

		<div class="hide-image">
			<?php echo '<img src="songs/songimages/'.$song_image.'" alt="Song Image">';?>
		</div>
		<div class="under_header">
			
		</div><!-- under header -->



		<div class="page-content back_to_up">



			<!-- curled out song section-->
			<div class="row row-fluid">
				<div class="span12 posts">				 
					<div class="def-block">
						<div class="p ost">

			<?php


							        
			?>
							<!--<div class="music-single mbf clearfix"></div>--> <!-- Player -->
								
								<div class="fll four-radius">
									<?php echo '<img class="img-responsive"  src="songs/songimages/'.$song_image.'" alt="">';?>
									 
									
								</div>
 									 
								<div class="single-song-details">
									<?php 
									echo '

									<ul>
										<li>
											<button data-toggle="modal" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'" href="#myModal" class="open-AddBookDialog dedicate btn-larger" ><i class="icon-gift"></i> Dedicate Full song to someone
											</button> <!--/  Dedicate button-->	
										</li>

										<li>											 
											<button data-toggle="modal" data-id="'.$airtel_crbt_vcode.'" data-idx="'.$glo_crbt_vcode.'" href="#mycallertModal" class="open-AddBookDialog callertunebtn-larger btn-larger" ><i class="icon-music"></i> Set as your Caller Tunes &nbsp;
											</button>
											 <!--/  Caller Tunez  button--> 																				
										</li>

										

										<!-- Show only on Mobiles -->
										<div class="showon-mobile">

										<br/>

										<li class="stay-block">
											<ol class="single-page-paly-button">
												<li >
													<a class="playsong" href="#" data-src="songs/'.$storage_path.'">
													<i class="icons-play playsongplay icon-larger"></i>
													</a>
												</li>
											</ol>


											<a href="http://www.facebook.com/sharer/sharer.php?u=http://www.musikgenie.com/songs/track/'.$song_id.'" target="_blank" class="">
												 <i class="icons-social-facebook icon-larger"></i>
											</a> <!--/  facebook button--> 

											<a class=""  href="https://twitter.com/intent/tweet?text=I just dedicated -'.$song_title.'- by '.$artist_name.' on MusikGenie http://musikgenie.com/songs/track/'.$song_id.'" target="_blank" >
												<i class="icons-social-twitter icon-larger"></i>
											</a> <!--/  Tweeter button-->

 
											<a class="smsdedication" data-toggle="modal" href="#smsdeddi" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'" songtitle="'.$song_title.'"><i class="icons-mail icon-larger"></i></a> <!--/  sms button-->

										</li>

										<li>&nbsp;</li>

										</div>
										<!-- /Show only on Mobiles -->

 
										<div class="block">
										<li class="stay-block">
											Track: <span class="sms_song_title"> <strong>'.$song_title.'</strong></span>
									
										</li>

										<li class="stay-block">
											 <strong>Artiste:</strong> <a href="artiste/'.$artist_id.'">'.$artist_name.'</a>
									
										</li>

										<li class="stay-block">To Listen to FULL track, dial;</li>

										<li class="network-code">
											 Song Listening code: <strong>'.$airtel_dial_to_listen_code.'</strong> on <strong>Airtel</strong>
									
										</li>

										<li class="network-code">
											Song Listening code: <strong>'.$glo_dial_to_listen_code.'</strong> on <strong>Glo</strong> 
										</li>
										</div>
										
										<!-- Hide on mobile phones -->
										<div class="hide-on-mobile">

										<li class="stay-block">
											<ol class="single-page-paly-button">
												<li >
													<a class="playsong" href="#" data-src="songs/'.$storage_path.'">
													<i class="icons-play playsongplay icon-larger"></i>
													</a>
												</li>
											</ol>


											<a href="http://www.facebook.com/sharer/sharer.php?u=http://www.musikgenie.com/songs/track/'.$song_id.'" target="_blank" class="">
												 <i class="icons-social-facebook icon-larger"></i>
											</a> <!--/  facebook button--> 

											<a class=""  href="https://twitter.com/intent/tweet?text=I just dedicated -'.$song_title.'- by '.$artist_name.' on MusikGenie http://musikgenie.com/songs/track/'.$song_id.'" target="_blank" >
												<i class="icons-social-twitter icon-larger"></i>
											</a> <!--/  Tweeter button-->

 
											<a class="smsdedication" data-toggle="modal" href="#smsdeddi" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'" songtitle="'.$song_title.'"><i class="icons-mail icon-larger"></i></a> <!--/  sms button-->

										</li>

										</div>
										<!-- /Hide on mobile phones -->
										

									</ul> 

									';




									?>
								</div>
						</div>
						 
					</div>
				</div> <!--/span 8--> 
			</div>

 
			<!-- Song Listing pannels -->
			<div class="row row-fluid "> 

				<!--- second Column -->
				<div class="span12">				 
					<div class="def-block">						 
						<div class="mtracks popular-by-person clearfix">
							<div class="content">
							<h4> Other Tracks </h4> 
								<ol class="mylistofsongs koko" > 
<?php 
	 
							include("rekua/konectam.php");


 							  	 	// Select Without Genre
 							  	$query="SELECT DISTINCT   songs.* , artists.artist_name FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id WHERE artists.artist_id = $artist_id order by songs.artist_id DESC";
 				 
 							 

							  $result = mysql_query($query); 

							      if (mysql_num_rows($result) > 0)
							      	{

					 		            while (list($song_id, $album_id, $artist_id,  $song_title, $song_image, $storage_path, $airtel_dial_to_listen_code, $airtel_dedication_code, $airtel_crbt_vcode, $glo_dial_to_listen_code, $glo_dedication_code, $glo_crbt_vcode,   $show_on_homepage, $show_on_top_20, $likes, $artist_name)=mysql_fetch_array($result))
							             {			    

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
												<span class="track_details scrollup">'.$song_title.' <div class="hide-on-mobile">Dial the song-code:  '.$airtel_dial_to_listen_code.' on Airtel or  '.$glo_dial_to_listen_code.' on Glo to listen to full Track</div></span> 
												</div>
												</a>
												
										</div> <!-- /  span8  title-->
										
										<div class="span4 withsmsdedi" > <!--  span4  button-->

											 
											<button data-toggle="modal" data-id="'.$airtel_crbt_vcode.'" data-idx="'.$glo_crbt_vcode.'" href="#mycallertModal" class="open-AddBookDialog callertunezbtn" ><i class="icon-music"></i> Caller Tunes
											</button>
											 <!--/  Caller Tunez  button--> 


											<button data-toggle="modal" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'" href="#myModal" class="open-AddBookDialog dedicatebtn" ><i class="icon-gift"></i> Dedicate
											</button> <!--/  Dedicate button-->
 
											

										</div> <!-- / span4  button--> <!--/    button-->
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
			
		</div><!-- end page content -->

		<!-- Start script to pass input to Caller Tunes and dedication modals -->
		<?php //include 'rekua/getinputsformodals.php';?>
		<!-- End  script to pass input to Caller Tunes and dedication modals -->
  

		<!-- Start Footer -->
		<?php include 'rekua/footer-playbar.php';?>
		<!-- End Footer -->


	</div><!-- end layout -->
<!-- Scripts -->
	<script type="text/javascript" src="js/mainscript.js"></script>
	<scr ipt type="text/javascript" src="js/jq uery.min.js"></script>
	<sc ript type="text/javascript" src="boots trap/js/bootstrap.min.js"></script>
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
 



<?php 
	   // Call the Modals Alert Modal
	if(isset($_GET['searchforme']))
    {
	      echo ("<script language='javascript'>
        $( document ).ready(function() {
          $('#mysearchModal').modal('show');
        });
        </script>"); 			
	}
  
  ?>
 
</body>
<script type="text/javascript">
//	$(document).ready(function(){

		var currentPAgeNumber = 1;
		loadMoreSongs(currentPAgeNumber);

		$(window).scroll(function(){
			if($(window).scrollTop == $(document).height() - $(window).height()){
				currentPAgeNumber+=1;
				loadMoreSongs(currentPAgeNumber);
			}
		});

		//loadMoreSongs();
		function loadMoreSongs (currentPAge) {
			$.ajax({
				url:'loadsongs2.php',
				type:'GET',
				data:{pageNumber :currentPAge, pageSize : 10},
				dataType:'html',
				success: function(data) {

				//	$('.mylistofsongs').append(data);
				},
				error:function() {
					alert('failed');
				},
			})

		}
	//})
</script>
<?php include 'rekua/tawkchat.php';?>
</html> 