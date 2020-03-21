<?php
$con=mysqli_connect('localhost','root','','attendance');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic informations -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Site informations -->
	<title>C-Attendence</title>	
	<!-- Stylesheets -->
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all">

</head>

<body style="background-color: #88c8bd;">

	<div class="nav" style="background-color: black">
		<div class="container-fluid" style="color: white; padding-top: 15px;"><p align="center" style="font-size: 30px"><b style="color: tomato;">C</b>-Attendence</div>
	</div>
	<div class="container">
	<tr align="center">
       <td colspan ="6"><h2>Students Information</h2></td>
       </tr>
       <tr align="center" bgcolor="skyblue">
       <th>ID</th>
       <th>Name</th>
       <th>Class</th>
       <th>Total Class</th>
       <th>Attendance</th>		
     </tr> 
     <br/>
	<!-- ECHO THE TABLE HERE -->
	<?php
$classname=$_POST['class'];
$subjectname=$_POST['subject'];
$q="select * from student_attendaance WHERE class='$classname' && subject_id='$subjectname'";
$result=mysqli_query($con,$q) or die("Error in accessing database.".mysqli_error($con));
$num=mysqli_num_rows($result);
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	$student_id=$row['student_id'];
	$student_name=$row['name'];
	$student_class=$row['class'];
	$student_totalclass=$row['total class'];
	$student_attendance=$row['attendance'];
	?>
		</div>
	<div class="container">
		<table>
			<tr>
				<td style="font-size:18px; color: white;">
					<?php $student_name;?>
				</td>
				<td style="font-size:18px; color: white;">
					<?php $student_class;?>
				</td>
				<td style="font-size:18px; color: white;">
					<?php $student_attendance;?>
				</td>
			</tr>
		</table>
	</div>
    <br/>

<?php
}
mysqli_close($con);
?>
	
	
	
	
	
	
	</div>
	
	
	<!-- Scripts postload -->
	<script src="js/jquery-3.2.1.js" type="text/javascript"></script>
	<script src="js/popper.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>
