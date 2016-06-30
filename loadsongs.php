<?php
				//	$startRow =(($pageNumber -1) * $pageSize) +1;
 				 //  	$endRow =$pageNumber * $pageSize;

					include("rekua/konectam.php");
					 	//Check if genre is set to a corect integer
 					// Select Without Genre
 					$query="SELECT DISTINCT songs.*, artists.artist_name FROM songs INNER JOIN artists ON songs.artist_id = artists.artist_id WHERE songs.song_id between 10 and 20 order by songs.artist_id DESC";
 					$res= mysql_query($query); 
 					$result = array();
 					while ($row=mysql_fetch_array($res) ) {
 						array_push($result, array('song_id'=>$row[0], 'album_id'=>$row[1], 'artist_id'=>$row[2], 'song_title'=>$row[3], 'song_image'=>$row[4], 'storage_path'=>$row[5], 'airtel_dial_to_listen_code'=>$row[6], 'airtel_dedication_code'=>$row[7], 'airtel_crbt_vcode'=>$row[8], 'glo_dial_to_listen_code'=>$row[9], 'glo_dedication_code'=>$row[10], 'glo_crbt_vcode'=>$row[11], 'genre_id'=>$row[12], 'show_on_homepage'=>$row[13], 'show_on_top_20'=>$row[14], 'artist_name'=>$row[15] ));
 					}

 					echo json_encode(array('result'=>$result));

 				//	$list= ('song_id'=>$song_id, 'album_id'=>$album_id, 'artist_id'=>$artist_id,  'song_title'=>$song_title, 'song_image'=>$song_image, 'storage_path'=>$storage_path, 'airtel_dial_to_listen_code'=>$airtel_dial_to_listen_code, 'airtel_dedication_code'=>$airtel_dedication_code, 'airtel_crbt_vcode'=>$airtel_crbt_vcode, 'glo_dial_to_listen_code'=>$glo_dial_to_listen_code, 'glo_dedication_code'=>$glo_dedication_code, 'glo_crbt_vcode'=>$glo_crbt_vcode, 'genre_id'=>$genre_id, 'show_on_homepage'=>$show_on_homepage, 'show_on_top_20'=>$show_on_top_20, 'artist_name'=>$artist_name);

 					//$c =json_encode($list);
 					//echo $c;

?>
