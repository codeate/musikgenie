<?php
ob_start();
session_start();
 

			include("rekua/konectam.php"); 

			// looking for the song in db
 				$query="SELECT DISTINCT   songs.* , artists.artist_name FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id WHERE songs.song_id = 352";

 				$result = mysql_query($query); 

 				if (mysql_num_rows($result) < 1)
 				{
 					header('Location:../../tracks');
				    	exit();
 				} 
					 		            if (list($song_id, $album_id, $artist_id,  $song_title, $song_image, $storage_path, $airtel_dial_to_listen_code, $airtel_dedication_code, $airtel_crbt_vcode, $glo_dial_to_listen_code, $glo_dedication_code, $glo_crbt_vcode, $show_on_homepage, $show_on_top_20, $likes, $artist_name)=mysql_fetch_array($result))
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
	<title>CodedTinz | 2Baba | Phyno | MusikGenie.com |</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="keywords" content="codedtinz, 2baba, musikgenie">
		<meta name="keywords" content="Music dedication">
		<meta name="keywords" content="codedtinz | 2baba | Phyno | Musikgenie">
		<meta name="description" content="codedtinz | 2baba | Phyno | Musikgenie">
		<meta name="description" content="Dedicate Codedtinz by 2baba">

	<!-- Styles -->
		<!-- base -->		
			<?php include 'rekua/base.php';?>		
		<!-- base -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="styletry.css" id="dark" media="screen" />
		<link rel="stylesheet" type="text/css" href="styles/icons/icons.css" media="screen" />
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="build.css">
		<link rel="stylesheet" href="font-awesome.min.css">

		<!-- for 2face page only -->
		<link rel="stylesheet" href="codedtinz.css">
		
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
			<?php echo '<img src="songs/songimages/coddedtinz_musikgenie.jpg" alt="Song Image">';?>
		</div>
		<div class="under_header">
			
		</div><!-- under header -->



		<div class="page-content back_to_up">
 
			<!-- curled out song section-->
			<div class="row row-fluid">
				<div class="span12 posts">				 
					<div class="def-block">
 
 							<!-- hide on mobile -->
 						<div class="hide-on-mobile">
 							<div class="span6">
							<!--<div class="music-single mbf clearfix"></div>--> <!-- Player -->
								<div class="fll four-radius transparant_bkrgnd">
									<?php echo '<img class="img-responsive"  src="songs/songimages/coddedtinz_musikgenie.jpg" alt="">';?>
								 
									 
								</div>
 									 
								<div class="single-song-details transparant_bkrgnd">
									<?php 
									echo '

									<ul>
										<li> 
											<button data-toggle="modal" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'" href="#myModal" class="open-AddBookDialog dedicate btn-larger" ><i class="icon-gift"></i> Dedicate Full Song to someone
											</button> <!--/  Dedicate button-->										
										</li>

										<li>											 
											<button data-toggle="modal" data-id="'.$airtel_crbt_vcode.'" data-idx="'.$glo_crbt_vcode.'" href="#mycallertModal" class="open-AddBookDialog callertunebtn-larger-gray btn-larger" ><i class="icon-music"></i> Set song as your Caller Tunes &nbsp; 
											</button>
											 <!--/  Caller Tunez  button-->  									
										</li>

										

										<br/>

										<li class="stay-block">To Listen to FULL track, dial;</li>

										<li class="network-code">
											 <strong>Airtel</strong> Listening code: <strong>'.$airtel_dial_to_listen_code.'</strong>
												<p>NB: Available only on Airtel Network</p>
										</li>

										<br/>										

										<li class="stay-block">
											<ol class="single-page-paly-button">
												<li >
													<a class="playsong" href="#" data-src="songs/'.$storage_path.'">
													<i class="icons-play playsongplay icon-larger"></i>
													</a>
												</li>
											</ol>



											<!-- Social Media Share links-->
											<a href="http://www.facebook.com/sharer/sharer.php?u=http://www.musikgenie.com/songs/track/'.$song_id.'" target="_blank" class="">
												    		<i class="icons-social-facebook icon-larger"></i>
												    		 
												    	</a> <!--/  facebook button--> 


											<a class=""  href="https://twitter.com/intent/tweet?text=I just dedicated -'.$song_title.'- by '.$artist_name.' on MusikGenie http://musikgenie.com/songs/track/'.$song_id.'" target="_blank" >
												    		<i class="icons-social-twitter icon-larger"></i> 
												    			
												    	</a> <!--/  Tweeter button-->
											<!-- /Social Media Share links-->

											<a class="smsdedication" data-toggle="modal" href="#smsdeddi" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'" songtitle="'.$song_title.'"><i class="icons-mail icon-larger"></i></a> <!--/  sms button-->

										</li>
 

									</ul> 
									'; 
									?> 

								</div>	

							</div>
							<!-- Top Dedications segment -->
							
<?php
/*
											include("rekua/konectam.php"); 
											$promosong_id = '11888';
											$listNumber = 1;
											$today_date = date('M d, Y h:i:s');

											$toptenquery = "SELECT `dedicatee`, count(dedicatee) AS total  FROM `dedications`   WHERE `report` LIKE '%Thanks for using MusikGenie%' AND `songdedicated` = $promosong_id AND report_date BETWEEN 'Feb 07, 2016 00:00:00' AND '$today_date' group by dedicatee order by total DESC LIMIT 10";
											$toptenqueryresult = mysql_query($toptenquery); 

											 				if (mysql_num_rows($toptenqueryresult) > 0)
											 				{
											 					echo '<div class="topdedication-block span6">
																		<h4>Top  Dedications</h4>
																			<br/><br/>

																		<div>
																			<ul class="top10list span12">
																				<li><h5><div class="span3">Position</div><div class="span4">Phone Number</div>  <div class="span5">Number of Dedications</div>  </h5> </li>';

											 					while (list($dedicatee, $totaldedications)=mysql_fetch_array($toptenqueryresult))
											 					{
											 					 
											 					 $dedicatee = substr_replace($dedicatee,"***",-7, 3); 

											 					 echo '
											 					 		<li><h5><div class="span3">'.$listNumber.'</div><div class="span4">'.$dedicatee.'</div>  <div class="span5">'.$totaldedications.'</div>  </h5></li>
											 					 	';
											 					 	$listNumber++;

											 					} // End while..

																echo '		</ul>
																		</div>
																	</div><!-- /Top Dedications segment -->
																	';		             
											 				} // end if..
*/
?> 

								
						</div>
						<!-- /hide on mobile -->

							<!-- Big background Image -->
								<img class="codedtinz_background" src="images/bg/codedtinzon_musikgenie.jpg" alt="CodedTinz">
							<!-- /Big background Image -->

								<!-- show on mobile -->


								<div class="span12">
									<div class="showon-mobile">

<?php
							echo '
										<!-- dedications -->
										<div class="decationseg">

											<button data-toggle="modal" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'" href="#myModal" class="open-AddBookDialog dedicate btn-larger btn-fullwidght" ><i class="icon-gift"></i> Dedicate Full song to someone
												</button> <!--/  Dedicate button-->	
										</div>

										<!-- Callertunes -->
										<div class="callertunesseg">

											<button data-toggle="modal" data-id="'.$airtel_crbt_vcode.'" data-idx="'.$glo_crbt_vcode.'" href="#mycallertModal" class="open-AddBookDialog callertunebtn-larger btn-larger btn-fullwidght" ><i class="icon-music"></i> Set song as your Caller Tunes &nbsp; 
												</button>
												 <!--/  Caller Tunez  button--> 
										</div>

										<br />
										<!-- play, share, sms dedi -->
										<div class="other-buttons">
										<!-- play -->
											<ol class="single-page-paly-button">
												<li >
													<a class="playsong" href="#" data-src="songs/'.$storage_path.'">
													<i class="icons-play playsongplay icon-larger"></i>
													</a>
												</li>
											</ol>


											<a class="smsdedication" data-toggle="modal" href="#smsdeddi" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'" songtitle="'.$song_title.'"><i class="icons-mail icon-larger"></i></a> <!--/  sms button-->

											<a href="http://www.facebook.com/sharer/sharer.php?u=http://www.musikgenie.com/songs/track/'.$song_id.'" target="_blank" class="">
												    		<i class="icons-social-facebook icon-larger"></i>
												    		 
												    	</a> <!--/  facebook button--> 


											<a class=""  href="https://twitter.com/intent/tweet?text=I just dedicated -'.$song_title.'- by '.$artist_name.' on MusikGenie http://musikgenie.com/songs/track/'.$song_id.'" target="_blank" >
												    		<i class="icons-social-twitter icon-larger"></i> 
												    			
												    	</a> <!--/  Tweeter button-->	 
										</div>

										<!-- To listen to FULL track -->
										<div class="span12">
											<p></p>
											<p>To Listen to FULL track, dial; <br /> The song\'s Listening code:
											<strong>'.$airtel_dial_to_listen_code.'</strong> on your Mobile phone
											<br/>
											NB: Available only on Airtel Network</p>
										</div>
										<br/> 
							';
?>


							
<?php
/*
											include("rekua/konectam.php"); 
										//	$promosong_id = '11888';
											$listNumber = 1;

										//	$toptenquery = "SELECT `dedicatee`, count(dedicatee) AS total  FROM `dedications`   WHERE `report` LIKE '%Thanks for using MusikGenie%' AND `songdedicated` = $promosong_id group by dedicatee order by total DESC LIMIT 10";
											$toptenqueryresult = mysql_query($toptenquery); 

											 				if (mysql_num_rows($toptenqueryresult) > 0)
											 				{
											 					echo '<!-- Top Dedications segment / on Mobile -->
																		<div class="topdedication-block">
																			<h4>Top  Dedications</h4>
																			<br/><br/>
																		<div>
																			<ul class="top10list span12">
																				<li><h5><div class="span3">Position</div><div class="span3"> Mobile</div>  <div class="span5">Dedications</div> </h5> </li>
																';


											 					while (list($dedicatee, $totaldedications)=mysql_fetch_array($toptenqueryresult))
											 					{
											 					 
											 					 $dedicatee = substr_replace($dedicatee,"***",-7, 3); 

											 					 echo '
											 					 		<li><h5><div class="span3">'.$listNumber.'</div><div class="span3">'.$dedicatee.'</div>  <div class="span5 goright">'.$totaldedications.'</div> </h5></li>
											 					 	';
											 					 	$listNumber++;

											 					}

																echo '</ul>
																		</div>
																	</div>
																	<!-- /Top Dedications segment on Mobile -->
																	';
																		             
											 				} 

*/
?> 

									


									</div>	
									<!-- /end Show on Mobile Segement -->								
								</div>	


								<!-- /show on mobile -->						
						 	
						 
										 
					</div>
					
				</div> <!--/span 8--> 


			</div>

 
 
		</div><!-- end page content -->

		<!-- Start script to pass input to Caller Tunes and dedication modals -->
		<?php // include 'rekua/getinputsformodals.php';?>
		<!-- End  script to pass input to Caller Tunes and dedication modals -->
  

		<!-- Start Footer -->
		<?php include 'rekua/footer-playbar.php';?>
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
</html> 