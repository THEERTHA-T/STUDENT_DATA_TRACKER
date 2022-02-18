<?php
include 'db_config.php';
$conn=new mysqli($servername,$dbusername,$password1,$dbname);
$sem=$_POST['sem'];
//echo $dept_name;
$sub_name="select distinct sub_name from subject where sem=$sem;";
$s_query=mysqli_query($conn,$sub_name);
$output='<option value=""> select subject </option>';
while($sub_row=mysqli_fetch_assoc($s_query)){
	$output.='<option value="'.$sub_row['sub_name'].'">'.$sub_row['sub_name']. '</option>';
}
echo $output;
?>