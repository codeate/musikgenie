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
			<img src="images/assets/musikgenie.com_tracks_banner.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">
			<div class="row clearfix mb">
				<div class="Alphabet">
					<ul>
						<li><a class="capitalised" href="tracks.php" > All Genre </a></li>
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

						<li><a class="capitalised" href="tracks.php?genre='.$genre_id.'"> '.$genre.' </a></li>

								';
		         			}
				}
 ?>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="rownx row  make_white">
				<p><strong> These songs are previews of the Full tracks. </strong> To listen to the FULL tracks, dial the  <strong>song codes</strong> associated with each track on your mobile network.<br/>
				If you dedicate these songs to your loved ones, they will receive the FULL tracks.</p>
				<audio preload></audio>
			</div> 
			<!-- Song Listing pannels -->
			<div class="row row-fluid ">


				<!--- First Column -->
				<div class="span6 ">				 
					<div class="def-block">						 
						<div class="mtracks popular-by-person clearfix">
							<div class="content">
								<ol class="mylistofsongs koko" > 
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
 							  	$query="SELECT DISTINCT   songs.* , artists.artist_name FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id order by songs.artist_id DESC  LIMIT 0,$halfoftotalsongs";
 				 
 							  	//(preg_match("/^-?[1-9][0-9]*$/D", $_POST['id']))
 							  	 //       /^[1-9][0-9]*$/
 							  	
 							  } // End if isset genre

 							 else
 							  	  {
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

					 		            while (list($song_id, $album_id, $artist_id,  $song_title, $song_image, $storage_path, $airtel_dial_to_listen_code, $airtel_dedication_code, $airtel_crbt_vcode, $glo_dial_to_listen_code, $glo_dedication_code, $glo_crbt_vcode, $genre_id, $show_on_homepage, $show_on_top_20, $artist_name)=mysql_fetch_array($result))
							             {			    

							             	echo ' 

									<div class="span12 mytrack">

										<div class="span6"> <!--  span6  title-->
											<li class="eachsong">
												<a title="Listen to Preview" class="playsong" href="#" data-src="songs/'.$storage_path.'">
												<div>
												<i class="icon-play"></i> <span class="track_details scrollup">'.$song_title.' By '.$artist_name.' | Dial the song-code:  '.$airtel_dial_to_listen_code.' on Airtel or  '.$glo_dial_to_listen_code.' on Glo to listen to full Track</span> 
												</div>
												</a>
											</li>
										</div> <!-- /  span6  title-->
										
										<div class="span6 withsmsdedi" > <!--  span6  button-->

											<span class="callertunezbtn_wraper">
											<button data-toggle="modal" data-id="'.$airtel_crbt_vcode.'" data-idx="'.$glo_crbt_vcode.'" href="#mycallertModal" class="open-AddBookDialog callertunezbtn" ><i class="icon-music"></i> Caller Tunes
											</button>
											</span> <!--/  Caller Tunez  button--> 


											<button data-toggle="modal" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'" href="#myModal" class="open-AddBookDialog dedicatebtn" ><i class="icon-gift"></i> Dedicate
											</button> <!--/  Dedicate button-->


											<div class="span12 sms_dedi_span"> 
 
													<a class="smsdedication" data-toggle="modal" href="#smsdeddi" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'">Dedicate  Via sms</a>
												  
											</div><!-- Close span12 sms Dedi -->


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


				<!--- Second Colounm -->
				<div class="span6  ">
					<div class="def-block widget"> 
							<div class="mtracks popular-by-person">
								<div class="content">

									<ol class="mylistofsongs" > 

<?php 
	 
	include("rekua/konectam.php");

			//Check if genre is set to a corect integer
 			  if ((!isset($_GET['genre'])) or (isset($_GET['genre']) != (preg_match(' /^[1-9][0-9]*$/', $_GET['genre']))))
 			  {
 							  $query="SELECT songs.* , artists.artist_name FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id order by songs.artist_id DESC LIMIT $halfoftotalsongs, $knowtotalsongs";
 				}
 				 else
 			  {
 				// Select based on genre
 		  	 	$query="SELECT DISTINCT   songs.* , artists.artist_name FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id where songs.genre_id = $genre order by songs.artist_id  DESC  LIMIT  $halfoftotalsongs, $knowtotalsongs";			  		
 			  }

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
												<i class="icon-play"></i> <span class="track_details">'.$song_title.' By '.$artist_name.' | Dial the song-code:  '.$airtel_dial_to_listen_code.' on Airtel or  '.$glo_dial_to_listen_code.' on Glo to listen to full Track</span> 
												</div>
												</a>
											</li>
										</div>
										
										<div class="span6">
											<span class="callertunezbtn_wraper">
											<button id="forcallerzz" data-toggle="modal" data-id="'.$airtel_crbt_vcode.'" data-idx="'.$glo_crbt_vcode.'" href="#mycallertModal" class="open-AddBookDialog callertunezbtn" ><i class="icon-music"></i> Caller Tunes
											</button>
											</span>

											<button data-toggle="modal" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'" href="#myModal" class="open-AddBookDialog dedicatebtn" ><i class="icon-gift"></i> Dedicate</button>

											<div class="span12 sms_dedi_span"> 
													<a class="smsdedication" data-toggle="modal" href="#smsdeddi" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'">Dedicate  Via sms</a>  
											</div><!-- Close span12 sms Dedi -->

										</div><!--/    button-->
									</div><!--/    mytrack-->


							             		';
			              				}

			              				 
			      					} 
 			  
 			 
 							    

							 

 ?>
 
										 
									</ol>

								</div>
							 
							</div><!-- widget content -->
					</div><!-- def block widget popular items -->
				</div><!-- span6 sidebar -->
				
			</div><!-- row clearfix -->
			
		</div><!-- end page content -->

		<!-- Start Footer -->
		<?php include 'rekua/footer.php';?>
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