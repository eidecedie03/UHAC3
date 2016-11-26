
<?php


	$db_link = mysql_connect('localhost', 'root', '') or die("Could not connect: ". mysql_error());
	mysql_select_db('uhac3.0', $db_link) or die("Could not select database: ". mysql_error());
?>