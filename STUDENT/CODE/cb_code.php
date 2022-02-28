<?php
include 'db_config.php';
$dept_name=$_POST['dept_name'];
$course_name=$_POST['course_name'];
$user_name=$_POST['user_name'];
$matter=$_POST['matter'];
$date1=$_POST['date1'];

$ob;
$conn=new mysqli($servername,$dbusername,$password1,$dbname);
if($conn->connect_error)
{
  $ob=array('Msg'=> 'Connection err');
  echo json_encode($ob);
  return;
}

  $sql="INSERT INTO complaint_box values('".$dept_name."','".$course_name."','".$user_name."','".$matter."','".$date1."')";

if($conn->query($sql)=== TRUE)
  {
  
    $ob=array('Msg'=>'ADDED');
    echo json_encode($ob);

  }
  else
  {
    $ob=array('Msg'=>'Entry Fail...!!');
    $conn->close();
    echo json_encode($ob);
  }
?>