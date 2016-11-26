<?php


include "connection.php";

class ViewParent 
{
	$query = mysql_query("SELECT * FROM `tblparent`");	
	$row = mysql_fetch_array($query);


     $parentnamme= $row['parent_Name'];
     $parentcontact= $row['parent_Contact'];
	
}


class ViewEvent 
{
	$query = mysql_query("SELECT * FROM `tblevents");	
	$row = mysql_fetch_array($query);

     $eventname= $row['event_Name'];
     $eventdesc= $row['event_Description'];
     $eventdate= $row['event_Date'];
     $eventdatenotif= $row['event_DateNotif'];
	

}

class ViewStudent	
{

	$query = mysql_query("SELECT * FROM `tblstudent");	
	$row = mysql_fetch_array($query);

     $studentname= $row['stud_name'];
     $studentcontact= $row['stud_contact'];
     $studentlevel= $row['stud_level'];
     $studentsection= $row['stud_section'];
}



?>