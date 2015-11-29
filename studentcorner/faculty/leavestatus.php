<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
$sql='select * from `leave_table` where empid="'.$_SESSION['id'].'"';
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
<th>Emp Id</th>
<th>dept</th>
<th>Leave from date</th>
<th>Leave to date</th>
<th>Leave apply date</th>
<th>No of days</th>
<th>Type of leave</th>
<th>Reason</th>
<th>Status</th>
</tr>
<?php
$a=1;
while($fetch=mysql_fetch_array($query)){
?>
<tr>
<td><?php echo $a++;?></td>
<td><?php echo $fetch['empid'];?></td>
<td><?php echo $fetch['dept'];?></td>
<td><?php echo $fetch['leave_from_date'];?></td>
<td><?php echo $fetch['leave_to_date'];?></td>
<td><?php echo $fetch['leave_apply_date'];?></td>
<td><?php echo $fetch['no_of_days'];?></td>
<td><?php echo $fetch['type_of_leave'];?></td>
<td><?php echo $fetch['reason'];?></td>
<td><?php echo $fetch['status'];?></td>
</tr>
<?php 
}
?>
</table>
</body>
</html>