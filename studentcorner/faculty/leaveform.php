<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>leave form</title>
<style>
body{
background:url(images/6907740-flower-blue.jpg) no-repeat;
margin:0px;
}
#maindiv{
	background:#999;
	height:50px;
	margin-top:0px;
	
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
#maindiv ul{margin:0px;

}
#maindiv ul li{
	
	list-style-type:none;
	float:left;
	padding-left:60px;

	}
	#maindiv ul li a{
	text-decoration:none;	
	}
.leave ul li {
	list-style-type:none;
	color:#999999;
	}
.leave ul li a{
	text-decoration:none;
	color:#FFFFFF;
	}
.leave h6{
	
		font-size:20px;
		margin-top:13px;
		margin-bottom:13px;
		}
.home h6{
	
		font-size:20px;
		margin-top:13px;
		margin-bottom:13px;
		}
.faculty h6{
	
		font-size:20px;
		margin-top:13px;
		margin-bottom:13px;
		}
.logout h6{
	
		font-size:20px;
		margin-top:13px;
		margin-bottom:13px;
		}
</style>
</head>

<body>
<script>
function list(){
document.getElementById("demo").style.display="block";
document.getElementById("demo1").style.display="block";
}
function list1(){
document.getElementById("demo").style.display="none";
document.getElementById("demo1").style.display="none";
}
</script>
<div class="header">
<div class="logo">
<a href="#"><img src="images/logo.png"></a>
</div>
</div>
<div id="maindiv">

<ul>
<li>
<div class="home">
<a href="#"><h6>Home</h6></a>
</div></li>

<li>
<div class="faculty">
<a href="#"><h6>Faculty Info</h6></a>
</div>
</li>
<li>
<div class="faculty">
<a href="marksform.php"><h6>Marks Entering</h6></a>
</div>
</li>
<li>
<div class="faculty">
<a href="facultymap.php"><h6>Attendance</h6></a>
</div>
</li>

<li>
<div class="leave">
<ul>
<li onmouseover="list()" onmouseout="list1()" id="leave"><a href="#"><h6>LEAVE</h6></a></li>
<li id="demo" onmouseover="list()" onmouseout="list1()"><a href="leave.php"><h6>Leave Apply</h6></a></li>
<li id="demo1" onmouseover="list()" onmouseout="list1()"><a href="leavestatus.php"><h6>Leave Status</h6></a></li>
</ul>
</div>
</li>

<li><div class="logout">
<a href="logout.php"><h6>Logout</h6></a>
</div>
</li>
</ul>
</div>
</body>
</html>