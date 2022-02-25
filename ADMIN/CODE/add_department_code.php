<?php
session_start();
include 'db_config.php';
$dept_id=$_POST['dept_id'];
$dept_name=$_POST['dept_name'];
//$hod=$_POST['hod'];
$course_count=$_POST['course_count'];
$ob;
$conn=new mysqli($servername,$dbusername,$password1,$dbname);

$sql="select * from department where dept_id='".$dept_id."'";
$result=$conn ->query($sql);
if($result->num_rows > 0)
 {
  $ob = array('Msg'=> 'Department ID  already exist');
  $conn->close();
  echo json_encode($ob);
  return;
}
else
{
    $sql="insert into department (dept_id,dept_name,course_count) values('".$dept_id."','".$dept_name."','".$course_count."')";
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




