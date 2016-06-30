

<!-- jquery loads songs. paste in tracks.php-->
<script type="text/javascript">
		var currentPAgeNumber = 1;
		loadMoreSongs(currentPAgeNumber);

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

				//$('.mylistofsongs').append(data);
				},
				error:function() {
					alert('failed');
				},
			})

		}
//	})
</script>



<?php
					
         foreach (array_keys($_GET) as $key)
                        {
                            $$key = $_GET[$key];                        
                        } 


					$startRow =(($pageNumber -1) * $pageSize) +1;
 				  	$endRow =$pageNumber * $pageSize;

					include("rekua/konectam.php");
					 	//Check if genre is set to a corect integer
 					// Select Without Genre
 					$query="SELECT DISTINCT songs.*, artists.artist_name FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id WHERE songs.song_id between $startRow and $endRow order by songs.artist_id asc";
 								// now the real result
							  $result = mysql_query($query); 

							      if (mysql_num_rows($result) > 0)
							      	{

					 		            while (list($song_id, $album_id, $artist_id,  $song_title, $song_image, $storage_path, $airtel_dial_to_listen_code, $airtel_dedication_code, $airtel_crbt_vcode, $glo_dial_to_listen_code, $glo_dedication_code, $glo_crbt_vcode, $genre_id, $show_on_homepage, $show_on_top_20, $artist_name)=mysql_fetch_array($result))
							             {			    
							             	// blow the rows out my guy..lol

							             	echo ' 
									<div class="mytrack">

										<div class="span6"> <!--  span6  title-->
											<li class="eachsong">
												<a class="playsong" href="#" data-src="songs/'.$storage_path.'">
												<i class="icons-play playsongplay"></i>
											</a>
											</li>
												<a href="#" class="track_details">
												<div>
												 <span class="scrollup">'.$song_title.' By '.$artist_name.' | Dial the song-code:  '.$airtel_dial_to_listen_code.' on Airtel or  '.$glo_dial_to_listen_code.' on Glo to listen to full Track</span> 
												</div>
												</a>
												
										</div> <!-- /  span6  title-->
										
										<div class="span6 withsmsdedi" > <!--  span6  buttons-->

											<span class="callertunezbtn_wraper">
											<button data-toggle="modal" data-id="'.$airtel_crbt_vcode.'" data-idx="'.$glo_crbt_vcode.'" href="#mycallertModal" class="open-AddBookDialog callertunezbtn callertune" ><i class="icon-music"></i> Caller Tunes
											</button>
											</span> <!--/  Caller Tunez  button--> 


											<button data-toggle="modal" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'" href="#myModal" class="open-AddBookDialog dedicatebtn dedicate" ><i class="icon-gift"></i> Dedicate
											</button> <!--/  Dedicate button-->
										
											<button class="dedicatebtn smsdeddi" data-toggle="modal" href="#smsdeddi" data-id="'.$airtel_dedication_code.'" data-idx="'.$glo_dedication_code.'"><i class="fa fa-envelope-o"></i> sms</button> <!--/  sms button-->

<!-- Social Media Share links-->
<div class="dropdown dropdownsocialbox">
  <button class="dedicatebtn dropdown-toggle" type="button" id="dropdownsocial" data-toggle="dropdown" aria-haspopup="true">
   <i class="fa fa-facebook"></i>  share <i class="fa fa-twitter"></i>
  </button>
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
										 

										
										</div>  <!--/buttons-->

									</div>  <!--/    mytrack-->
							             		';
			              				}

			              				 
			      					} 


?>
