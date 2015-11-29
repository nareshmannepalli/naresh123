<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>faculty</title>
<style>
body{
background:url(images/6907740-flower-blue.jpg) no-repeat;
background-size:cover;
margin:0px;
}
.maindiv{
	height:100px;
	background-color:rgba(0, 61, 153, 0.31);
	}
.name{
float:left;
}
.name img{
margin-left:100px;
margin-top:25px;
margin-bottom:20px;

}
.f_name{
	float:right;
	margin-right:650px;
	margin-top:10px;
	}
	.f_name h3{
		
		color:#fff;
		font-size:28px;
		font-family:"Times New Roman", Times, serif;
		
	}
	

.form1{
    margin-left: 450px;
    width: 700px;
    height: 900px;
   	border-bottom-left-radius: 20px;
    border-top-right-radius: 30px;
    border-bottom-right-radius: 20px;
    border-top-left-radius: 30px;
    margin-top: 55px;
    border: 1px solid #FFF;
}
input{
	    border-bottom-left-radius: 4px;
		border-bottom-right-radius: 4px;
		border-top-left-radius: 4px;
		border-top-right-radius: 4px;
	
	}
td{
height:45px;
font-size:20px;
color:#FFFFFF;
}
#submit{
padding: 9px;
border-top-left-radius: 10px;
border-top-right-radius: 10px;
border-bottom-right-radius: 10px;
border-bottom-left-radius: 10px;
color:red;	
}
table{
	 margin-left: 117px;
    margin-top: 28px;
	}
</style>
</head>
<body>
<div class="maindiv">
<div class="name">
<a href="#"><img src="../../faculty/images/logo.png"></a>
</div>

</div>
<div class="f_name">
<h3>Faculty <span style="color:#FF0000">Sign Up</span> Form</h3>
</div>
<div class="form1">
<form name="mmmm" action="facultyvalues.php"  method="post" enctype="multipart/form-data">
<table>	
<tr>
<td>Name of the Faculty :</td>
<td><input type="text" name="Name_of_the_Faculty"></td>
</tr>
<tr>
<td>Father’s Name :</td>
<td><input type="text" name="Fathers_Name"></td>
</tr>
<tr>
<td>Date of Birth :</td>
<td><input type="date" name="Dob"></td>
</tr>
<tr>
<td>Phone Number :</td>
<td><input type="text" name="Phone_Number" value=""></td>
</tr>
<tr>
<td>Email ID :</td>
<td><input type="text" name="Email_ID" placeholder="example@gmail.com"></td>
</tr>
<tr>
<td>User name :</td>
<td><input type="text" name="User_name"></td>
</tr>

<tr>
<td>Password :</td>
<td><input type="password" name="password"></td>
</tr>

<tr>
<td>Gender :</td>
<td><input type="radio" name="Gender" value="male">Male
<input type="radio" name="Gender" value="female">Female
<input type="radio" name="Gender" value="others">Others</td>
</tr>
<tr>
<td>Deportement :</td>
<td> <select name="Deportement">
	<option value="select">select</option>
    <option value="mca">mca</option>
    <option value="mba">mba</option>
    <option value="msc">msc</option>
    <option value="mtech">mtech</option>
  	</select></td>
</tr>
<tr>
<td>
Designation :</td>
<td> <select name="Designation">
	<option value="select">select</option>
    <option value="mca">mca</option>
    <option value="mba">mba</option>
    <option value="msc">msc</option>
    <option value="mtech">mtech</option>
  	</select></td>
</tr>
<tr>
<td>
Highest Qualification :</td>
<td><input type="text" name="Highest_Qualification"></td>
</tr>
<tr>
<td>Date Of Join :</td>
<td><input type="date" name="Doj"></td>
</tr>
<tr>
<td>
Pay Scale (AICTE VI Pay scale) :</td>
<td><input type="text" name="Pay_Scale" value=""></td>
</tr>
<tr>
<td>Experience :</td>
<td><input type="text" name="Experience" value=""></td>
</tr>
<tr>
<td>Address :</td>
<td><textarea name="Address" rows="3" cols="22"></textarea></td>
</tr>

<tr>
<td>Faculty Photo</td>
<td><input type="file" name="Faculty_photo" value=""></td>
</tr>
</table>

<table>
<tr>
<td>Total filling the form  : </td>
<td id="submit"><input type="submit" name="submit" value="submit"></td>
</tr>
</table>
</form>
</div>
</body>
</html>