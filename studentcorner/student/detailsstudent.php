<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
	$sql='select * from `student_details` where  stud_id="'.$_SESSION['stud_id'].'"';
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
background:url(../faculty/images/6907740-flower-blue.jpg) no-repeat;
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
    margin-left: 27px;
    width: 766px;
    border: 1px solid #666;
    height: 900px;
	}
.tabledata{
    margin-left: 472px;
    background:rgba(187, 200, 218, 0.26);
    width: 822px;
    margin-top: 58px;
    height: 1150px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    border: 1px solid #666;
	}
.studentphoto{
    float: left;
	margin-top: 56px;
    margin-left:100px;
    border-bottom-left-radius: 20px;
    border-top-right-radius: 30px;
	border-bottom-right-radius:20px;
	border-top-left-radius:30px;
	border:4px solid #fff;
	}
	
.tabledata h3{
	margin-left: 231px;
    margin-top: 91px;
	color:#000066;
	font-family:"Courier New", Courier, monospace;
	}
	
 .tabledata h3 span{
	 color:#FFCC00;
	 font-family:"Comic Sans MS", cursive;
	 }
.studentphoto img{
    height: 554px;
    width: 364px;
	border-bottom-left-radius:20px;
	border-top-right-radius:30px;
	border-bottom-right-radius:20px;
	border-top-left-radius:30px;
	}
.edit{
		
    margin-right: 10px;
		}
</style>
</head>
<body>
<div class="header">
<div class="logo">
<a href="#"><img src="logo.png"/></a>
</div>
<div class="profile"><a href="#"><img src="images/<?php echo $fetch['stud_photo']?>"</a></div>
<div class="name">
 <a href="#"><?php echo $fetch['stud_name'];?></a>
                </div>
<div class="logout">
<a href="logout.php"><img src="exit.png"></a>
</div>
</div>

<div class="studentphoto"><a href="profileupdate.php"><img src="images/<?php echo $fetch['stud_photo']?>" alt="" ></a></div>
<div class="tabledata">

<h3>STUDENT NAME:<span></td><td><?php echo $fetch['stud_name']?></span></h3>
<div class="edit">
<a href="edit.php"> <h2 style="color:#000;font-size:20px;  background:#fff; float:right;margin-right:30px; margin-bottom:0px">Edit</h2></a></div>
<table>
<tr>
<td>Student Name:</td><td><span><?php echo $fetch['stud_name']?></span></td>
</tr>
<tr>
<td>Student Father Name:</td><td><span><?php echo $fetch['stud_father_name']?></span></td>
</tr>
<tr>
<td>Rollno:</td><td><span><?php echo $fetch['rollno']?></span></td>
</tr>
<tr>
<td>Current Sem:</td><td><span><?php echo $fetch['current_sem']?></span></td>
</tr>
<tr>
<td>Section ID:</td><td><span><?php echo $fetch['sec_id']?></span></td>
</tr>
<tr>
<td>Section:</td><td><span><?php echo $fetch['section']?></span></td>
</tr>
<tr>
<td>Address:</td><td><span><?php echo $fetch['Address']?></span></td>
</tr>
<tr>
<td>Gender:</td><td><span><?php echo $fetch['gender']?></span></td>
</tr>
<tr>
<td>Deportement ID:</td><td><span><?php echo $fetch['dept_id']?></td>
</tr>
<tr>
<td>Course ID:</td><td><span><?php echo $fetch['course_id']?></span></td>
</tr>
<tr>
<td>email ID:</td><td><span><?php echo $fetch['emailid']?></span></td>
</tr>
<tr>
<td>Password:</td><td><span><?php echo $fetch['password']?></span></td>
</tr>
<tr>
<td>Parent Phone:</td><td><span><?php echo $fetch['parent_phone']?></span></td>
</tr>
<tr>
<td>Student Phone:</td><td><span><?php echo $fetch['stud_phone']?></span></td>
</tr>
<tr>
<td>Date Of Birth:</td><td><span><?php echo $fetch['dob']?></span></td>
</tr>
<tr>
<td>Date Of Join:</td><td><span><?php echo $fetch['doj']?></span></td>
</tr>
<tr>
<td>Status:</td><td><span><?php echo $fetch['status']?></span></td>
</tr>
<tr>
<td>Regulation:</td><td><span><?php echo $fetch['regulation']?></span></td>
</tr>
</table>
</div>
</body>
</html>