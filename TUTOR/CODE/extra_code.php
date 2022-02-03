<?php
include 'db_config.php';
$course_name=$_POST['course_name'];
$sem=$_POST['sem'];
$stud_name=$_POST['stud_name'];
$hobbies=$_POST['hobbies'];
$ac=$_POST['ac'];

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
    $sql="insert into event_result(course_name,sem,stud_name,hobbies,ac) values('".$course_name."','".$sem."','".$stud_name."','".$hobbies."','".$ac."')";
  
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




