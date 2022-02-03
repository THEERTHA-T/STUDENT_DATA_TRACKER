<?php
include 'db_config.php';
$course_name=$_POST['course_name'];
$sem=$_POST['sem'];
$event_name=$_POST['event_name'];
$stud_name=$_POST['stud_name'];
$event_date=$_POST['event_date'];
$position=$_POST['position'];

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
    $sql="insert into event_result(course_name,sem,event_name,stud_name,event_date,position) values('".$course_name."','".$sem."','".$event_name."','".$stud_name."','".$event_date."','".$position."')";
  
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




