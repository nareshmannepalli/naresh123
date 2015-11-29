<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);

if(isset($_POST['delete'])){
 $delete='delete from faculty_details where id="'.$_POST['id'].'"';
 if(mysql_query($delete)){
echo "success";
}
else{
 echo "not inserted ";	
}	 
}