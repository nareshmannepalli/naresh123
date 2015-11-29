<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
$attt="present";
if(isset($_POST['submit'])){
foreach($_POST['present']as $roll){
$insert='insert into attendance_table(attendance_rollno,subject,Deportement,section,status) 
values("'.$roll.'",
"'.$_POST['subject'].'",
"'.$_POST['Deportement'].'","'.$_POST['section'].'","'.$attt.'")';
if(mysql_query($insert)){
echo "success"; 
header("refresh:2;url=facultymap.php");
}
else{
 echo "not inserted ";	
}
}
}
?>