<?php
include 'db_config.php';
$conn=new mysqli($servername,$dbusername,$password1,$dbname);
$dept_name=$_POST['dept_name'];
$hod="select * from users where dept_name='$dept_name' and user_type='Teacher';";
$c_query=mysqli_query($conn,$hod);
$output='<option value=""> select HOD </option>';
while($hod_row=mysqli_fetch_assoc($c_query)){
	$output.='<option value="'.$hod_row['user_name'].'">'.$hod_row['user_name']. '</option>';
}
echo $output;
?>

