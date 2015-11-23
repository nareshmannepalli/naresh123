<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
if(isset($_POST['update'])){
	foreach($_POST['present'] as $at)
	{
 $update='update `attendance_table` SET `status`="'.$at.'"  where attendance_id="'.$_POST['attendance_id'].'"';
	if(mysql_query($update)){
	echo "success";
	header("refresh:2;url=attendanceform.php");
	}
	else{
 	echo "not inserted ";	
	}
	}
}
?>