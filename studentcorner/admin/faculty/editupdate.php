<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
if(isset($_POST['update'])){
$update='update `faculty_details` SET `Name_of_the_Faculty`="'.$_POST['Name_of_the_Faculty'].'",
`Fathers_Name`="'.$_POST['Fathers_Name'].'",
`Dob`="'.$_POST['Dob'].'",
`Phone_Number`="'.$_POST['Phone_Number'].'",
`Email_ID`="'.$_POST['Email_ID'].'",
`User_name`="'.$_POST['User_name'].'",
`password`="'.$_POST['password'].'",
`Gender`="'.$_POST['Gender'].'",
`Deportement`="'.$_POST['Deportement'].'",
`Designation`="'.$_POST['Designation'].'",
`Highest_Qualification`="'.$_POST['Highest_Qualification'].'",
`Doj`="'.$_POST['Doj'].'",
`Pay_Scale`="'.$_POST['Pay_Scale'].'",
`Experience`="'.$_POST['Experience'].'",
`Address`="'.$_POST['Address'].'"  where id="'.$_SESSION['a'].'"';
	if(mysql_query($update)){
	echo "success";
	}
	else{
 	echo "not inserted ";	
	}	
}