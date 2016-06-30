<?php
	$servername= "localhost";
	$username="lawrence_singer";
	$password="7TrmgBK{Hw&y";

	// Create connection.
	$connection=mysql_connect($servername, $username, $password);
	mysql_set_charset('utf8',$connection);

	 //check connection
	if (!$connection) {
		die("connection to the Server Failed:" .mysql_connect_error());
		
	}

	$database_select = mysql_select_db("lawrence_musikgenie", $connection);
	if (!$database_select){
		die ("i no see the Music Genie Site   oo" .mysql_error());
	}

	?>