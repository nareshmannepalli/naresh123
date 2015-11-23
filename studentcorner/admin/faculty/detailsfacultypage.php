<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
	$sql='select * from `faculty_details` where  id="'.$_POST['id'].'"';
	$_SESSION['a']=$_POST['id'];
	$query=mysql_query($sql);
	$fetch=mysql_fetch_array($query);
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>detailsstudent</title>

<style>
body{
	background:url(Simple-Blue-Background-HD-Wallpaper.jpg) no-repeat;
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
.profile{
	margin-left:50px;
	float:left;
	width:30px;
	height:40px;
	}
.profile img{
	width:100%;
    height:30px;
    margin:0auto;
	margin-top:20px;
	float:left;
	
	}
.name a{
    margin: 0px;
    float: left;
    margin-top: 20px;
    margin-left: 20px;
	font-size:28px;
	color:#FFF;
    text-decoration: none;
		
		}
.logout{
	float:right;
	}
.logout img{
	height:30px;
	margin-right:70px;	
	margin-top:25px;
	}
td{
	height:40px;
	font-size:24px;
	color:#fff;
	border:1px solid #333;
	text-align:center;
	}
td span{
	color:#000;
	}
tr{
	margin-top:20px;
	}
table{
    margin-left: 59px;
    width: 709px;
    border: 1px solid #666;
    height: 900px;
	}
.tabledata{
    margin-left: 648px;
    background: rgba(254, 254, 255, 0.31);
    width: 820px;
    height: 1300px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    border: 1px solid #666;
	}
.studentphoto{
    float: left;
    margin-top: 22px;
    margin-left: 58px;
    border-bottom-left-radius: 20px;
    border-top-right-radius: 30px;
    border-bottom-right-radius: 20px;
    border-top-left-radius: 30px;
    border: 4px solid #000;
	}
	
.tabledata h3{
    margin-left: 291px;
    font-size: 24px;
    margin-top: 91px;
    color: #000066;
    font-family: "Courier New", Courier, monospace;
	}
	
.tabledata h3 span{
	 color:#FFCC00;
	 font-family:"Comic Sans MS", cursive;
	 }
.studentphoto img{
	height:200px;
	width:200px;
	border-bottom-left-radius:20px;
	border-top-right-radius:30px;
	border-bottom-right-radius:20px;
	border-top-left-radius:30px;
	}
.edit{
		
    margin-right: 22px;
    margin-top: 65px;
	}
</style>
</head>
<body>
<div class="header">
<div class="logo">
<a href="#"><img src="logo.png"/></a>
</div>
<div class="profile"><a href="profilechange.php"><img src="images/<?php echo $fetch['Faculty_photo']?>"</a></div>
<div class="name">
 <a href="#"><?php echo $fetch['Name_of_the_Faculty'];?></a>
                </div>
<div class="logout">
<a href="logout.php"><img src="exit.png"></a>
</div>
</div>
<div class="tabledata">
<div class="studentphoto"><a href="profilechange.php"><img src="images/<?php echo $fetch['Faculty_photo']?>" alt="" ></a></div>
<h3>Name of the Faculty :<span></td><td><?php echo $fetch['Name_of_the_Faculty']?></span></h3>
<div class="edit">
<a href="../dashboard.php"> <h2 style="color:#000;font-size:20px;  background:#fff; float:right;margin-right:30px; margin-bottom:0px margin-top:0px">Back</h2></a></div>
<table>
<tr>
<td>Name of the Faculty :</td><td><span><?php echo $fetch['Name_of_the_Faculty']?></span></td>
</tr>
<tr>
<td>Father’s Name :</td><td><span><?php echo $fetch['Fathers_Name']?></span></td>
</tr>
<tr>
<td>Date of Birth :</td><td><span><?php echo $fetch['Dob']?></span></td>
</tr>
<tr>
<td>Phone Number :</td><td><span><?php echo $fetch['Phone_Number']?></span></td>
</tr>
<tr>
<td>Email ID :</td><td><span><?php echo $fetch['Email_ID']?></span></td>
</tr>
<tr>
<td>User name :</td><td><span><?php echo $fetch['User_name']?></span></td>
</tr>
<tr>
<td>Password :</td><td><span><?php echo $fetch['password']?></span></td>
</tr>
<tr>
<td>Gender:</td><td><span><?php echo $fetch['Gender']?></span></td>
</tr>
<tr>
<td>Deportement :</td><td><span><?php echo $fetch['Deportement']?></td>
</tr>
<tr>
<td>Designation :</td><td><span><?php echo $fetch['Designation']?></span></td>
</tr>
<tr>
<td>Highest Qualification :</td><td><span><?php echo $fetch['Highest_Qualification']?></span></td>
</tr>
<tr>
<td>Date Of Join :</td><td><span><?php echo $fetch['Doj']?></span></td>
</tr>
<tr>
<td>Pay Scale (AICTE VI Pay scale) :</td><td><span><?php echo $fetch['Pay_Scale']?></span></td>
</tr>
<tr>
<td>Experience :</td><td><span><?php echo $fetch['Experience']?></span></td>
</tr>
<tr>
<td>Address :</td><td><span><?php echo $fetch['Address']?></span></td>
</tr>
</table>
</div>
</body>
</html>