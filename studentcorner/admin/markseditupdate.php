<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
if(isset($_POST['update'])){
	
	$update='update `marks_table` SET `subject_marks`="'.$_POST['subject_marks'].'"  where marks_id="'.$_POST['marks_id'].'"';
	if(mysql_query($update)){
	echo "success";
	header("refresh:2;url=marks.php");
	}
	else{
 	echo "not inserted ";	
	}	
}