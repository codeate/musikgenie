<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" xmlns="http://www.w3.org/1999/xhtml" lang="en-US"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<!--<![endif]-->
<head>
	<title>News | MusikGenie.com |Sharing Love through Music</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="News |  MusikGenie.com">
		<meta name="keywords" content="Nigerian songs, latest songs, gists, nigeria news, nigerian artists, download songs, play songs online">

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
</head>
<body id="fluidGridSystem">
<?php 
		include("rekua/konectam.php");	// include   code to connect to DB.
 ?>
	<div id="layout" class="full">
		
		<!-- start header -->

		
			<?php include 'rekua/header.php';?>
		
		<!-- end header -->

		<div class="under_header">
			<img src="images/assets/breadcrumbs14.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">
			<div class="row clearfix mb">
				<div class="breadcrumbIn">
					<ul>
						<li><a href="home" class="toptip" title="Homepage"> <i class="icon-home"></i> </a></li>
						<li> News </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="span3 sidebar">  
					
					<div class="def-block widget">
						<h4> Events </h4><span class="liner"></span>
						<div class="widget-content tac">
							<?php 	 include 'rekua/eventtop3.php'; ?> 
						</div><!-- widget content -->
					</div><!-- def block widget ads -->

					<div class="def-block widget">
						<h4> Ads </h4><span class="liner"></span>
						<div class="widget-content tac">
							<a href="contact" title="Advertise Here"><img src="images/ads1.jpg" alt="Advertise"></a>
						</div><!-- widget content -->
					</div><!-- def block widget ads -->
  
								<?php 						 
									include 'rekua/top20tracks.php';
								?>
					 

					<!-- Big banner Avertise here-->
					<div class="def-block widget">
						<div class="widget-content">
							<a href="contact"><img src="images/artistesadvert.jpg" alt="Advertise"></a>
						</div><!-- widget content -->
					</div><!-- def block widget ADS -->


				 

				</div><!-- span3 sidebar -->

				<div class="span6 posts">
					<div class="def-block">

<!--News Loop Plus Pagination -->
<?php
	/*
		Place code to connect to your DB here.
	*/
	include("rekua/konectam.php");	// include   code to connect to DB.

	$tbl_name="news";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 2;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT news_id  FROM $tbl_name";
	$rs_result =  mysql_query($query);
	$total_pages = mysql_num_rows($rs_result);
	
	/* Setup vars for query. */
	$targetpage = "news.php"; 	//your file name  (the name of this file)
	$limit = 4; 								//how many items to show per page
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
	$sql = "SELECT DISTINCT *  FROM $tbl_name order by news_id DESC LIMIT $start, $limit";
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
		$pagination .= "<div class=\"pagination-tt clearfix\"><ul>";
		//previous button
		if ($page > 1) 
			$pagination.= "<li><a href=\"enews/page$prev\" class=\"tbutton\"><span>Previous</span></a></li>";

		else
			$pagination.= "<li><span class=\"deactive\">PREVIOUS</span></li>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<li><span class=\"current deactive\">$counter</span></li>";
				else
					$pagination.= "<li><a href=\"enews/page$counter\" class=\"tbutton\"><span>$counter</span></a></li>";					
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
						$pagination.= "<li><a href=\"enews/page$counter\" class=\"tbutton\"><span>$counter</span></a></li>";					
				}
				$pagination.= "...";
				$pagination.= "<li><a href=\"enews/page$lpm1\" class=\"tbutton\"><span>$lpm1</span></a></li>";
				$pagination.= "<li><a href=\"enews/page$lastpage\" class=\"tbutton\"><span>$lastpage</span></a></li>";			
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<li><a href=\"enews/page1\" class=\"tbutton\"><span>1</span></a></li>";
				$pagination.= "<li><a href=\"enews/page2\" class=\"tbutton\"><span>2</span></a></li>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li><span class=\"current deactive\">$counter</span></li>"; 
					else
						$pagination.= "<li><a href=\"enews/page$counter\" class=\"tbutton\"><span>$counter</span></a></li>";					
				}
				$pagination.= "...";
				$pagination.= "<li><a href=\"enews/page$lpm1\" class=\"tbutton\"><span>$lpm1</span></a></li>";	
				$pagination.= "<li><a href=\"enews/page$lastpage\" class=\"tbutton\"><span>$lastpage</span></a></li>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<li><a href=\"enews/page1\" class=\"tbutton\"><span>1</span></a></li>";
				$pagination.= "<li><a href=\"enews/page2\" class=\"tbutton\"><span>2</span></a></li>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li><span class=\"current deactive\">$counter</span></li>";
					else
						$pagination.= "<li><a href=\"enews/page$counter\" class=\"tbutton\">$counter</a></li>";					
				}
			}
		}
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<li><a href=\"enews/page$next\" class=\"tbutton\"><span>Next</span></a></li>";
		else
			$pagination.= '<li><span class="deactive">NEXT</span></li>';
		$pagination.= "</ul>\n"; 
		$pagination.='<span class="pages">Page '.$page.' of '.$lastpage.'</span></div>';	
	}// End Pagination Gathering	
	 if (mysql_num_rows($result) > 0)
		{
	  	while (list($news_id, $news_title, $featured_image, $post_content, $news_date, $news_author, $news_categories, $news_tags)=mysql_fetch_array($result))
			{	
				echo '

						<div class="post row-fluid clearfix">
							<div class="featured_image_preview"><a href="enews/news'.$news_id.'"><img src="'.$featured_image.'" alt="'.$news_title.'"></a></div>
							<h3 class="post-title"> <i class="icon-pencil"></i><a href="enews/news'.$news_id.'">'.$news_title.'</a> </h3>
							 <div class="news_block_small">'.$post_content.'</div>
							<div class="meta">
								<span> <i class="icon-user mi"></i> '.$news_author.' </span>
								<span> <i class="icon-time mi"></i> '.$news_date.'  
							</div><!-- meta -->
							<a href="enews/news'.$news_id.'" class="Rmore tbutton small"><span>Read More</span></a>
						</div><!-- post -->
				  	';
			}

			echo $pagination;
		}
	else
	{
		echo "";
	}  	
?>
<!--End News Loop Plus Pagination -->   
					</div><!-- def block -->
				</div><!-- span6 posts -->

				<div class="span3 sidebar">
					<!-- Big banner Avertise here-->
					<div class="def-block widget">
						<div class="widget-content">
							<a href="contact"><img src="images/advert banner.jpg" alt="Advertise"></a>
						</div><!-- widget content -->
					</div><!-- def block widget ADS -->

					<div class="def-block widget">
						<h4> Ads </h4><span class="liner"></span>
						<div class="widget-content tac">
							<a href="http://www.correcttalk.com" target="_blank" title="Advertise Here"><img src="images/correcttalk-banner.jpg" alt="Advertise"></a>
						</div><!-- widget content -->
					</div><!-- def block widget ads -->

					<div class="def-block widget">
						<h4> Ads </h4><span class="liner"></span>
						<div class="widget-content tac">
							<a href="contact" title="Advertise Here"><img src="images/advert banner2.jpg" alt="Advertise"></a>
						</div><!-- widget content -->
					</div><!-- def block widget ads -->
 

					<div class="def-block widget">
						<h4> Videos of the Week  </h4><span class="liner"></span>
						<div class="widget-content row-fluid">
							<div class="videos clearfix flexslider">
								<ul class="slides">
 										<!-- Start Revolution Slider -->
											<?php include 'rekua/videooftheweek.php';?>
										<!-- End Revolution Slider -->
								</ul>
							</div>
						</div><!-- widget content -->
					</div><!-- def block widget videos -->

					<div class="def-block widget">
						<h4> Ads </h4><span class="liner"></span>
						<div class="widget-content tac">
							<a href="contact" title="Advertise Here"><img src="images/advertbannershort2.jpg" alt="Advertise"></a>
						</div><!-- widget content -->
					</div><!-- def block widget ads -->

					<div class="def-block widget">

					<!-- Start NewsletterClass-->
					<?php include 'rekua/newsletterClass.php';?>
					<!-- End NewsletterClass -->

						<h4> NewsLetters </h4><span class="liner"></span>
						<div class="widget-content">
							<p>Get latest gists on new Music release, artistes updates, musical concerts, trending videos and lot more...<br />Subscribe to our Newsletter.</p>
						<form id="newsletters" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">							
								<input name="newsLetters_mail" type="email" onfocus="if (this.value=='Type Your Email') this.value = '';" onblur="if (this.value=='') this.value = 'Type Your Email';" value="" placeholder="Type Your Email" required="required">								
								<button  name="addmetonewsletter" type="submit"><i class="icon-ok"></i></button> 
								<?php if (isset($newslettermessage))
								 {
									echo $newslettermessage;
								}  ?>
							</form>
						</div><!-- widget content -->
					</div><!-- def block widget NewsLetters --> 

				</div><!-- span3 sidebar -->
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
	<script type="text/javascript" src="js/jquery.nanoscroller.js"></script>
	<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<?php include 'rekua/tawkchat.php';?>
</body>
</html>