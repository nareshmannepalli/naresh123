<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
if(isset($_POST["upload"])) 
{
	
  $file_name = $_FILES['faculty_photo']['name'];
  
  $file_tmp =$_FILES['faculty_photo']['tmp_name'];
        
move_uploaded_file($file_tmp,"D:/xampp/htdocs/studentcorner/faculty/images/".$file_name);
$sql='update faculty_details SET 
faculty_photo="'.$_FILES['faculty_photo']['name'].'" 
where id="'.$_SESSION['a'].'"';

if(mysql_query($sql)){	
	echo "success";
	header("refresh:2;url=../f_list.php");
}
else{
	echo "not success";
}

}
   
?>