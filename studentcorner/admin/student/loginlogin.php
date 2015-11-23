<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
if(!empty($_SESSION['stud_id']))
{
	header("Location:index.php");
	
	}

if(isset($_POST['submit'])){
	 $sql="select * from student_details where rollno='$_POST[rollno]' and  password='$_POST[password]'";
$query=mysql_query($sql);
$count=mysql_num_rows($query);
if($count==1)
{

$fetch=mysql_fetch_array($query);
$_SESSION['stud_id']=$fetch['stud_id'];
header("refresh:0;url=detailsstudent.php");
}
else
{
 echo"not match";
 header("Location:index.php");
}
}
?>
