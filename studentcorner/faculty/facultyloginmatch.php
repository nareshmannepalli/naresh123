<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
if(isset($_POST['submit'])){
$sql="select * from `faculty_details` where User_name='$_POST[username]' and  password='$_POST[password]'";
$query=mysql_query($sql);
$count=mysql_num_rows($query);
if($count==1)
{
$fetch=mysql_fetch_array($query);
$_SESSION['id']=$fetch['id'];
header("location:leaveform.php");
}
else
{
 echo"not match";
}
}
?>
