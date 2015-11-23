<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>student</title>
<style>
body{
background
background-size:cover;
margin:0px;
}
.name{
background-color:rgba(0, 61, 153, 0.31);
}
.name img{
margin-left:100px;
margin-top:20px;
margin-bottom:20px;
}


.form1{
    margin-left: 450px;
    width: 700px;
    height: 1200px;
    background: rgba(255, 255, 255, 0.45);
    border-bottom-left-radius: 20px;
    border-top-right-radius: 30px;
    border-bottom-right-radius: 20px;
    border-top-left-radius: 30px;
    margin-top: 55px;
    border: 1px solid #FFF;
}
td{
height:45px;
font-size:20px;
color:#333333;
}
#submit{
}
table{
	 margin-left: 141px;
    margin-top: 28px;
	}
</style>
</head>
<body>
<div class="name">
<a href="#"><img src="logo.png"></a>
</div>
<div class="form1">
<form name="NNNN" action="studentdata.php"  method="post" enctype="multipart/form-data">
<table>	
<tr>
<td>Student Name</td>
<td><input type="text" name="stud_name"></td>
</tr>
<tr>
<td>Student Father Name</td>
<td><input type="text" name="stud_father_name"></td>
</tr>
<tr>
<td>Rollno</td>
<td><input type="text" name="rollno"></td>
</tr>
<tr>
<td>Current Sem</td>
<td><select name="current_sem">
	<option value="select">select</option>
    <option value="	I">I</option>
    <option value="II">II</option>
    <option value="II">III</option>
    <option value="IV">IV</option>
  	</select></td>
</tr>
<tr>
<td>Section ID</td>
<td> <select name="sec_id">
 <option value="select">select</option>
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
	<option value="select">select</option>
    <option value="a">A</option>
    <option value="b">B</option>
    <option value="c">C</option>
    <option value="d">D</option>
  	</select></td>
</tr>
<tr>
<td>Address</td>
<td><textarea name="Address" rows="3" cols="22"></textarea></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="others">Others</td>
</tr>
<tr>
<td>Deportement ID</td>
<td> <select name="dept_id">
	<option value="select">select</option>
    <option value="mca">mca-0101</option>
    <option value="mba">mba-0222</option>
    <option value="bsc">bsc-0333</option>
    <option value="bca">bca-0404</option>
  	</select></td>
</tr>
<tr>
<td>Course ID</td>
<td><select name="course_id">
	<option value="select">select</option>
    <option value="mca">u0be0101</option>
    <option value="mba">auo0222</option>
    <option value="bsc">plo0333</option>
    <option value="bca">buo0404</option>
  	</select></td>
</tr>
<tr>
<td>email ID</td>
<td><input type="text" name="emailid" placeholder="example@gmail.com"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" ></td>
</tr>
<tr>
<td>Parent Phone</td>
<td><input type="text" name="parent_phone" placeholder="+91"></td>
</tr>
<tr>
<td>student Phone</td>
<td><input type="text" name="stud_phone" placeholder="+91"></td>
</tr>
<tr>
<td>Date Of Birth</td>
<td><input type="date" name="dob"></td>
</tr>
<tr>
<td>Date Of Join</td>
<td><input type="date" name="doj"></td>
</tr>
<tr>
<td>Student Photo</td>
<td><input type="file" name="stud_photo" value=""></td>
</tr>
<tr>
<td>Status</td>
<td><input type="text" name="status" value=""></td>
</tr>
<tr>
<td>Regulation</td>
<td><input type="text" name="regulation" value=""></td>
</tr>
</table>
<table >
<tr>
<td>Total filling the form  :  </td>
<td id="submit"><input type="submit" name="submit" value="submit"> </td>
</tr>
</form>
</div>
</body>
</html>