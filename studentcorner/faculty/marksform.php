<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);

 $sql="select faculty_details.*,map_table.* from faculty_details INNER JOIN map_table ON faculty_details.Name_of_the_Faculty=map_table.Name_of_the_Faculty where id='$_SESSION[id]'";
		$query=mysql_query($sql);
	    $fetch=mysql_fetch_array($query);
		$i=1;
$select="select * from student_details";
$quer=mysql_query($select);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>leave</title>
<style>
body{
	background:url(../student/images/6907740-flower-blue.jpg) no-repeat;
	background-size:cover;
	margin:0px;
	}
.header{
	background:rgba(0, 61, 153, 0.31);
    margin: 0px;
    height: 83px;
	}
.logo{
    width:500px;
    float:left;
	margin-top:20px;
    margin-left:130px;
}
td{
height:45px;
font-size:20px;
color:#FFFFFF;
}
table{
	 margin-left: 141px;
    margin-top: 28px;
	}
</style>

</head>

<body>
<div class="header">
<div class="logo">
<a href="#"><img src="images/logo.png"></a>
</div>
</div>
<table>
<tr>
<th>roll no</th>
<th>marks</th>
</tr>

<form name="" action="marksformvalues.php" method="post">
<?php
while($fetc=mysql_fetch_array($quer))
{
?>
<tr>
<td><?php echo $fetc['rollno']?></td>
<input type="hidden" name="rollno<?php echo $i; ?>" value="<?php echo $fetc['rollno']?>"> 
<input type="hidden" name="sem<?php echo $i; ?>" value="<?php echo $fetc['current_sem']?>"> 
<input type="hidden" name="subject<?php echo $i; ?>" value="<?php echo $fetch['subject']?>">
<input type="hidden" name="Name_of_the_Faculty<?php echo $i; ?>" value="<?php echo $fetch['Name_of_the_Faculty']?>">

<td><input type="text" name="subject_marks<?php echo $i; ?>"  />


</tr>
<?php
$i++;
 } ?>

<tr>
<td ><input type="submit" name="submit" value="submit" style="margin-left: 98px;"></td>
</tr>

</form>
</table>


</body>
</html>