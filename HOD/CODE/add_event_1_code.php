<?php
session_start();
include 'db_config.php';
$event_id=$_POST['event_id'];
$event_name=$_POST['event_name'];
$event_num=$_POST['event_num'];
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
    $sql="insert into event (event_id,event_name,event_num) values('".$event_id."','".$event_name."','".$event_num."')";
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




