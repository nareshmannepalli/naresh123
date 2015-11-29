<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
if(isset($_POST['submit'])){
	$update='update `faculty_details` SET 
	
		`Password`="'.$_POST['password'].'" where id="'.$_POST['id'].'"';
	if(mysql_query($update)){
	echo "success";
	}
	else{
 	echo "not inserted ";	
	}	
	}