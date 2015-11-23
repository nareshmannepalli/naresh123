<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
if(isset($_POST['submit'])){

$image=$_FILES['stud_photo']['name'];
echo  $insert="insert into `student_details`(stud_name,stud_father_name,rollno,current_sem,sec_id,section,Address,gender,dept_id,course_id,emailid,password,parent_phone,stud_phone,dob,doj,stud_photo,status,regulation)
values('$_POST[stud_name]',
'$_POST[stud_father_name]',
'$_POST[rollno]','$_POST[current_sem]','$_POST[sec_id]','$_POST[section]','$_POST[Address]','$_POST[gender]','$_POST[dept_id]','$_POST[course_id]','$_POST[emailid]','$_POST[password]','$_POST[parent_phone]','$_POST[stud_phone]','$_POST[dob]','$_POST[doj]','$image','$_POST[status]','$_POST[regulation]')";
if(mysql_query($insert)){
echo "success"; 
}
else{
 echo "not inserted ";	
}
}
?>