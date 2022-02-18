<?php
include 'db_config.php';
$conn=new mysqli($servername,$dbusername,$password1,$dbname);
$course_name=$_POST['course_name'];
//echo $dept_name;
$sem="select distinct sem from subject where course_name='$course_name';";
$s_query=mysqli_query($conn,$sem);
$output='<option value=""> select semester </option>';
while($sem_row=mysqli_fetch_assoc($s_query)){
	$output.='<option value="'.$sem_row['sem'].'">'.$sem_row['sem']. '</option>';
}
echo $output;
?>