<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
if(isset($_POST['submit'])){

$image=$_FILES['Faculty_photo']['name'];

echo  $insert="insert into `faculty_details`(Name_of_the_Faculty,Fathers_Name,Dob,Phone_Number,Email_ID,User_name,password,Gender,Deportement,Designation,Highest_Qualification,Doj,Pay_Scale,Experience,Address,Faculty_photo)

values('$_POST[Name_of_the_Faculty]',
'$_POST[Fathers_Name]',
'$_POST[Dob]',
'$_POST[Phone_Number]',
'$_POST[Email_ID]',
'$_POST[User_name]',
'$_POST[password]',
'$_POST[Gender]',
'$_POST[Deportement]',
'$_POST[Designation]',
'$_POST[Highest_Qualification]',
'$_POST[Doj]'
,'$_POST[Pay_Scale]'
,'$_POST[Experience]',
'$_POST[Address]',
'$image')";
if(mysql_query($insert)){
echo "success"; 
}
else{
 echo "not inserted ";	
}
}
?>