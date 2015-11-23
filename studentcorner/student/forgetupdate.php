<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
if(isset($_POST['submit'])){
	$update='update student_details SET 
	
		`password`="'.$_POST['password'].'" where stud_id="'.$_POST['stud_id'].'"';
	if(mysql_query($update)){
	echo "success";
	}
	else{
 	echo "not inserted ";	
	}	
	}