<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);

if(isset($_POST['delete'])){
 $delete='delete from student_detais where stud_id="'.$_POST['stud_id'].'"';
 if(mysql_query($delete)){
echo "success";

}
else{
 echo "not inserted ";	
}	 
}