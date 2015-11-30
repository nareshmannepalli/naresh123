<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
$sql='select * from `faculty_details` where  id="'.$_SESSION['id'].'"';
		$query=mysql_query($sql);
	    $fetch=mysql_fetch_array($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>leave</title>
<style>
body{
	background:url(../student/images/6907740-flower-blue.jpg) no-repeat;
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

<div class="form">
<form name="leave" action="facultyleavevalues.php"  method="post" enctype="multipart/form-data">
<table>	
<tr>
<td>Faculty Emp Id:</td>
<td><input type="text" name="empid" value="<?php echo $fetch['id']?>" />
</tr>
<tr>
<td>Department :</td>
<td><input type="text" name="dept" value="<?php echo $fetch['Deportement']?>"></td>
</tr>
<tr>
<td>Leave From Date :</td>
<td><input type="date" name="leave_from_date"></td>
</tr>
<tr>
<td>Leave To Date :</td>
<td><input type="text" name="leave_to_date" value=""></td>
</tr>
<tr>
<td>Leave Spply Date :</td>
<td><input type="date" name="leave_apply_date"></td>
</tr>
<tr>
<td>No Of Days :</td>
<td><input type="text" name="no_of_days"></td>
</tr>
<tr>
<td>Type Of Leave :</td>
<td><input type="text" name="type_of_leave"></td>
</tr>

<td>Reason :</td>
<td><input type="text" name="reason"></td>
</tr>
<tr>
<td ><input type="submit" name="submit" value="submit" style="margin-left: 98px;"></td>
</tr>
</table>
</form>
</body>
</html>