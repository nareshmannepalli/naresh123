<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);

if(isset($_POST['submit'])){
	
 $sql="select * from `faculty_details` where `User_name`='$_POST[User_name]' and `Phone_Number`='$_POST[Phone_Number]'"; 
 $query=mysql_query($sql);
 $count=mysql_num_rows($query);
if($count==1){
 $fetch=mysql_fetch_array($query);?>
 <form name='facultyforget'  action='forgetupdate.php' method='post'>	
    <input type='hidden' name='id' value="<?php echo $fetch['id']?>"/> 
    <input type='password'name='password' placeholder="Enter New password "/>
    <input type='submit' name='submit' />
    </form> 
    <?php	
}
else{
	echo "Please enter your details correctly";
}
}
?>