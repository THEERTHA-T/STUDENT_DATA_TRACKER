<?php
session_start();
include 'db_config.php';
$dept_name=$_POST['dept_name'];
$course_name=$_POST['course_name'];
$course_dur=$_POST['course_dur'];
$num_sem=$_POST['num_sem'];
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
    $sql="insert into course (dept_name,course_name,course_dur,num_sem) values('".$dept_name."','".$course_name."','".$course_dur."','".$num_sem."')";
   // $conn->query($sql);
  
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




