<?php
session_start();
include 'db_config.php';
$dept_name=$_POST['dept_name'];
$course_name=$_POST['course_name'];
$sem=$_POST['sem'];
$sub_code=$_POST['sub_code'];
$sub_name=$_POST['sub_name'];

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
    $sql="insert into subject (dept_name,course_name,sem,sub_code,sub_name) values('".$dept_name."','".$course_name."','".$sem."','".$sub_code."','".$sub_name."')";
  
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




