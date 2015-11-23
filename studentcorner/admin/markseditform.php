<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
 $sql="select * from `marks_table` where marks_id='$_REQUEST[marks_id]'";
$query=mysql_query($sql);
$count=mysql_num_rows($query);
$fetch=mysql_fetch_array($query);
?>
<html>
<head>
<style>
body{
margin:0px;
background:url(../faculty/images/6907740-flower-blue.jpg) no-repeat;	
background-size:cover;
}
.header
{
background-color:rgba(3, 83, 199, 0.35);
    margin-top: 0px;
    height: 83px;
}
.logo{
    width: 500px;
    float: left;
    margin-top: 20px;
    margin-left: 130px;
}
table{
	margin-left:570px;
	margin-top:50px;
	}
td{
	height:50px;
	margin-left:20px;
	}
</style>
</head>
<body>
<div class="header">
<div class="logo">
<a href="#"><img src="../faculty/images/logo.png"></a>
</div>
</div>
<div>
<form name="bbbb" action="markseditupdate.php"  method="post" enctype="multipart/form-data">
<table>	
<tr>
<td>Id</td>
<td><input type="hidden" name="marks_id" value="<?php echo $_REQUEST['marks_id']?>"></td>
<td>marks</td>
<td><input type="text" name="subject_marks" value="<?php echo $fetch['subject_marks']?>"></td>
</tr>


<tr>

<td id="submit"><input type="submit" name="update" value="update"> </td>
</tr>
</table>
</form>
</div>
</body>
</html>