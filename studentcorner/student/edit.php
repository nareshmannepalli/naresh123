<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
echo $sql='select * from `student_details` where stud_id="'.$_SESSION['stud_id'].'"';
$query=mysql_query($sql);
$count=mysql_num_rows($query);
$fetch=mysql_fetch_array($query);
?>
<html>
<head>
<style>
body{
margin:0px;
background:url(6907740-flower-blue.jpg) no-repeat;	
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
<a href="#"><img src="logo.png"></a>
</div>
</div>
<div>
<form name="NNNN" action="update.php"  method="post" enctype="multipart/form-data">
<table>	
<tr>
<td>Student Name</td>
<td><input type="text" name="stud_name" value="<?php echo $fetch['stud_name']?>"></td>
</tr>
<tr>
<td>Student Father Name</td>
<td><input type="text" name="stud_father_name" value="<?php echo $fetch['stud_father_name']?>"></td>
</tr>
<tr>
<td>Rollno</td>
<td><input type="text" name="rollno" value="<?php echo $fetch['rollno']?>"></td>
</tr>
<tr>
<td>Current Sem</td>
<td><select name="current_sem">
	<option value="select"><?php echo $fetch['current_sem']?></option>
    <option value="	I">I</option>
    <option value="II">II</option>
    <option value="II">III</option>
    <option value="IV">IV</option>
  	</select></td>
</tr>
<tr>
<td>Section ID</td>
<td> <select name="sec_id">
 <option value="select"><?php echo $fetch['sec_id']?></option>
    <option value="A111">A111</option>
    <option value="B111">B111</option>
    <option value="C111">C111</option>
    <option value="D111">D111</option>
    <option value="E111">E111</option>
	</select></td>
</tr>
<tr>
<td>Section</td>
<td><select name="section">
	<option><?php echo $fetch['section']?></option>
    <option value="a">A</option>
    <option value="b">B</option>
    <option value="c">C</option>
    <option value="d">D</option>
  	</select></td>
</tr>
<tr>
<td>Address</td>
<td><textarea name="Address" rows="3" cols="22"><?php echo $fetch['Address']?></textarea></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="<?php echo $fetch['gender']?>">Male
<input type="radio" name="gender" value="<?php echo $fetch['gender']?>">Female
<input type="radio" name="gender" value="<?php echo $fetch['gender']?>">Others</td>
</tr>
<tr>
<td>Deportement ID</td>
<td> <select name="dept_id">
	<option ><?php echo $fetch['dept_id']?></option>
    <option value="mca">mca-0101</option>
    <option value="mba">mba-0222</option>
    <option value="bsc">bsc-0333</option>
    <option value="bca">bca-0404</option>
  	</select></td>
</tr>
<tr>
<td>Course ID</td>
<td><select name="course_id">
	<option><?php echo $fetch['course_id']?></option>
    <option value="mca">u0be0101</option>
    <option value="mba">auo0222</option>
    <option value="bsc">plo0333</option>
    <option value="bca">buo0404</option>
  	</select></td>
</tr>
<tr>
<td>email ID</td>
<td><input type="text" name="emailid" placeholder="example@gmail.com" value="<?php echo $fetch['emailid']?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" value="<?php echo $fetch['password']?>"></td>
</tr>
<tr>
<td>Parent Phone</td>
<td><input type="text" name="parent_phone" placeholder="+91" value="<?php echo $fetch['parent_phone']?>"></td>
</tr>
<tr>
<td>student Phone</td>
<td><input type="text" name="stud_phone" placeholder="+91" value="<?php echo $fetch['stud_phone']?>"></td>
</tr>
<tr>
<td>Date Of Birth</td>
<td><input type="date" name="dob" value="<?php echo $fetch['dob']?>"></td>
</tr>
<tr>
<td>Date Of Join</td>
<td><input type="date" name="doj" value="<?php echo $fetch['doj']?>"></td>
</tr>
<tr>
<td>Student Photo</td>
<td><input type="file" name="stud_photo" value="<?php echo $fetch['stud_photo']?>"></td>
</tr>
<tr>
<td>Status</td>
<td><input type="text" name="status" value="<?php echo $fetch['status']?>"></td>
</tr>
<tr>
<td>Regulation</td>
<td><input type="text" name="regulation" value="<?php echo $fetch['regulation']?>"></td>
</tr>


<tr>
<td>Total filling the form :</td>
<td id="submit"><input type="submit" name="update" value="update"> </td>
</tr>
</table>
</form>
</div>
</body>
</html>