<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
$aaa="Accepted";
$bbb="Notaccepted";
if(isset($_POST['submit']))
{
echo $update='update leave_table SET
`status`="'.$aaa.'" where l_id="'.$_SESSION['id3'].'"';
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
echo $update='update leave_table SET `status`="'.$bbb.'" where l_id="'.$_SESSION['id3'].'"';
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