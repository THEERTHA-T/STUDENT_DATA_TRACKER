<?php
include 'db_config.php';
$conn=new mysqli($servername,$dbusername,$password1,$dbname);
$dept_name=$_POST['dept_name'];
//echo $dept_name;
$course="select * from course where dept_name='$dept_name';";
$c_query=mysqli_query($conn,$course);
$output='<option value=""> select course </option>';
while($course_row=mysqli_fetch_assoc($c_query)){
	$output.='<option value="'.$course_row['course_name'].'">'.$course_row['course_name']. '</option>';
}
echo $output;
?>

