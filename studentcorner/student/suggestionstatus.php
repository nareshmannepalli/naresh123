<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
$sql='select * from `suggestion_table` where stud_rollno="'.$_SESSION['rollno'].'"';
$query=mysql_query($sql);
?>
<html>
<head>
<title>leavetable</title>
<style>
body{
	
	background:url(Daisies%20Field.jpg) no-repeat;
	margin:0px;
	
	}
th{
	border:1px solid #666;
	}
td{
	border:1px solid #666;
	}
</style>
</head>
<body>
<table style="height:200px; border:1px solid #666;width:100%;">
<tr>
<th>S.no</th>
<th>suggestion_id</th>

<th>message</th>
<th>message_date</th>
<th>Status</th>
</tr>
<?php
$a=1;
while($fetch=mysql_fetch_array($query)){
?>
<tr>
<td><?php echo $a++;?></td>
<td><?php echo $fetch['suggestion_id'];?></td>

<td><?php echo $fetch['message'];?></td>
<td><?php echo $fetch['message_date'];?></td>
<td><?php echo $fetch['Status'];?></td>
</tr>
<?php 
}
?>
</table>
</body>
</html>