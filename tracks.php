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
<div id="fb-root"></div>
 	<div id="layout" class="full">
		<!-- start header -->
			<?php include 'rekua/header.php';?>
		<!-- end header -->
		<div class="under_header">
		<!---	<img src="images/assets/musikgenie.com_tracks_banner.png" alt="#"> -->
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
				$genrequery="SELECT * FROM genre ORDER BY genre_type DESC
				";
				$genreresult = mysql_query($genrequery);
 
				  	// if THe artist is found in the Database
				  	if(mysql_num_rows($genreresult) >= 1)
				{
				  		 while (list($genre_id, $genre, $genre_type)=mysql_fetch_array($genreresult))
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
						<div class=" clearfix">
							<div class="content">
								<ol class="mylistofsongs koko"> 
<?php 	 
							include("rekua/konectam.php");

	$tbl_name="songs";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 1; 
							//Chcekc TotalNumber of Songs in the Databse
								 	//Check if genre is set to a corect integer
 							  if ((!isset($_GET['genre'])) or (isset($_GET['genre']) != (is_numeric( $_GET['genre'] ))) )
 							   {
							
 							  	 	// Select Without Genre
 							  	$query="SELECT DISTINCT   songs.* , artists.artist_name FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id";	
 							  		$rs_result =  mysql_query($query);
								$total_pages = mysql_num_rows($rs_result);						  	
 							  } // End if isset genre

 							 else
 							  	  {
 							  	  	// if there is a gere set by click
 							  	  	$genre =  $_GET['genre'];
 							  	  //	$genre = substr($genre, 0, 1);
 							  	  		 
 							  	 	// Select based on genre
 							  	 	$query="SELECT DISTINCT   songs.* , artists.artist_name FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id where songs.song_id IN  (SELECT song_id FROM song_genre where genre_id =  '$genre')";
 							  	 	$rs_result =  mysql_query($query);
									$total_pages = mysql_num_rows($rs_result);
 							  	 }  
/* Setup vars for query. */
	$targetpage = "tracks.php"; 	//your file name  (the name of this file)
	$limit = 11; 								//how many items to show per page
	if(isset($_GET['page'])) 
		{	
			$page = $_GET['page'];
		//	if(isset($page)) 
		//if(is_int($page) == false) $page=1;
		if($page > $total_pages) $page =1;
		$start = ($page - 1) * $limit; 			//first item to display on this page
		}
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */ 
							if ((!isset($_GET['genre'])) or (isset($_GET['genre']) !=  (is_numeric( $_GET['genre'] )) ))
 							   { 
 							  	 	// Select Without Genre
 							  	$sql="SELECT DISTINCT   songs.* , artists.artist_name FROM $tbl_name INNER JOIN artists ON songs.artist_id = artists.artist_id order by songs.likes  DESC LIMIT $start, $limit";	
 							  	$result = mysql_query($sql);
 							  						  	
 							  } // End if isset genre

 							 else
 							  	  {
 							  	  	// if there is genre				  	  	
 							  	  		 
 							  	 	// Select based on genre
 							  	 	$sql="SELECT DISTINCT   songs.* , artists.artist_name FROM $tbl_name INNER JOIN artists ON songs.artist_id = artists.artist_id where songs.song_id IN  (SELECT song_id FROM song_genre where genre_id =  '$genre') order by songs.likes DESC LIMIT $start, $limit";
 							  	 	$result = mysql_query($sql);
 							  	 	
 							  	 } 
	
	/* Setup page vars for display. */
	if (!isset($page) or $page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "</div><!-- video grid --><div class=\"clearfix\"><br/></div><div class=\"pagination-tt clearfix\"><ul>";
		//previous button
		if ($page > 1) 
			$pagination.= "<li><a href=\"tracks/page$prev\" class=\"tbutton\"><span>Previous</span></a></li>";

		else
			$pagination.= "<li><span class=\"deactive\">Previous</span></li>";	
		
		//pages	
		if ($lastpage < 5 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<li><span class=\"current deactive\">$counter</span></li>";
				else
					$pagination.= "<li><a href=\"tracks/page$counter\" class=\"tbutton\"><span>$counter</span></a></li>";					
			}
		}
		elseif($lastpage > 3 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li><span class=\"current deactive\">$counter</span></li>";
					else
						$pagination.= "<li><a href=\"tracks/page$counter\" class=\"tbutton\"><span>$counter</span></a></li>";					
				}
				$pagination.= "...";
				$pagination.= "<li><a href=\"tracks/page$lpm1\" class=\"tbutton\"><span>$lpm1</span></a></li>";
				$pagination.= "<li><a href=\"tracks/page$lastpage\" class=\"tbutton\"><span>$lastpage</span></a></li>";			
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<li><a href=\"tracks/page1\" class=\"tbutton\"><span>1</span></a></li>";
				$pagination.= "<li><a href=\"tracks/page2\" class=\"tbutton\"><span>2</span></a></li>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li><span class=\"current deactive\">$counter</span></li>"; 
					else
						$pagination.= "<li><a href=\"tracks/page$counter\" class=\"tbutton\"><span>$counter</span></a></li>";					
				}
				$pagination.= "...";
				$pagination.= "<li><a href=\"tracks/page$lpm1\" class=\"tbutton\"><span>$lpm1</span></a></li>";	
				$pagination.= "<li><a href=\"tracks/page$lastpage\" class=\"tbutton\"><span>$lastpage</span></a></li>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<li><a href=\"tracks/page1\" class=\"tbutton\"><span>1</span></a></li>";
				$pagination.= "<li><a href=\"tracks/page2\" class=\"tbutton\"><span>2</span></a></li>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li><span class=\"current deactive\">$counter</span></li>";
					else
						$pagination.= "<li><a href=\"tracks/page$counter\" class=\"tbutton\">$counter</a></li>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<li><a href=\"tracks/page$next\" class=\"tbutton\"><span>Next</span></a></li>";
		else
			$pagination.= '<li><span class="deactive">NEXT</span></li>';
		$pagination.= "</ul>\n"; 
		$pagination.='<span class="pages">Page '.$page.' of '.$lastpage.'</span></div>';	
	}// End Pagination Gathering  
	 if (mysql_num_rows($result) > 0)
		{
	        while (list($song_id, $album_id, $artist_id,  $song_title, $song_image, $storage_path, $airtel_dial_to_listen_code, $airtel_dedication_code, $airtel_crbt_vcode, $glo_dial_to_listen_code, $glo_dedication_code, $glo_crbt_vcode, $show_on_homepage, $show_on_top_20, $likes, $artist_name)=mysql_fetch_array($result))
            {			
									// Check for song image
						        if (!file_exists("songs/songimages/$song_image")) 
						          { 
						          $song_image ="noimage.jpg";
						          } 
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
												<span class="track_details scrollup">'.$song_title.' By '.$artist_name.' <div class="hide-on-mobile">Dial the song-code:  '.$airtel_dial_to_listen_code.' on Airtel or  '.$glo_dial_to_listen_code.' on Glo to listen to full Track</div></span> 
												</div>
												</a> 
										</div> <!-- /  span8  title-->
										
										<div class="span4 withsmsdedi" > <!--  span4  button-->
						
											<button data-toggle="modal" data-id="'.$airtel_crbt_vcode.'" data-idx="'.$glo_crbt_vcode.'" href="#mycallertModal" class="open-AddBookDialog callertunezbtn" ><i class="icon-music"></i> Caller Tunes
											</button>
											 <!--/  Caller Tunez  button-->  

											<button data-toggle="modal" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'" href="#myModal" class="open-AddBookDialog dedicatebtn" ><i class="icon-gift"></i> Dedicate
											</button> <!--/  Dedicate button--> 

										</div><!--  span4  button-->  <!--/    buttons-->
									</div>  <!--/    mytrack-->
							             		';
			}
		}
	else
	{
		echo " No song Loaded.. <a href='tracks'>view ALL Songs<a/>";

	} 
 ?> 						</ol> 								
<div class="myt rack"><?php echo $pagination; ?></div>	

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
<?php include 'rekua/tawkchat.php';?>
</html> 