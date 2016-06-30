<?php
session_start();
				

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
	<title>Artistes | MusikGenie.com | Sharing Love through Music </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="Musikgenie | Artistes">
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

	<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/icons/font-awesome-ie7.min.css" />
	<![endif]-->

<!--- Jquery top -->
<script type="text/javascript" src="js/jquery.min.js"></script>
 
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
			<div class="row clearfix mb">
 
				<div class="Alphabet">
					<ul>					
						<li><a href="artistesprefix/all"> Pop </a></li>	 
						<li><a href="artistesprefix/a"> A </a></li>
						<li><a href="artistesprefix/b"> B </a></li>
						<li><a href="artistesprefix/c"> C </a></li>
						<li><a href="artistesprefix/d"> D </a></li>
						<li><a href="artistesprefix/e"> E </a></li>
						<li><a href="artistesprefix/f"> F </a></li>
						<li><a href="artistesprefix/g"> G </a></li>
						<li><a href="artistesprefix/h"> H </a></li>
						<li><a href="artistesprefix/i"> I </a></li>
						<li><a href="artistesprefix/j"> J </a></li>
						<li><a href="artistesprefix/k"> K </a></li>
						<li><a href="artistesprefix/l"> L </a></li>
						<li><a href="artistesprefix/m"> M </a></li>
						<li><a href="artistesprefix/n"> N </a></li>
						<li><a href="artistesprefix/o"> O </a></li>
						<li><a href="artistesprefix/p"> P </a></li>
						<li><a href="artistesprefix/q"> Q </a></li>
						<li><a href="artistesprefix/r"> R </a></li>
						<li><a href="artistesprefix/s"> S </a></li>
						<li><a href="artistesprefix/t"> T </a></li>
						<li><a href="artistesprefix/u"> U </a></li>
						<li><a href="artistesprefix/v"> V </a></li>
						<li><a href="artistesprefix/w"> W </a></li>
						<li><a href="artistesprefix/x"> X </a></li>
						<li><a href="artistesprefix/y"> Y </a></li>
						<li><a href="artistesprefix/z"> Z </a></li>
					 	<li><a href="artistesprefix/1"> 0-9 </a></li>
					</ul>
				</div>    <!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="posts">
					<div class="def-block">
						<ul class="tabs">
							<li><a href="#Latest" class="active"> Artistes </a></li> 
						</ul><!-- tabs -->

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

	// if artist prefix is clicked
	if (isset($_GET['prefix'])) 
	{

		$artistprefix = $_GET['prefix'];
			// if user click browse all
		if ($artistprefix == 'pop') 
			{
				$artistprefix = 'pop';
			}
		else
			{

				$artistprefix = substr($artistprefix, 0, 1);
					// if user clik 0-9
					if (ctype_digit($artistprefix))
						{
							//$digits = "digit Dey";
							$searchForDigits='';
						}
					else{
						// if the specified alphatbet is a special character, check for pop
						//$artistprefix = 'pop';
					}
			}
	}
	// else if artiste prefix is not stated, check for pop artistes
	else{
		$artistprefix = 'pop';
	}

	$tbl_name="artists";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 2;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	if ((isset($artistprefix)) and ( $artistprefix == 'pop')) {

		$query = "SELECT *  FROM $tbl_name order by likes DESC";
			$rs_result =  mysql_query($query);
			$total_pages = mysql_num_rows($rs_result);
	}

	elseif (!isset($searchForDigits))
		 {
			$query = "SELECT *  FROM $tbl_name WHERE artist_name LIKE  '$artistprefix%' ";
			$rs_result =  mysql_query($query);
			$total_pages = mysql_num_rows($rs_result);
		}
	else
		{
			$query = "SELECT *  FROM $tbl_name WHERE (LEFT(artist_name, 1) IN ('0', '1', '2', '3', '4', '5', '6', '7', '8', '9'))  ";
			$rs_result =  mysql_query($query);
			$total_pages = mysql_num_rows($rs_result);
		}
	
	/* Setup vars for query. */
	$targetpage = "artists.php"; 	//your file name  (the name of this file)
	$limit = 12; 								//how many items to show per page
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

	if ((isset($artistprefix)) and ( $artistprefix == 'pop')) {

			$sql = "SELECT *  FROM $tbl_name  order by likes DESC LIMIT $start, $limit";
			
			$result = mysql_query($sql);
	}

	elseif (!isset($searchForDigits))
		 {
			$sql = "SELECT DISTINCT *  FROM $tbl_name WHERE artist_name LIKE  '$artistprefix%'  order by artist_name ASC LIMIT $start, $limit";
			$result = mysql_query($sql);
		}
	else
		{

			$sql = "SELECT DISTINCT *  FROM $tbl_name WHERE (LEFT(artist_name, 1) IN ('0', '1', '2', '3', '4', '5', '6', '7', '8', '9')) order by artist_name ASC LIMIT $start, $limit";
			$result = mysql_query($sql);
		}//end else
	
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
			$pagination.= "<li><a href=\"artistes/page$prev\" class=\"tbutton\"><span>Previous</span></a></li>";

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
					$pagination.= "<li><a href=\"artistes/page$counter\" class=\"tbutton\"><span>$counter</span></a></li>";					
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
						$pagination.= "<li><a href=\"artistes/page$counter\" class=\"tbutton\"><span>$counter</span></a></li>";					
				}
				$pagination.= "...";
				$pagination.= "<li><a href=\"artistes/page$lpm1\" class=\"tbutton\"><span>$lpm1</span></a></li>";
				$pagination.= "<li><a href=\"artistes/page$lastpage\" class=\"tbutton\"><span>$lastpage</span></a></li>";			
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<li><a href=\"artistes/page1\" class=\"tbutton\"><span>1</span></a></li>";
				$pagination.= "<li><a href=\"artistes/page2\" class=\"tbutton\"><span>2</span></a></li>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li><span class=\"current deactive\">$counter</span></li>"; 
					else
						$pagination.= "<li><a href=\"artistes/page$counter\" class=\"tbutton\"><span>$counter</span></a></li>";					
				}
				$pagination.= "...";
				$pagination.= "<li><a href=\"artistes/page$lpm1\" class=\"tbutton\"><span>$lpm1</span></a></li>";	
				$pagination.= "<li><a href=\"artistes/page$lastpage\" class=\"tbutton\"><span>$lastpage</span></a></li>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<li><a href=\"artistes/page1\" class=\"tbutton\"><span>1</span></a></li>";
				$pagination.= "<li><a href=\"artistes/page2\" class=\"tbutton\"><span>2</span></a></li>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li><span class=\"current deactive\">$counter</span></li>";
					else
						$pagination.= "<li><a href=\"artistes/page$counter\" class=\"tbutton\">$counter</a></li>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<li><a href=\"artistes/page$next\" class=\"tbutton\"><span>Next</span></a></li>";
		else
			$pagination.= '<li><span class="deactive">NEXT</span></li>';
		$pagination.= "</ul>\n"; 
		$pagination.='<span class="pages">Page '.$page.' of '.$lastpage.'</span></div>';	
	}// End Pagination Gathering
 
	
	 if (mysql_num_rows($result) > 0)
		{
	        while (list($artist_id, $artist_name,  $artist_details, $artist_image)=mysql_fetch_array($result))
            {			
									// Check for song image
						        if (!file_exists("artists/$artist_image")) 
						          { 
						          $artist_image ="noimage.jpg";
						          }

				echo 	'<a href="artiste/'.$artist_id.'" class="grid_3">
					<img src="artists/'.$artist_image.'" alt="'.$artist_image.'">
					<span><strong>'.$artist_name.'</strong></span>
					</a>
					';
			}
		 
			echo $pagination;

		}
	else
	{
		echo " Ooops!! We don't have an Artiste  on this Alphabet Yet.. <a href='artistes?prefix=all'>Click here to view ALL artistes<a/>";

	}  	
?> 
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
	
	<script type="text/javascript" src="js/theme20.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<?php include 'rekua/tawkchat.php';?>
</body>
</html>