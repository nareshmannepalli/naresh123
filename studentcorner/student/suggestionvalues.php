<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
if(isset($_POST['submit'])){
	
	echo  $insert="insert into `suggestion_table`(stud_rollno,message,message_date,status) 
	values('$_POST[stud_rollno]','$_POST[message]','$_POST[message_date]','$_POST[Status]')";
	
if(mysql_query($insert)){
echo "success"; 
}
else{
 echo "not inserted ";	
}
	}
?>