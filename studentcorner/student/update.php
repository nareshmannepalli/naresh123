<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
if(isset($_POST['update'])){
echo	$update='update `student_details` SET `emailid`="'.$_POST['emailid'].'",
`password`="'.$_POST['password'].'",
	
	`emailid`="'.$_POST['emailid'].'",
	`password`="'.$_POST['password'].'" where stud_id="'.$_SESSION['stud_id'].'"';
	if(mysql_query($update)){
	echo "success";
	header("refresh:2;url=detailsstudent.php");
	}
	else{
 	echo "not inserted ";	
	}	
}