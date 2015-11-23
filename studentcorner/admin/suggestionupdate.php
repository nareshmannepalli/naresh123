<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
$reply="thank you for your suggestion";
$bbb="ok";
if(isset($_POST['submit']))
{
echo $update='update suggestion_table SET
`status`="'.$reply.'" where suggestion_id="'.$_SESSION['id2'].'"';
if(mysql_query($update))
{
echo "success";	
header("location:dashboard.php");
	}
	else{
		
echo "not success";		
		}
	}
if(isset($_POST['decline']))
{
echo $update='update suggestion_table SET `status`="'.$bbb.'" where suggestion_id="'.$_SESSION['id2'].'"';
if(mysql_query($update))
{
echo"success";
header("location:dashboard.php");
}
else
{
echo"not success";
}
	}
?>