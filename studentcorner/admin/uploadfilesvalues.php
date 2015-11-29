<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);

 $file_name = $_FILES['attachment']['name'];
  
  $file_tmp =$_FILES['attachment']['tmp_name'];
       
move_uploaded_file($file_tmp,"temp/".$file_name);
if(isset($_POST['submit'])){
$insert="insert into `upload_table`(title,attachment,category,type,upload_date,whom)

values('$_POST[title]','$_FILES[attachment][name]',
'$_POST[category]',
'$_POST[type]',
'$_POST[upload_date]',
'$_POST[whom]')";
if(mysql_query($insert)){
echo "success"; 
header("refresh:2;url=../dashboard.php");
}
else{
 echo "not inserted ";	
}
}
?>