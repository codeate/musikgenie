<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" xmlns="http://www.w3.org/1999/xhtml" lang="en-US"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<!--<![endif]-->
<head>
	<title>Artiste | MusikGenie.com | Sharing Love through Music</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="Musikgenie | songs">
		<meta name="keywords" content="song dedication, caller tunez, bulk song dedication,Nigerian songs, hiphops, entertainment news, nigeria, zent systems, agidigbi ayodeji, victor, ">

	<!-- Styles -->
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
<script type="text/javascript">
//	$(document).ready(function(){

$(window).scroll(function(){
    var scrollPos = $(document).scrollTop();
    $('#textscrolla').html(scrollPos);
    console.log(scrollPos);
});	



	//	var currentPAgeNumber = 1;
	//	loadMoreSongs(currentPAgeNumber);

	//	$(window).scroll(function(){
	//		if($(window).scrollTop == $(document).height() - $(window).height()){
	//			currentPAgeNumber+=1;
	//			loadMoreSongs(currentPAgeNumber);
	//		}
	//	});

		//loadMoreSongs();
		function loadMoreSongs (currentPAge) {
			$.ajax({
				url:'loadsongs2.php',
				type:'GET',
				data:{pageNumber :currentPAge, pageSize : 10},
				dataType:'html',
				success: function(data) {

					$('.mylistofsongs').append(data);
				},
				error:function() {
					alert('failed');
				},
			})

		}
	//})
</script>
	<div id="layout" class="full">
		<!-- start header -->
			<?php include 'rekua/header.php';?>
		<!-- end header -->
		<div class="under_header">
			<img src="images/assets/musikgenie.com_tracks_banner.png" alt="#">
		</div><!-- under header -->



		<div class="page-content back_to_up">



			<!-- curled out song section-->
			<div class="row row-fluid">
				<div class="span12 posts">				 
					<div class="def-block">
						<div class="p ost">
							<!--<div class="music-single mbf clearfix"></div>--> <!-- Player -->
								<div class="fll four-radius">
									<?php echo '<img  src="artists/AdekunleGold.jpg" alt="">';?>
									<br />
									 
								</div>
 									<h4><?php echo "Orente";  ?> </h4> <br /> 
								<div class="single-song-details">
									<ul>

										<li>
													<a class="playsong" href="#" data-src="songs/">
													<i class="icons-play playsongplay icon-larger"></i>
												</a>

											<!-- Social Media Share links-->
											<div class="dropdown dropdownsocialbox">
											  <a class="dropdown-toggle" type="button" id="dropdownsocial" data-toggle="dropdown" aria-haspopup="true">
											   <i class="icons-social-sharethis icon-larger"></i>
											  </a>
												  <div class="dropdown-menu dropdownsocial-ul" aria-labelledby="dropdownsocial">
												    	<a href="http://www.facebook.com/sharer/sharer.php?u=http://www.musikgenie.com" target="_blank" class="otherbtn fb-share">
												    		<i class="fa fa-facebook"></i>
												    		 share
												    	</a> <!--/  facebook button--> 
												    	<a class="otherbtn twitter-tweet"  href="https://twitter.com/intent/tweet?text=I just dedicated a song on https://musikgenie.com" target="_blank" >
												    		<i class="fa fa-twitter"></i> 
												    			tweet
												    	</a> <!--/  Tweeter button-->										    
												  </div>
											</div>
											<!-- /Social Media Share links-->

											<a data-toggle="modal" href="#smsdeddi" data-id="" data-idx=""><i class="icons-mail icon-larger"></i></a> <!--/  sms button-->

										</li>

										<li>
											 <strong>Artist</strong> Adekune Gold
									
										</li>

										<li>To Listen to FULL track, dial;</li>

										<li class="network-code">
											 <strong>Airtel</strong> Listening code: <strong>399225255245</strong>
									
										</li>

										<li class="network-code">
											<strong>Glo</strong> Listening code: <strong>399225255245</strong>
											 
									
										</li>
										
										<li>
											<span class="callertunezbtn_wraper">
											<button data-toggle="modal" data-id="" data-idx="" href="#mycallertModal" class="open-AddBookDialog callertune btn-larger" ><i class="icon-music"></i> Set as Caller Tunes
											</button>
											</span> <!--/  Caller Tunez  button--> 

											<button data-toggle="modal" data-id="" data-idx="" href="#myModal" class="open-AddBookDialog dedicate btn-larger" ><i class="icon-gift"></i> Dedicate to someone
											</button> <!--/  Dedicate button-->										
										</li>
									</ul>
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
								<ol class="mylistofsongs koko" > 

 
								</ol>
<div class="mytrack">
 Fetching More songs...... please wait
</div> 	

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

					$('.mylistofsongs').append(data);
				},
				error:function() {
					alert('failed');
				},
			})

		}
	//})
</script>
</html> 