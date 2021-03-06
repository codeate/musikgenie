<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" xmlns="http://www.w3.org/1999/xhtml" lang="en-US"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<!--<![endif]-->
<head>
	<title>Tracks | MusikGenie.com | Sharing Love through Music</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="Musikgenie | songs">
		<meta name="keywords" content="song dedication, caller tunez, bulk song dedication,Nigerian songs, hiphops, entertainment news, nigeria, zent systems, agidigbi ayodeji victor, ">

	<!-- Styles -->
		<!-- base -->		
			<?php include 'rekua/base.php';?>		
		<!-- base -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="styletry.css" id="dark" media="screen" />
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
<div id="fb-root"></div>
 	<div id="layout" class="full">
		<!-- start header -->
			<?php include 'rekua/header.php';?>
		<!-- end header -->
		<div class="under_header">
			<img src="images/assets/musikgenie.com_tracks_banner.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">
			
 
			<!-- Song Listing pannels -->
			<div class="row row-fluid "> 
				<!--- First Column -->
				<div class="span1">	
					<div class="genre-box">
					 				 
						<a class="" href="tracks" > All Genre </a>
<?php 
				include("rekua/konectam.php");
				// showing Available Genres
				$genrequery="SELECT * FROM genre";
				$genreresult = mysql_query($genrequery);
 
				  	// if THe artist is found in the Database
				  	if(mysql_num_rows($genreresult) >= 1)
				{
				  		 while (list($genre_id, $genre)=mysql_fetch_array($genreresult))
			       			{			    							             
								echo '
						<a class="lowercase underline" href="tracks/genre/'.$genre_id.'">'.$genre.'</a>
								';
		         			}
				}
 ?>				

					</div> <!-- alphabet -->
 
				</div>
				<!--- second Column -->
				<div class="span11">				 
					<div class="def-block">						 
						<div class="mtracks popular-by-person clearfix">
							<div class="content">
								<ol class="mylistofsongs koko"> 
<?php 
	 
							include("rekua/konectam.php");
							 	//Check if genre is set to a corect integer
 							  if ((!isset($_GET['genre'])) or (isset($_GET['genre']) != (preg_match(' /^[1-9][0-9]*$/', $_GET['genre']))))
 							   {
										$knowtotalsongsquery ="SELECT * FROM songs";
										 $resultoftotal = mysql_query($knowtotalsongsquery);
									 
										$knowtotalsongs = mysql_num_rows($resultoftotal);

										if ($knowtotalsongs % 2 !== 0) 
										{
			 								$halfoftotalsongs = ($knowtotalsongs-1) / 2;
										}
										else 
										{
											$halfoftotalsongs = $knowtotalsongs / 2;
										}

 							  	 	// Select Without Genre
 							  	$query="SELECT DISTINCT   songs.* , artists.artist_name FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id order by songs.artist_id DESC  LIMIT 0,20";							  	
 							  } // End if isset genre

 							 else
 							  	  {
 							  	  	// if there is a gere set by click
 							  	  	$genre =  $_GET['genre'];

										$knowtotalsongsquery ="SELECT * FROM songs  where songs.genre_id = $genre";

										 $resultoftotal = mysql_query($knowtotalsongsquery);
									 
										$knowtotalsongs = mysql_num_rows($resultoftotal);

										if ($knowtotalsongs % 2 !== 0) 
										{
			 								$halfoftotalsongs = ($knowtotalsongs-1) / 2;
										}
										else 
										{
											$halfoftotalsongs = $knowtotalsongs / 2;
										}
 							  	  		 
 							  	 	// Select based on genre
 							  	 	$query="SELECT DISTINCT   songs.* , artists.artist_name FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id where songs.genre_id = $genre order by songs.artist_id  DESC  LIMIT 0,$halfoftotalsongs";
 							  	 }
 
							  $result = mysql_query($query); 

							      if (mysql_num_rows($result) > 0)
							      	{

					 		            while (list($song_id, $album_id, $artist_id,  $song_title, $song_image, $storage_path, $airtel_dial_to_listen_code, $airtel_dedication_code, $airtel_crbt_vcode, $glo_dial_to_listen_code, $glo_dedication_code, $glo_crbt_vcode, $genre_id, $show_on_homepage, $show_on_top_20, $likes, $artist_name)=mysql_fetch_array($result))
							             {			    

							             	echo ' 

									<div class="mytrack">

										<div class="span6"> <!--  span6  title-->
											<li class="eachsong">
												<a class="playsong" href="#" data-src="songs/'.$storage_path.'">
												<i class="icons-play playsongplay"></i>
												</a>
											</li>

												<a href="songs/track/'.$song_id.'" class="track_details">
												<div>
												<span class="track_details scrollup">'.$song_title.' By '.$artist_name.' | Dial the song-code:  '.$airtel_dial_to_listen_code.' on Airtel or  '.$glo_dial_to_listen_code.' on Glo to listen to full Track</span> 
												</div>
												</a>
												
										</div> <!-- /  span6  title-->
										
										<div class="span6 withsmsdedi" > <!--  span6  button-->

											 
											<button data-toggle="modal" data-id="'.$airtel_crbt_vcode.'" data-idx="'.$glo_crbt_vcode.'" href="#mycallertModal" class="open-AddBookDialog callertunezbtn" ><i class="icon-music"></i> Caller Tunes
											</button>
											 <!--/  Caller Tunez  button--> 


											<button data-toggle="modal" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'" href="#myModal" class="open-AddBookDialog dedicatebtn" ><i class="icon-gift"></i> Dedicate
											</button> <!--/  Dedicate button-->


											<button class="dedicatebtn smsdeddi smsdedication" data-toggle="modal" href="#smsdeddi" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'" songtitle="'.$song_title.'"><i class="fa fa-envelope-o"></i> sms
											</button> <!--/  sms button-->

<!-- Social Media Share links-->
<div class="dropdown dropdownsocialbox">
  <button class="dedicatebtn dropdown-toggle" type="button" id="dropdownsocial" data-toggle="dropdown" aria-haspopup="true">
   <i class="fa fa-facebook"></i>  share <i class="fa fa-twitter"></i>
  </button>
  <div class="dropdown-menu dropdownsocial-ul" aria-labelledby="dropdownsocial">
     
    	<a href="http://www.facebook.com/sharer/sharer.php?u=http://www.musikgenie.com/songs/track/'.$song_id.'" target="_blank" class="otherbtn fb-share">
    		<i class="fa fa-facebook"></i>
    		 share
    	</a> <!--/  facebook button-->


    	<a class="otherbtn twitter-tweet"  href="https://twitter.com/intent/tweet?text=I just dedicated -'.$song_title.'- by '.$artist_name.' on MusikGenie https://musikgenie.com/songs/track/'.$song_id.'" target="_blank" >
    		<i class="fa fa-twitter"></i> 
    			tweet
    	</a> <!--/  Tweeter button-->
    
  </div>
</div>
<!-- /Social Media Share links-->	
											

										</div>  <!--/    button-->
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

		<!-- Start Footer -->
		<?php include 'rekua/footer-playbar.php';?>
		<!-- End Footer -->


	</div><!-- end layout -->
<!-- Scripts -->
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
 


		<!-- Start script to pass input to Caller Tunes and dedication modals -->
		<?php include 'rekua/getinputsformodals.php';?>
		<!-- End  script to pass input to Caller Tunes and dedication modals -->
  
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


</html> 