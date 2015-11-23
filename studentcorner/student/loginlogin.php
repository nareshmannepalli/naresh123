<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);


if(isset($_POST['submit'])){
	 $sql="select * from student_details where rollno='$_POST[rollno]' and  password='$_POST[password]'";
$query=mysql_query($sql);
$count=mysql_num_rows($query);
if($count==1)
{

$fetch=mysql_fetch_array($query);
$_SESSION['stud_id']=$fetch['stud_id'];

$_SESSION['rollno']=$fetch['rollno'];
header("refresh:0;url=suggestionpage.php");
}
else
{
 echo"not match";
 //header("Location:index.php");
}
}
?>
