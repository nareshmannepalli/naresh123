<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);

if(isset($_POST['submit'])){

$insert='insert into `map_table`(Name_of_the_Faculty,Deportement,section,subject)
values("'.$_POST['Name_of_the_Faculty'].'",
"'.$_POST['Deportement'].'",
"'.$_POST['section'].'",
"'.$_POST['subject'].'")';
	}
	
if(mysql_query($insert)){
	echo "success ";
	header("refresh:2;url=../dashboard.php");
}
else{
 echo "not inserted ";	
}

?>