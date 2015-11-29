<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
$sql="select faculty_details.*,map_table.* from faculty_details INNER JOIN map_table ON faculty_details.Name_of_the_Faculty=map_table.Name_of_the_Faculty where id='$_SESSION[id]'";
$query=mysql_query($sql);
$fetch=mysql_fetch_array($query);
$sq="select * from student_details where dept_id='$fetch[Deportement]' and section='$fetch[section]'";
$qu=mysql_query($sq);

?>
<html>
<body style="background:url(../../faculty/images/6907740-flower-blue.jpg)">

<table style="margin-left:20px; border:1px solid #000" >	

<tr>
<td>Deportement :</td>
<td><?php echo $fetch['Deportement']?></td>
</tr>
<tr>
<td>section :</td>
<td><?php echo $fetch['section']?></td>
</tr>
<tr>
<td>subject :</td>
<td><?php echo $fetch['subject']?></td>
</tr>



</table>


<form name="" method="post" action="facultyattendencevalues.php">
<?php
while($fet=mysql_fetch_array($qu)){

?>
<input type="checkbox" name="present[]" value="<?php echo $fet['rollno']?>"><?php echo $fet['rollno']?>
<?php 
}
?>
<input type="hidden" name="Deportement" value="<?php echo $fetch['Deportement']?>">
<input type="hidden" name="section" value="<?php echo $fetch['section']?>">
<input type="hidden" name="subject" value="<?php echo $fetch['subject']?>">
<input type="submit" name="submit" value="submit">
</form>


</body>
</html>