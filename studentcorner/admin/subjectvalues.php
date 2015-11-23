<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);

if(isset($_POST['submit'])){
$insert="insert into `subject_table`(subject)

values('$_POST[subject]')";
if(mysql_query($insert)){
echo "success"; 
header("refresh:2;url=subjectform.php");
}
else{
 echo "not inserted ";	
}
}
?>