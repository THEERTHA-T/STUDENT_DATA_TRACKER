<?php
include 'db_config.php';
$user_name=$_POST['user_name'];
$user_type=$_POST['user_type'];
$sub=$_POST['sub'];
$date1=$_POST['date1'];
$msg=$_POST['msg'];

$ob;
$conn=new mysqli($servername,$dbusername,$password1,$dbname);
if($conn->connect_error)
{
  $ob=array('Msg'=> 'Connection err');
  echo json_encode($ob);
  return;
}

  $sql="INSERT INTO notifications(user_name,user_type,sub,date1,msg) values('".$user_name."','".$user_type."','".$sub."','".$date1."','".$msg."')";

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