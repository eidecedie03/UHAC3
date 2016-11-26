
<?php


	$db_link = mysql_connect('169.254.240.255/', 'root', '') or die("Could not connect: ". mysql_error());
	mysql_select_db('uhac3.0', $db_link) or die("Could not select database: ". mysql_error());
?>