<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
$sql='select * from `marks_table` where rollno="'.$_SESSION['rollno'].'"';
$query=mysql_query($sql);

?>
<html>
<head>
<title>Marks Table</title>
<style>
body{
	
	background:url(images/6907740-flower-blue.jpg) no-repeat;
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
table{
	margin-top:50px;
	}
th{
	border:1px solid #666;
	}
td{
	border:1px solid #666;
	text-align:center;
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

</table>


<table style="height:200px; border:1px solid #666;width:100%;">
<tr>
<th>S.No</th>
<th>Marks Id</th>
<th>Sem</th>
<th>Subject Id</th>
<th>Subject Marks</th>
<th>Status</th>
</tr>
<?php
$a=1;
while( $fetch=mysql_fetch_array($query)){
?>
<tr>
<td><?php echo $a++;?></td>
<td><?php echo $fetch['marks_id'];?></td>
<td><?php echo $fetch['sem'];?></td>
<td><?php echo $fetch['subject_id'];?></td>
<td><?php $marks=$fetch['subject_marks'];?>
<?php echo $marks;?></td>
<td><?php

if($marks>35){
	
echo"pass";
}
else{
	echo"fail";
	}
?></td>

</tr>

<?php 
}
?>
<tr>
<td colspan="4">TOTAL</td>
<td>
<?php 
$query_run=mysql_query($sql);
$total=0;
while($num=mysql_fetch_assoc($query_run))
{
$total+=$num['subject_marks'];
	
}
echo $total;?>

</td>
<td>
<?php
if($marks>341){
	
echo"grade A";
}
else{
	echo"grade B";
	}
?></td>
</tr>
</table>
</body>
</html>