<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
if(isset($_POST['submit'])){
echo $insert="insert into `leave_table`(empid,dept,leave_from_date,leave_to_date,leave_apply_date,no_of_days,type_of_leave,reason)

values('$_POST[empid]',
'$_POST[dept]',
'$_POST[leave_from_date]',
'$_POST[leave_to_date]',
'$_POST[leave_apply_date]',
'$_POST[no_of_days]',
'$_POST[type_of_leave]',
'$_POST[reason]')";
if(mysql_query($insert)){
echo "success"; 
//header("refresh:2;url=.php");
}
else{
 echo "not inserted ";	
}
	
	


}
?>