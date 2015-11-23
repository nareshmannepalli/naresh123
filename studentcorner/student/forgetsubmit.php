<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);

if(isset($_POST['submit'])){
	
 $sql="select * from `student_details` where rollno='$_POST[rollno]' and stud_phone='$_POST[stud_phone]'"; 
 $query=mysql_query($sql);
 $count=mysql_num_rows($query);
if($count==1){
 $fetch=mysql_fetch_array($query);?>
 <form name='studentforget'  action='forgetupdate.php' method='post'>	
    <input type='hidden' name='stud_id' value="<?php echo $fetch['stud_id']?>"/> 
    <input type='password'name='password' placeholder="Enter New Password "/>
    <input type='submit' name='submit' />
    </form> 
    <?php	
}
else{
	echo "Please enter your details correctly";
}
}
?>