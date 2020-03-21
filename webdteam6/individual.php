<?php
$stud_id=$_POST['student_id'];
$con=mysqli_connect('localhost','root','','attendance');
$q="select * from student_attendaance WHERE student_id = $stud_id";
$result=mysqli_query($con,$q) or die("Error in accessing database.".mysqli_error($con));
$num=mysqli_num_rows($result);
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	echo $row['student_id']."  ".$row['total class']."  ".$row['attendance'];
}
mysqli_close($con);
?>