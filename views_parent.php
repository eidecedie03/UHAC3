<?php
include "connection.php";


$query = mysql_query("SELECT * FROM `tblevents");	
$row = mysql_fetch_array($query);


     $eventname= $row['event_Name'];
     $eventdesc= $row['event_Description'];
     $eventdate= $row['event_Date'];
     $eventdatenotif= $row['event_DateNotif'];


?>