<?php
session_start();
include 'db_config.php';
$dept_name=$_POST['dept_name'];
$hod=$_POST['hod'];
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
  //  $sql="insert into department(hod) values('".$hod."')  where dept_name='".$dept_name."'";
$sql="UPDATE department SET hod='".$hod."' where dept_name='".$dept_name."'";
   // $conn->query($sql);
  
  if($conn->query($sql)=== TRUE)
  {
  
    $sql1="UPDATE users SET status='HOD' where user_name='".$hod."'"; 
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




