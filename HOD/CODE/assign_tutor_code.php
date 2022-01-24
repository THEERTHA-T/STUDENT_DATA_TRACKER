<?php
session_start();
include 'db_config.php';
$dept_name=$_POST['dept_name'];
$course_name=$_POST['course_name'];
$sem=$_POST['sem'];
$tutor_name=$_POST['tutor_name'];
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
    $sql="insert into tutor (dept_name,course_name,sem,tutor_name) values('".$dept_name."','".$course_name."','".$sem."','".$tutor_name."')";
   // $conn->query($sql);
  
  if($conn->query($sql)=== TRUE)
  {
    $sql1="UPDATE users SET status='Tutor' where user_name='".$tutor_name."'"; 
    $conn->query($sql1); 
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







