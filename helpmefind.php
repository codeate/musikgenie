<?php 

	if(!isset($_POST['searchforme']))
	    {  
	  	header('Location:tracks');
	   	exit();
	    }

 	if(isset($_POST['searchforme']))
		{
		  foreach (array_keys($_POST) as $key)
                  {
                       $$key = $_POST[$key];                            
                   }	

          if (empty($searchfor) or ($searchfor == 'Start Searching...'))                      
              {        
                  header('Location:tracks?searchforme');
                  exit();   							         						 
			 }
			  
        }


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
	<title>Search Musickgenie | MusikGenie.com | Sharing Love through Music </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="Musikgenie | Artists">
		<meta name="keywords" content="song dedication, caller tunez, bulk song dedication,Nigerian songs, hiphops, entertainment news, nigeria, zent systems, agidigbi ayodeji, victor, ">

	<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style.css" id="dark" media="screen" />
		<link rel="stylesheet" type="text/css" href="styles/icons/icons.css" media="screen" />
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/icons/font-awesome-ie7.min.css" />
	<![endif]-->
</head>
<body id="fluidGridSystem">
	<div id="layout" class="full">

		<!-- start header -->

		
			<?php include 'rekua/header.php';?>
		
		<!-- end header -->

		<!--Backgroung Image below the header-->
		<div class="under_header">
			<img src="images/assets/breadcrumbs14.png" alt="#">
		</div><!-- under header -->


		<div class="page-content back_to_up"> 
			<div class="row row-fluid clearfix mbf">
				<div class="posts">
					<div class="def-block">
				 
						<ul class="tabs-content">

						<!-- START TAB FOR ARTISTS  content -->
							<li id="Latest" class="active">
								<div class="video-grid">


				<!--Artist  Loop Plus Pagination -->
<?php
	/*
		Place code to connect to your DB here.
	*/
	include("rekua/konectam.php");	// include   code to connect to DB.

 
	$tbl_name="artists";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 2;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT *  FROM $tbl_name  where artist_name like '%$searchfor%'";
	$rs_result =  mysql_query($query);
	$total_pages = mysql_num_rows($rs_result);
	
	/* Setup vars for query. */
	$targetpage = "artists.php"; 	//your file name  (the name of this file)
	$limit = 8; 								//how many items to show per page
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
	$sql = "SELECT DISTINCT *  FROM $tbl_name  where artist_name like '%$searchfor%'  order by artist_name ASC LIMIT $start, $limit";
	$result = mysql_query($sql);
	
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
			$pagination.= "<li><a href=\"$targetpage?page=$prev\" class=\"tbutton\"><span>Previous</span></a></li>";

		else
			$pagination.= "<li><span class=\"deactive\">Previous</span></li>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<li><span class=\"current deactive\">$counter</span></li>";
				else
					$pagination.= "<li><a href=\"$targetpage?page=$counter\" class=\"tbutton\"><span>$counter</span></a></li>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li><span class=\"current deactive\">$counter</span></li>";
					else
						$pagination.= "<li><a href=\"$targetpage?page=$counter\" class=\"tbutton\"><span>$counter</span></a></li>";					
				}
				$pagination.= "...";
				$pagination.= "<li><a href=\"$targetpage?page=$lpm1\" class=\"tbutton\"><span>$lpm1</span></a></li>";
				$pagination.= "<li><a href=\"$targetpage?page=$lastpage\" class=\"tbutton\"><span>$lastpage</span></a></li>";			
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<li><a href=\"$targetpage?page=1\" class=\"tbutton\"><span>1</span></a></li>";
				$pagination.= "<li><a href=\"$targetpage?page=2\" class=\"tbutton\"><span>2</span></a></li>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li><span class=\"current deactive\">$counter</span></li>"; 
					else
						$pagination.= "<li><a href=\"$targetpage?page=$counter\" class=\"tbutton\"><span>$counter</span></a></li>";					
				}
				$pagination.= "...";
				$pagination.= "<li><a href=\"$targetpage?page=$lpm1\" class=\"tbutton\"><span>$lpm1</span></a></li>";	
				$pagination.= "<li><a href=\"$targetpage?page=$lastpage\" class=\"tbutton\"><span>$lastpage</span></a></li>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<li><a href=\"$targetpage?page=1\" class=\"tbutton\"><span>1</span></a></li>";
				$pagination.= "<li><a href=\"$targetpage?page=2\" class=\"tbutton\"><span>2</span></a></li>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li><span class=\"current deactive\">$counter</span></li>";
					else
						$pagination.= "<li><a href=\"$targetpage?page=$counter\" class=\"tbutton\">$counter</a></li>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<li><a href=\"$targetpage?page=$next\" class=\"tbutton\"><span>Next</span></a></li>";
		else
			$pagination.= '<li><span class="deactive">NEXT</span></li>';
		$pagination.= "</ul>\n"; 
		$pagination.='<span class="pages">Page '.$page.' of '.$lastpage.'</span></div>';	
	}// End Pagination Gathering
 
	if ($result = mysql_query($sql)) {
	 if (mysql_num_rows($result) > 0)
		{
	        while (list($artist_id, $artist_name,  $artist_details, $artist_image)=mysql_fetch_array($result))
            {		

           			 // Check for song image
			          if (!file_exists("artists/$artist_image")) 
						          { 
						          $artist_image ="noimage.jpg";
						          }	    
		   		  // echo $artist_details.'i see an here';
				echo 	'<a href="artiste/'.$artist_id.'" class="grid_3">
					<img src="artists/'.$artist_image.'" alt="'.$artist_image.'">
					<span><strong>'.$artist_name.'</strong></span>
					</a>
					';
			}
		 
			echo $pagination;

		}
	}


	else
	{
		echo " Ooops!! We don't have this seacrh as an Artiste yet..";
	}  	
?> 
							<!-- pagination -->
							</li><!-- END TAB FOR ARTISTS  content -->
							
 
						</ul><!-- end tabs -->
					</div><!-- def block -->
				</div><!-- posts -->

			</div><!-- row clearfix -->
		</div><!-- end page content -->
<!--/Search for Artists -->
 
	<!-- Feeatured Songs box -->
			<div class="row row-fluid clearfix mbf">
				<div class="posts">
					<div class="def-block">
						<ul class="tabs">
							<li><a href="#Latest" class="active">SONGS </a></li>
							 
						</ul><!-- tabs -->

						<ul class="tabs-content">
							<li id="Latest" class="active">
								<div class="video-grid">
<?php
	/*
		Place code to connect to your DB here.
	*/
	include("rekua/konectam.php");	// include   code to connect to DB.

 
	$tbl_name="songs";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 2;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
//	$query = "SELECT *  FROM $tbl_name  where artist_name like '%$searchfor%'";

$query="SELECT songs.* , artists.* FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id WHERE songs.song_title like '%$searchfor%'";

	$rs_result =  mysql_query($query);
	$total_pages = mysql_num_rows($rs_result);
	
	/* Setup vars for query. */
	$targetpage = "artists.php"; 	//your file name  (the name of this file)
	$limit = 8; 								//how many items to show per page
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
	//$sql = "SELECT DISTINCT *  FROM $tbl_name  where artist_name like '%$searchfor%'  order by artist_name ASC LIMIT $start, $limit";

$sql="SELECT songs.* , artists.artist_name FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id WHERE songs.song_title like '%$searchfor%'"; 

	$result = mysql_query($sql);
	
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
			$pagination.= "<li><a href=\"$targetpage?page=$prev\" class=\"tbutton\"><span>Previous</span></a></li>";

		else
			$pagination.= "<li><span class=\"deactive\">Previous</span></li>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<li><span class=\"current deactive\">$counter</span></li>";
				else
					$pagination.= "<li><a href=\"$targetpage?page=$counter\" class=\"tbutton\"><span>$counter</span></a></li>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li><span class=\"current deactive\">$counter</span></li>";
					else
						$pagination.= "<li><a href=\"$targetpage?page=$counter\" class=\"tbutton\"><span>$counter</span></a></li>";					
				}
				$pagination.= "...";
				$pagination.= "<li><a href=\"$targetpage?page=$lpm1\" class=\"tbutton\"><span>$lpm1</span></a></li>";
				$pagination.= "<li><a href=\"$targetpage?page=$lastpage\" class=\"tbutton\"><span>$lastpage</span></a></li>";			
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<li><a href=\"$targetpage?page=1\" class=\"tbutton\"><span>1</span></a></li>";
				$pagination.= "<li><a href=\"$targetpage?page=2\" class=\"tbutton\"><span>2</span></a></li>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li><span class=\"current deactive\">$counter</span></li>"; 
					else
						$pagination.= "<li><a href=\"$targetpage?page=$counter\" class=\"tbutton\"><span>$counter</span></a></li>";					
				}
				$pagination.= "...";
				$pagination.= "<li><a href=\"$targetpage?page=$lpm1\" class=\"tbutton\"><span>$lpm1</span></a></li>";	
				$pagination.= "<li><a href=\"$targetpage?page=$lastpage\" class=\"tbutton\"><span>$lastpage</span></a></li>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<li><a href=\"$targetpage?page=1\" class=\"tbutton\"><span>1</span></a></li>";
				$pagination.= "<li><a href=\"$targetpage?page=2\" class=\"tbutton\"><span>2</span></a></li>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li><span class=\"current deactive\">$counter</span></li>";
					else
						$pagination.= "<li><a href=\"$targetpage?page=$counter\" class=\"tbutton\">$counter</a></li>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<li><a href=\"$targetpage?page=$next\" class=\"tbutton\"><span>Next</span></a></li>";
		else
			$pagination.= '<li><span class="deactive">NEXT</span></li>';
		$pagination.= "</ul>\n"; 
		$pagination.='<span class="pages">Page '.$page.' of '.$lastpage.'</span></div>';	
	}// End Pagination Gathering
 
	if ($result = mysql_query($sql)) {
	 if (mysql_num_rows($result) > 0)
		{
							            while (list($song_id, $album_id, $artist_id,  $song_title, $song_image, $storage_path, $airtel_dial_to_listen_code, $airtel_dedication_code, $airtel_crbt_vcode, $glo_dial_to_listen_code, $glo_dedication_code, $glo_crbt_vcode, $genre_id, $show_on_homepage, $show_on_top_20, $artist_name)=mysql_fetch_array($result))
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
			echo $pagination;

		}
	}


	else
	{
		echo "Ooops!! We don't have this seacrh as a song yet...";
	}  	
?> 
 

 
								</div><!-- video grid -->
							</li><!-- tab content -->
  
						</ul><!-- end tabs -->
					</div><!-- def block -->
				</div><!-- posts -->

			</div><!-- row clearfix -->





  


							<!-- pagination -->
							</li><!-- END TAB FOR ARTISTS  content -->
							
 
						</ul><!-- end tabs -->
					</div><!-- def block -->
				</div><!-- posts -->

			</div><!-- row clearfix -->
		</div><!-- end page content -->

		<!-- Start Footer -->
		<?php include 'rekua/footer.php';?>
		<!-- End Footer -->

	</div><!-- end layout -->
<!-- Scripts -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/theme20.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>