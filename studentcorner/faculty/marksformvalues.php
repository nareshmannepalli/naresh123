<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);



if(isset($_POST['submit'])){
$i=1;
$select="select * from student_details";
$query=mysql_query($select);	
while($fetch=mysql_fetch_array($query))
{
	
	$insert='insert into `marks_table`(rollno,sem,subject_id,subject_marks,Name_of_the_Faculty)

values("'.$_POST['rollno'.$i].'",
"'.$_POST['sem'.$i].'",
"'.$_POST['subject'.$i].'",
"'.$_POST['subject_marks'.$i].'",
"'.$_POST['Name_of_the_Faculty'.$i].'")';
if(mysql_query($insert)){
echo "success"; 
}
else{
 echo "not inserted ";	
}
$i++;
}
}
?>