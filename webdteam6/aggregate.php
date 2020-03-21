<?php
$con=mysqli_connect('localhost','root','','attendance');
$classname=$_POST['class'];
$subjectname=$_POST['subject'];
$q="select * from student_attendaance WHERE class='$classname' && subject_id='$subjectname'";
$result=mysqli_query($con,$q) or die("Error in accessing database.".mysqli_error($con));
$num=mysqli_num_rows($result);
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	echo $row['student_id']."  ".$row['total class']."  ".$row['attendance'];
}
mysqli_close($con);
?>