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
	<title>MusikGenie.com.ng |Sharing Love through Music </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="MusikGenie - sharing love through music">
		<meta name="keywords" content="MusikGenie, music, nigerian artists, nigerian songs, nigerian news, songs, download, events, zent systems, zent, agidigbi">

	<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style.css" id="dark" media="screen" />
		<link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css" media="screen" />
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

	<!--Jquery Script keep am for the head bcos audio need am  -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body id="fluidGridSystem">
	<div id="layout" class="full">


		<!-- start header -->

		
			<?php include 'rekua/header.php';?>
		
		<!-- end header -->

		<!-- Start Revolution Slider -->
			<?php include 'slides/slider.php';?>
		<!-- End Revolution Slider -->


<!-- ope oo this modal don work... Start Popup dedication-->
  <!-- Hidden Modal -->

  <?php // include 'rekua/hiddendedicator_home.php';?>

   <!-- ends Hidden Modal -->
<!-- ope oo this modal don work... End Popup dedication-->

		<div class="page-content">

<!-- row music player Playsongs Here -->
<div class="row clearfix mbf">	

<div class="music-player-list">
	<div class="ttw-music-player" style="opacity: 1;">
		<div class="player jp-interface">
			<div class="album-cover"><span class="img" style="opacity: 1;"><img src="http://localhost/genienew/music/solidstar.jpg" alt="album cover"></span>            <span class="highlight"></span>
			</div>        
			<div class="track-info">            
				<p class="title">Jale | dial: glo 00978, Airtel 08839</p>       
				<p class="artist-outer" style="opacity: 1;">By <span class="artist">Olamide</span></p>
				<p class="description">To Listen to the FULL track, Dial the Song-Code above depending on your network</p>            
					<div class="rating"><span class="rating-level rating-star on"></span>                <span class="rating-level rating-star on"></span>                <span class="rating-level rating-star on"></span>                <span class="rating-level rating-star on"></span><span class="rating-level rating-star"></span>
					</div>        
			</div>      
			<div class="player-controls">            
			<div class="main">                
				<div class="previous jp-previous"></div>                
				<div class="play jp-play" style="display: none;"></div>                
				<div class="pause jp-pause" style="display: block;"></div>                
				<div class="next jp-next"></div><!-- These controls aren't used by this plugin, but jPlayer seems to require that they exist -->                
				<span class="unused-controls">                    
					<span class="jp-video-play" style="display: none;"></span>                    
					<span class="jp-stop"></span>                    
					<span class="jp-mute"></span>                    
					<span class="jp-unmute" style="display: none;"></span>                    
					<span class="jp-volume-bar"></span>                    
					<span class="jp-volume-bar-value" style="width: 80%;"></span>                    
					<span class="jp-volume-max"></span>                    
					<span class="jp-current-time">00:06</span>                    
					<span class="jp-duration">00:29</span>                    
					<span class="jp-full-screen"></span>                    
					<span class="jp-restore-screen" style="display: none;"></span>                    
					<span class="jp-repeat"></span>                    
					<span class="jp-repeat-off" style="display: none;"></span>                    
					<span class="jp-gui"></span>                
				</span>            
			</div>            
					<div class="progress-wrapper">                
						<div class="progress jp-seek-bar" style="width: 100%;">                    
							<div class="elapsed jp-play-bar" style="width: 20.8228%;"></div>
						</div>            
					</div>        
			</div>    
		</div>    
			<div class="tracklist">        
				<ol class="tracks" style="height: 244px;"> 
					<li class="track">
						<span class="title">Oluchi | dial: glo 00978, Airtel 08839</span>
						<span class="duration"><a href="#" title="Use as Callerz Ringing tune"> CRBT</a></span>
						<span class="rating">
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
						</span>
						<a data-toggle="modal" data-id="ISBN-001122_BAAA" data-idx="ISBN-001122_id2BAAKK" href="#myModal" class="open-AddBookDialog dedicatebtn" ><i class="icon-gift"></i> Dedicate</a>
					</li>
					<li class="track">
						<span class="title">2nite | Dial: 00978 on Glo, 08839 on Airtel</span>
						<span class="duration">0:29</span>
						<span class="rating">
							<span class="rating-level rating-bar on"></span>
								<span class="rating-level rating-bar on"></span>
								<span class="rating-level rating-bar on"></span>
								<span class="rating-level rating-bar on"></span>
								<span class="rating-level rating-bar on"></span>
						</span>
						<a data-toggle="modal" data-target="#myModal" class="buy" href=""> DEDICATE</a>
					</li>
					<li class="track">
						<span class="title">Okomi | dial: glo 00978, Airtel 08839</span>
						<span class="duration">2:51</span>
						<span class="rating">
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar"></span>
						</span>
						<a data-toggle="modal" data-target="#myModal" class="buy" href=""> DEDICATE</a>
					</li>
					<li class="track">
						<span class="title">Oluchi | dial: glo 00978, Airtel 08839</span>
						<span class="duration">4:29</span>
						<span class="rating">
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
						</span>
						<a data-toggle="modal" data-target="#myModal" class="buy" href=""> DEDICATE</a>
					</li>
					<li class="track">
						<span class="title">Lekwaukwu | dial: glo 00978, Airtel 08839</span>
						<span class="duration">2:45</span>
						<span class="rating">
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
						</span>
						<a data-toggle="modal" data-target="#myModal" class="buy" href=""> DEDICATE</a>
					</li>
					<li class="track playing">
						<span class="title">Jale | dial: glo 00978, Airtel 08839</span>
						<span class="duration">5:56</span>
						<span class="rating">
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar"></span>
						</span>
						<a data-toggle="modal" data-target="#myModal" class="buy" href=""> DEDICATE</a>
					</li>
					<li class="track">
						<span class="title">Loveadure | dial: glo 00978, Airtel 08839</span>
						<span class="duration">2:31</span>
						<span class="rating">
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
							<span class="rating-level rating-bar on"></span>
						</span>
						<a data-toggle="modal" data-target="#myModal" class="buy" href=""> DEDICATE</a>
					</li>
				</ol>            
			</div>    
				<div class="jPlayer-container" id="jp_jplayer_0" style="width: 0px; height: 0px;">
					<img id="jp_poster_0" style="width: 0px; height: 0px; display: none;">
					<audio id="jp_audio_0" preload="metadata" src="songs/jale.wav"></audio>
				</div>
			</div>
		</div>
</div>

 

			
			<!-- row music player Ends here -->

			<div class="clearfix"></div>

	<!-- Feeatured Albums box -->
			<div class="row row-fluid clearfix mbf">
				<div class="posts">
					<div class="def-block" style="min-height: 400px;">

					<div class="topbar">
						<div id="close" class="tbutton small tback"><span>< Back to Albums</span></div>
						<h4 id="name">FEATURED ALBUMS</h4><span class="liner"></span>
					</div>

 					<!-- End Flib Albums .. start badest flipper omo to badt  tp-grid .grid_3 -->	 			
								    <ul class="albums-photos-videos "> 
<?php 
	
				   //   if(isset($_GET['product_id']))
				 //   {
				   //       $product_id=$_GET['product_id'];

 							  $query="SELECT albums.*, artists.artist_name FROM albums INNER JOIN artists ON albums.artist_id = artists.artist_id WHERE albums.show_on_homepage_featuredlist = 'yes' LIMIT 12";
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



					</div>
				</div>
			</div>			

			<div class="row row-fluid clearfix mbf">
				<div class="span8">
					<div class="def-block">
						<h4> Latest News </h4><span class="liner"></span>

<?php 

				 			 $queryx="SELECT * from news order by news_id DESC LIMIT 3 ";
							  $resultx = mysql_query($queryx);

							      if (mysql_num_rows($resultx) > 0)
							      	{
							            while (list($news_id, $news_title, $featured_image, $post_content, $news_date, $news_author, $news_categories, $news_tags)=mysql_fetch_array($resultx))
							             {	

							             	echo '

						<div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
							<div class="span5"><a href="news_single.php?news='.$news_title.'&id='.$news_id.'"><img class="four-radius" src="'.$featured_image.'" alt="'.$news_title.'"></a> </div>
							<div class="span7">
								<h3 class="news-title"> <a href="news_single.php?news='.$news_title.'&id='.$news_id.'">'.$news_title.'</a></h3>
								 
								<div class="meta">
									<span> <i class="icon-time mi"></i>'.$news_date.' 
								</div><!-- meta -->
								<a href="news_single.php?news='.$news_title.'&id='.$news_id.'" class="sign-btn tbutton small"><span>Read More</span></a>
							</div><!-- span7 -->
						</div><!-- news -->

							             	';

							             }
							     	}
 ?>

						<div class="load-news tac"><a href="news.php" class="tbutton small"><span>Go to Main News Page</span></a></div>
					</div><!-- def block -->
				</div><!-- span8 news -->

				<div class="span4">

					<!-- Top 20s -->
					<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
						<h4> Top 20 </h4><span class="liner"></span>
						<div class="widget-content row-fluid">
							<div class="mtracks">
								<div class="content">
									<ul class="tab-content-items">
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/assets/thumb-mp3-1.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Don’t go mary </a></h3>
											<span> Olamide </span>
											<span> 1,892,250 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/assets/thumb-mp3-2.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Mr Oreo </a></h3>
											<span> Iyanya </span>
											<span> 998,879 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/assets/thumb-mp3-3.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Double wahala</a></h3>
											<span> Oritshe Femi </span>
											<span> 792,240 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/assets/thumb-mp3-4.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">If you love me</a></h3>
											<span> Davido </span>
											<span> 788,471 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/assets/thumb-mp3-5.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Burning For you</a></h3>
											<span> E suk </span>
											<span> 710,105 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/assets/thumb-mp3-6.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Skyfool </a></h3>
											<span> Joel </span>
											<span> 611,748 Plays </span>
										</li>
									</ul>
								</div>
							</div>
						</div><!-- widget content -->
					</div><!-- def block widget Top 20 items -->

					<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
						<h4> Events </h4><span class="liner"></span>
						<div class="widget-content row-fluid">
							<div class="span3 tac">
								<span class="event-date">30</span>
								<span class="event-month">Jul</span>
							</div>
							<div class="span9">
								<p>Music Festival 2015 <br />Eko Hotels, Lagos</p>
								<a href="#" class="tbutton buy-ticket small"><span>Buy Ticket</span></a>
							</div>
						</div><!-- widget content -->
					</div><!-- def block widget events -->

					<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
						<h4> Featured Videos </h4><span class="liner"></span>
						<div class="widget-content row-fluid">
							<div class="videos clearfix flexslider">
								<ul class="slides">
									<li class="featured-video">
										<a href="video_single_wide.html">
											<img src="images/assets/video1.jpg" alt="#">
											<i class="icon-play-sign"></i>
											<h3>I Dont Care</h3>
											<span>Aramide</span>
										</a>
									</li><!-- slide -->
									<li class="featured-video">
										<a href="video_single_wide.html">
											<img src="images/assets/video2.jpg" alt="#">
											<i class="icon-play-sign"></i>
											<h3>Controller </h3>
											<span>Burna boy</span>
										</a>
									</li><!-- slide -->
									<li class="featured-video">
										<a href="video_single_wide.html">
											<img src="images/assets/video3.jpg" alt="#">
											<i class="icon-play-sign"></i>
											<h3>Timeless</h3>
											<span>Joel</span>
										</a>
									</li><!-- slide -->
								</ul>
							</div>
						</div><!-- widget content -->
					</div><!-- def block widget videos -->



				</div><!-- span4 sidebar -->
			</div><!-- row clearfix -->

		</div><!-- end page content -->
 

	</div><!-- end layout -->
<!-- Scripts -->
	 
	<script type="text/javascript" src="js/theme20.js"></script>
	 
	<script type="text/javascript" src="js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js"></script>	
	<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.jplayer.js"></script>
	<script type="text/javascript" src="js/ttw-music-player-minCopyDeletelater.js"></script>
	<script type="text/javascript" src="music/myplaylist-homeCopyDeletelater.js"></script>
	<script type="text/javascript" src="js/jquery.nanoscroller.js"></script>
	<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javasc ript">	
	/* <![CDATA[ */
		var tpj=jQuery;
		tpj.noConflict();
		tpj(document).ready(function() {
		if (tpj.fn.cssOriginal!=undefined)
			tpj.fn.css = tpj.fn.cssOriginal;
			var api= tpj('.revolution').revolution({
				delay:9000,
				startheight:380,
				startwidth:960,
				hideThumbs:200,
				thumbWidth:80,
				thumbHeight:50,
				thumbAmount:5,
				navigationType:"none",
				navigationArrows:"verticalcentered",
				navigationStyle:"square",	
				touchenabled:"on", 
				onHoverStop:"on", 
				navOffsetHorizontal:0,
				navOffsetVertical:20,
				shadow:0
			});
		});
	/* ]]> */
	</script>
	<script type="text/javascript" src="customize/script.js"></script><link rel="stylesheet" type="text/css" href="customize/style.css" media="screen" /><style id="themecolors" type="text/css"></style>
            <div class="style-picker">
		<div class="container bgChanger">
			<a href="#" class="handler">&nbsp;</a>
			<div class="options">
				<span> Layout </span>
				<select name="layouts" id="layouts"><option value="boxed">Boxed</option><option value="boxed-margin">Boxed Margin</option><option value="full">Fullwide</option></select>

				<span> Version </span>
				<select name="version" id="version"><option value="dark">Dark</option><option value="light">Light</option></select>

    				<div id="bgs">
                        			<div class="stBgs stBlock">
        						<span> Backgrounds </span>
		                                                        <a rel="images/bg/1.jpg" class="thumb-img bgBody" title="bg1" style="background:#fff url(images/bg/1.jpg)">&nbsp;</a>
		                                                        <a rel="images/bg/2.jpg" class="thumb-img bgBody" title="bg2" style="background:#fff url(images/bg/2.jpg)">&nbsp;</a>
		                                                        <a rel="images/bg/3.jpg" class="thumb-img bgBody" title="bg3" style="background:#fff url(images/bg/3.jpg)">&nbsp;</a>
		                                                        <a rel="images/bg/4.jpg" class="thumb-img bgBody" title="bg4" style="background:#fff url(images/bg/4.jpg)">&nbsp;</a>
		                                                        <a rel="images/bg/5.jpg" class="thumb-img bgBody" title="bg5" style="background:#fff url(images/bg/5.jpg)">&nbsp;</a>
		                                                        <a rel="images/bg/6.jpg" class="thumb-img bgBody" title="bg6" style="background:#fff url(images/bg/6.jpg)">&nbsp;</a>
		                                                        <a rel="images/bg/7.jpg" class="thumb-img bgBody" title="bg7" style="background:#fff url(images/bg/7.jpg)">&nbsp;</a>
		                                                        <a rel="images/bg/8.jpg" class="thumb-img bgBody" title="bg8" style="background:#fff url(images/bg/8.jpg)">&nbsp;</a>
		                                                        <a rel="images/bg/9.jpg" class="thumb-img bgBody" title="bg9" style="background:#fff url(images/bg/9.jpg)">&nbsp;</a>
		                                                        <a rel="images/bg/10.jpg" class="thumb-img bgBody" title="bg10" style="background:#fff url(images/bg/10.jpg)">&nbsp;</a>
		                                                        <a rel="images/bg/11.jpg" class="thumb-img bgBody" title="bg11" style="background:#fff url(images/bg/11.jpg)">&nbsp;</a>
		                                                        <a rel="images/bg/12.jpg" class="thumb-img bgBody" title="bg12" style="background:#fff url(images/bg/12.jpg)">&nbsp;</a>
		                                                        <a rel="images/bg/13.jpg" class="thumb-img bgBody" title="bg13" style="background:#fff url(images/bg/13.jpg)">&nbsp;</a>
		                                                        <a rel="images/bg/14.jpg" class="thumb-img bgBody" title="bg14" style="background:#fff url(images/bg/14.jpg)">&nbsp;</a>
					</div>
					<div><a href="#" class="bgColor">Background Color <span id="bgColor" title="fff" style="background-color:#ddd;">&nbsp;</span></a></div>
				</div>
				<div class="cl"><a href="#" class="bgColor">Color Scheme<span id="bgHeaderColor" title="FF0078" style="background-color:#FF0078;">&nbsp;</span></a></div>
				<span>Headings Font</span><select name="hfont" id="hfont"></select>
				<span>Content Font</span><select name="pfont" id="pfont"></select>
			</div>
		</div>
	</div>
</body>
</html>


<!-- Send Data to Dedicate Modal Script -->
<script type="text/javascript">
	$(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).data('id');
      var myBookIdx = $(this).data('idx');
     $(".modal-body #bookId").val( myBookId );
     $(".modal-body #bookId2").val( myBookIdx );
}); 
</script>
<!-- /Send Data to Dedicate Modal Script -->