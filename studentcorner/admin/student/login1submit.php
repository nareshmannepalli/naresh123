<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("test",$con);

if(isset($_POST['update'])){
	$update='update form1 SET 
	
	`email`="'.$_POST['email'].'",
	`password`="'.$_POST['password'].'" where id="'.$_POST['id'].'"';
	if(mysql_query($update)){
	echo "success";
	}
	else{
 	echo "not inserted ";	
	}	
	}


if(isset($_POST['delete'])){
 $ddd='delete from form1 where id="'.$_POST['id'].'"';
 if(mysql_query($ddd)){
echo "success";
}
else{
 echo "not inserted ";	
}	 
}

if(isset($_POST['drop'])){
 $delete='drop TABLE from1';
 if(mysql_query($delete)){
echo "success";
}
else{
 echo "not success";	
}	 
}
if(isset($_POST['truncate'])){
 $del='truncate table from1';
 if(mysql_query($del)){
echo "success";
}
else{
 echo "not success";	
}	 
}

?>