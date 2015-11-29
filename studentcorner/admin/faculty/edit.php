<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);


echo $sql='select * from `faculty_details` where id="'.$_POST['id'].'"';

$query=mysql_query($sql);
$count=mysql_num_rows($query);

$fetch=mysql_fetch_array($query);
?>
<html>
<head>
<style>
body{
	margin:0px;
	background:url(../../faculty/images/6907740-flower-blue.jpg) no-repeat;
	
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
.formdiv{
	
	margin-left:500px;
	}
input{
	    border-bottom-left-radius: 4px;
		border-bottom-right-radius: 4px;
		border-top-left-radius: 4px;
		border-top-right-radius: 4px;
	
	}
table{
   margin-left:500px;
	margin-top:50px;
    border: 1px solid #CCC;
    height: 900px;
	border-bottom-right-radius:30px;
	border-top-left-radius:30px;
	border-bottom-left-radius:30px;
	border-top-right-radius:30px;
	background:rgba(221, 223, 226, 0.29);
	}
td{
	padding:20px;
	}

</style>
</head>
<body>
<div class="header">
<div class="logo">
<a href="#"><img src="../../faculty/images/logo.png"/></a>
</div>
</div>
<div class="formdiv">
<form name="NNNN" action="editupdate.php"  method="post" enctype="multipart/form-data">
<table style="margin-left:20px;">	
<tr>
<td>Name of the Faculty :</td>
<td><input type="text" name="Name_of_the_Faculty" value="<?php echo $fetch['Name_of_the_Faculty']?>"></td>
</tr>
<tr>
<td>Father’s Name :</td>
<td><input type="text" name="Fathers_Name" value="<?php echo $fetch['Fathers_Name']?>"></td>
</tr>
<tr>
<td>Date of Birth :</td>
<td><input type="date" name="Dob" value="<?php echo $fetch['Dob']?>"></td>
</tr>
<tr>
<td>Phone Number :</td>
<td><input type="text" name="Phone_Number" value="<?php echo $fetch['Phone_Number']?>"></td>
</tr>
<tr>
<td>Email ID :</td>
<td><input type="text" name="Email_ID" value="<?php echo $fetch['Email_ID']?>"></td>
</tr>
<tr>
<td>User name :</td>
<td><textarea name="User_name" rows="3" cols="22"><?php echo $fetch['User_name']?></textarea></td>
</tr>
<tr>
<tr>
<td>Password :</td>
<td><input type="Password" name="password" value="<?php echo $fetch['password']?>"></td>
</tr>
<tr>
<td>Gender :</td>
<td><input type="radio" name="Gender" value="male" checked >Male
<input type="radio" name="Gender" value="female">Female
<input type="radio" name="Gender" value="others" >Others</td>
</tr>

<tr>
<td>Deportement :</td>
<td> <select name="Deportement">
	<option ><?php echo $fetch['Deportement']?></option>
    <option value="mca">mca</option>
    <option value="mba">mba</option>
    <option value="msc">msc</option>
    <option value="mtech">mtech</option>
  	</select></td>
</tr>
<tr>
<td>Designation :</td>
<td> <select name="Designation">
	<option ><?php echo $fetch['Designation']?></option>
    <option value="mca">mca</option>
    <option value="mba">mba</option>
    <option value="msc">msc</option>
    <option value="mtech">mtech</option>
  	</select></td>
</tr>
<td>Highest Qualification :</td>
<td><input type="text" name="Highest_Qualification" value="<?php echo $fetch['Highest_Qualification']?>"></td>
</tr>
<tr>
<td>Date Of Join :</td>
<td><input type="date" name="Doj" value="<?php echo $fetch['Doj']?>"></td>
</tr>
<tr>
<td>Pay Scale (AICTE VI Pay scale) :</td>
<td><input type="text" name="Pay_Scale" value="<?php echo $fetch['Pay_Scale']?>"></td>
</tr>
<tr>
<td>Experience :</td>
<td><input type="text" name="Experience" value="<?php echo $fetch['Experience']?>"></td>
</tr>
<tr>
<td>Address :</td>
<td><input type="text" name="Address" value="<?php echo $fetch['Address']?>"></td>
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