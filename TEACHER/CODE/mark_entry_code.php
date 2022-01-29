<?php
include 'db_config.php';
$dept_name=$_POST['dept_name'];
$course_name=$_POST['course_name'];
$sem=$_POST['sem'];
$reg_no=$_POST['reg_no'];
$sub_name=$_POST['sub_name'];
$int_mark=$_POST['int_mark'];
$ext_mark=$_POST['ext_mark'];
$total=$_POST['total'];
$ob;
$conn=new mysqli($servername,$dbusername,$password1,$dbname);
if($conn->connect_error)
{
	$ob=array('Msg'=> 'Connection err');
	echo json_encode($ob);
	return;
}
else
{
    $sql="insert into mark values('".$dept_name."','".$course_name."','".$reg_no."','".$sem."','".$sub_name."','".$int_mark."','".$ext_mark."','".$total."')";
  
  if($conn->query($sql)=== TRUE)
  {
  
    $ob=array('Msg'=>'SUCCESSFULLY ADDED');
  	echo json_encode($ob);
   
  }
  else
  {
  	$ob=array('Msg'=>'Entry Fail...!!');
  	$conn->close();
  	echo json_encode($ob);
  }
 }
?>




