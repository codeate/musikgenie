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
<!-- jquery loads songs -->
<script type="text/javascript">
	//$(document).ready(function(){


		var currentPAgeNumber = 1;
		loadMoreSongs(currentPAgeNumber);

	//	$(window).scroll(function(){
		//	if($(window).scrollTop == $(document).height() - $(window).height()){
		//		currentPAgeNumber+=1;
		//		loadMoreSongs(currentPAgeNumber);
		//	}
	//	

$(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() == $(document).height()) {
       //alert("bottom!");
       currentPAgeNumber+=1;
		loadMoreSongs(currentPAgeNumber);
       // getData();
   }
});

	$(document).scroll(function(){
	var mtracksHeight =$('.content').height();
    var scrollPosinner = $('.content').scrollTop();
    $('#textscrollainnerH').html(mtracksHeight);
    $('#textscrollainner').html(scrollPosinner);
   // console.log(scrollPos); textscrollainner
	});
	

		//loadMoreSongs();
		function loadMoreSongs(currentPAge) {
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
//	})
</script>

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
					 				 
						<a class="" href="tracks.php" > All Genre </a>
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
						<a class="lowercase underline" href="tracks.php?genre='.$genre_id.'">'.$genre.'</a>
								';
		         			}
				}
 ?>				
 					<div class="textscrolla" id="textscrollainner"></div>
 					<div class="textscrolla" id="textscrollainnerH"></div>
					</div> <!-- alphabet -->
 
				</div>
				<!--- second Column -->
				<div class="span11">				 
					<div class="def-block">						 
						<div class="mtracks popular-by-person clearfix">
							<div class="content">
								<ol class="mylistofsongs koko"> 


								</ol> 
								
<div class="my track">
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
		<?php //include 'rekua/getinputsformodals.php';?>
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