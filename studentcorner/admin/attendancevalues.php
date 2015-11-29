<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);

$sel= 'select * from `student_details`';

if(isset($_POST['submit'])){
$i=1;
foreach($_POST['present'.$i]as $attt){
$insert='insert into attendance_table(attendance_rollno,subject,Deportement,section,status) 
values("'.$_POST['rollno'.$i].'",
"'.$_SESSION['subject'].'",
"'.$_SESSION['Deportement'].'","'.$_SESSION['section'].'","'.$attt.'")';
if(mysql_query($insert)){
echo "success"; 
header("url=attendanceform.php");
}
else{
 echo "not inserted ";	
}
}
}
?>