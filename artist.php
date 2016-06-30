<?php
ob_start();
session_start();

// Check if the use clicked from the artist page..
if(isset($_GET['artist']) and !empty($_GET['artist']) and (isset($_GET['artist']) == (preg_match(' /^[1-9][0-9]*$/', $_GET['artist']))))
	   {	
		   $_SESSION['artist'] = $_GET['artist'];	
		  // $_SESSION['id'] = $_GET['id'];   	
		}
?>

<?php 

 //if the user did not click from the artist page
//if(!isset($_SESSION['artist']) or empty($_SESSION['artist']))
if(!isset($_SESSION['artist']))
    {
				    	header('Location:artistes');
				    	exit();
	}

// For 2 baba
	if ($_SESSION['artist'] == 75) 
	{
		//header('Location:/../codedtinz');
		//		    	exit();
	}
// End 2baba redirect

	    if(isset($_SESSION['artist']))
	   {		   	

				$posted_artist_id = $_SESSION['artist'];
				//$posted_artist_id = $_SESSION['id'];

				// if the artist details in not in my database 
				include("rekua/konectam.php");
				// To confirm that the sent Artist ID is in the Database and not just typed on the url
				$query="SELECT * FROM artists where artist_id = '$posted_artist_id'";
				$result = mysql_query($query);

			      if (mysql_num_rows($result) <= 0)
				  	{
				  		header('Location:artistes');
				  	}

				  	// if THe artist is found in the Database
				  	if(mysql_num_rows($result) >= 1)
				{
											

				  		 if (list($artist_id, $artist_name,  $artist_details, $artist_image, $artist_likes)=mysql_fetch_array($result))
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
				<!-- base -->		
			<?php include 'rekua/base.php';?>		
		<!-- base -->		
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="styletry.css" id="dark" media="screen" />
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
<!-- jquery load Artistes likes-->

<script>
function addLikes(id,action) {
	$.ajax({
	url: "rekua/add_likes.php",
	data:'id='+id+'&action='+action,
	type: "POST",
	beforeSend: function(){
		$('button.likes i').addClass('spine') ;
		//$('.likes-btn-wrap').append("<img src='LoaderIcon.gif' />");
	},
	success: function(data){
	var likes = parseInt($('#currentlikes').val());
	//var likes = $('#currentlikes').val();
	switch(action) {
		case "like":
		likes = likes+1;
		//alert("like don turn to  "+likes);
		//$('#tutorial-'+id+' .btn-likes').html('<input type="button" title="Unlike" class="unlike" onClick="addLikes('+id+',\'unlike\')" />');

	$('.likes-btn-wrap').html('<input type="hidden" id="currentlikes" value="'+likes+'"/><button class="likes" title="Unlike" onClick="addLikes('+id+',\'unlike\')" ><i class="icon-thumbs-up-alt unlike"  ></i> '+likes+' Likes</button>');
		
		
		break;
		case "unlike":
		//$('#tutorial-'+id+' .btn-likes').html('<input type="button" title="Like" class="like"  onClick="addLikes('+id+',\'like\')" />')
		likes = likes-1;
		$('.likes-btn-wrap').html('<input type="hidden" id="currentlikes" value="'+likes+'"/><button class="likes" title="like" onClick="addLikes('+id+',\'like\')" ><i class="icon-thumbs-up like"  ></i> '+likes+' Likes</button>');
		break;
	}
	$('#likes-'+id).val(likes);
	if(likes>0) {
		$('#tutorial-'+id+' .label-likes').html(likes+" Like(s)");
	} else {
		$('#tutorial-'+id+' .label-likes').html('');
	}
	}
	});
}
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
						<div class="post">
							<!--<div class="music-single mbf clearfix"></div>--> <!-- Player -->
								<div class="fll four-radius">
									<?php echo '<img  src="artists/'.$artist_image.'" alt="'.$artist_name.'">';?>
									<br /> 
									<div class="">
										<h4 class="float-left"><?php echo $artist_name; ?> </h4>

<?php 
	if (!empty($result)) {
		$ip_address = $_SERVER['REMOTE_ADDR'];
		$ipquery ="SELECT * from artists_likes_ipaddress_map WHERE artist_id = '$artist_id' and ip_address = '$ip_address'";

			$likescount=  mysql_query($ipquery);

			// Initialise the like and unlike incase this ip has not liked before
			$str_like = "like";
			$icon ="icon-thumbs-up";

			// now if this ip had liked before
			if(mysql_num_rows($likescount) >= 1)
			{
			$str_like = "unlike";
			$icon = "icon-thumbs-up-alt";
			}
	}			
?> 				
				<div class="likes-btn-wrap">
				<input type="hidden" id="currentlikes" value="<?php echo $artist_likes; ?>"/>
				<button class="likes" title="<?php echo $str_like;?>" onClick="addLikes(<?php echo $artist_id; ?>,'<?php echo $str_like; ?>')" ><i class="<?php echo $icon.' '.$str_like; ?>"  ></i> <?php if (!empty($artist_likes)) {echo $artist_likes.' '.'Likes';	} ?>
				</button>
				</div>
									<!--	<a ><i class="icon-thumbs-up-alt"></i><small> Like</small> </a> -->
									</div>
									 
								</div>
 								 
								<div class="song-details">
									<?php 
									echo 	$artist_details;
								 ?>
								</div>
						
						</div>
					</div>
						
				</div> <!--/span 8--> 
			</div>

 
			<!-- Song Listing pannels -->
			<div class="row row-fluid "> 
				<!--- First Column -->
				<div class="span12">				 
					<div class="def-block">						 
						<div class="mtracks popular-by-person clearfix">
							<div class="content">
							<h4> Tracks </h4> 
								<ol class="mylistofsongs koko" > 
<?php 
	 
							include("rekua/konectam.php");

 							  	 	// Select Without Genre
 							  	$query="SELECT DISTINCT   songs.* , artists.artist_name FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id WHERE artists.artist_id = $artist_id order by songs.artist_id DESC ";
 				 
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
 <?php include 'rekua/tawkchat.php';?>
</body>
</html> 