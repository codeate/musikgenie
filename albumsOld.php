<?php 

				/*	 if(!isset($_GET['product_id']))
				    {
				    	header('Location:index.php');
				    	exit();
				     }
				*/

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
	<title>Albums | MusicGenie.com.ng | Sharing Love through Music </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="Videos | Remix - Music & Band Site Template HTML5 and CSS3">
		<meta name="keywords" content="musical Albums, nigerian songs, nigeria artists, hip hop songs, zent systems, agidigbi ayodeji, musicgenie.com.ng, nigerian musci videos,  nigeria artist gossips, sharing love through music">

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


	<!--Style for FLip GRid Layers Neede for the Flip Effects-->
	<link rel="stylesheet" type="text/css" href="styleflip.css" media="screen" />
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
						<li><a href="#"> Browse All </a></li>
						<li><a href="albums.php?prefix=a"> A </a></li>
						<li><a href="albums.php?prefix=b"> B </a></li>
						<li><a href="albums.php?prefix=c"> C </a></li>
						<li><a href="albums.php?prefix=d"> D </a></li>
						<li><a href="albums.php?prefix=e"> E </a></li>
						<li><a href="albums.php?prefix=f"> F </a></li>
						<li><a href="albums.php?prefix=g"> G </a></li>
						<li><a href="albums.php?prefix=h"> H </a></li>
						<li><a href="albums.php?prefix=i"> I </a></li>
						<li><a href="albums.php?prefix=j"> J </a></li>
						<li><a href="albums.php?prefix=k"> K </a></li>
						<li><a href="albums.php?prefix=l"> L </a></li>
						<li><a href="albums.php?prefix=m"> M </a></li>
						<li><a href="albums.php?prefix=n"> N </a></li>
						<li><a href="albums.php?prefix=o"> O </a></li>
						<li><a href="albums.php?prefix=p"> P </a></li>
						<li><a href="albums.php?prefix=q"> Q </a></li>
						<li><a href="albums.php?prefix=r"> R </a></li>
						<li><a href="albums.php?prefix=s"> S </a></li>
						<li><a href="albums.php?prefix=t"> T </a></li>
						<li><a href="albums.php?prefix=u"> U </a></li>
						<li><a href="albums.php?prefix=v"> V </a></li>
						<li><a href="albums.php?prefix=w"> W </a></li>
						<li><a href="albums.php?prefix=x"> X </a></li>
						<li><a href="albums.php?prefix=y"> Y </a></li>
						<li><a href="albums.php?prefix=z"> Z </a></li>
						<li><a href="#"> 0-9 </a></li>
						<li><a href="#"> Other Artists </a></li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="posts">
					<div class="def-block">
						<ul class="tabs">
							<li><a href="#Latest" class="active"> Albums </a></li>

							<!-- Ayo.. uncomment bellow to show more tabs if needed in the fuutre-->
					<!-- start coment	
							<li><a href="#Featured"> Featured Videos </a></li>
							<li><a href="#Lightbox"> With Lightbox </a></li>
					end comment-->

						</ul><!-- tabs -->

						<ul class="tabs-content">

						<!-- START TAB FOR ARTISTS  content -->
							<li id="Latest" class="active">
								<div class="video-grid">

 					<!-- End Flib Albums .. start badest flipper omo to badt  tp-grid .grid_3 -->	 			
								    <ul class="albums-photos-videos "> 
<?php 
	
				   //   if(isset($_GET['product_id']))
				 //   {
				   //       $product_id=$_GET['product_id'];

 							  $query="SELECT albums.* , artists.artist_name FROM albums INNER JOIN artists ON albums.artist_id = artists.artist_id LIMIT 12";
							  $result = mysql_query($query);

							      if (mysql_num_rows($result) > 0)
							      	{
							            while (list($album_id, $artist_id,  $album_title, $album_image, $album_details, $show_on_homepage_featuredlist, $artist_name)=mysql_fetch_array($result))
							             {			    

							             	echo '
											        <li class="listFilt erItem" data-filter="techno">
											          <a href="songs.php" title=
											          "'.$artist_name.' - '.$album_title.'"><img alt="albums-photos-videos" src=
											          "albums/'.$album_image.'">

											          <div class="black-bg-albums-photos-videos">
											            <h1>'.$album_title.'</h1>
											            <p>'.$artist_name.'</p>
											          </div>

											          <div class="black-bg-albums-photos-videos-pink">
											            <h1>'.$album_title.'</h1>
											            <p>'.$artist_name.'</p>

											            <div class="icon-albums-photos-videos"></div>
											          </div></a>
											        </li>
							             		';
			              				}
			      					}
//	}
 ?>

									   </ul><!-- End Flib Albums -->
											    
								</div><!-- video grid -->
								<div class="clearfix mbf"></div>

											<!-- pagination to show more artist into page numbers -->
											<div class="clearfix"><br/></div>		
											<div class="pagination-tt clearfix">
												<ul>
													<li><span class="deactive">1</span></li>
													<li><a href="#" class="tbutton"><span>2</span></a></li>
													<li><a href="#" class="tbutton"><span>3</span></a></li>
													<li><span class="deactive">...</span></li>
													<li><a href="#" class="tbutton"><span>8</span></a></li>
												</ul>
												<span class="pages">Pcage 1 of 8</span>
											</div>
											<!-- pagination -->
							</li><!-- END TAB FOR ARTISTS  content -->
							


							<li id="Featured">
								<div class="video-grid">
									<a href="video_single_wide.html" class="grid_3">
										<img src="images/assets/videos6.jpg" alt="#">
										<span><strong>Dj Back</strong>I Like It (Radio Edit)</span>
									</a>
									<a href="video_single_wide.html" class="grid_3">
										<img src="images/assets/videos7.jpg" alt="#">
										<span><strong>Anna</strong>Bad Dog</span>
									</a>
									<a href="video_single_wide.html" class="grid_3">
										<img src="images/assets/videos8.jpg" alt="#">
										<span><strong>Armando</strong>On Time</span>
									</a>
								</div><!-- video grid -->
							</li><!-- tab content -->

							<li id="Lightbox">
								<div class="video-grid">
									<a href="http://www.youtube.com/watch?v=luDFrp7xNmw?width=640&amp;height=360" data-gal="photo" title="#" class="grid_3">
										<img src="images/assets/videos6.jpg" alt="#">
										<span><strong>Dj Arshiven</strong>I Like It (Remix)</span>
									</a>
								</div><!-- video grid -->
							</li><!-- tab content -->
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