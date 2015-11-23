<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
if(!empty($_SESSION['id']))
{
	header("location:index.php");
	
	}
if(isset($_POST['submit'])){ $sql="select * from `admin` where username='$_POST[username]' and  password='$_POST[password]'";
$query=mysql_query($sql);
$count=mysql_num_rows($query);
if($count==1)
{
 $fetch=mysql_fetch_array($query);
 $_SESSION['id']=$fetch['id'];
echo"match";
header("location:.php");
}
else
{
 echo"not match";
}
}
?>
