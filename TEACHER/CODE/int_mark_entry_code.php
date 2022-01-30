<?php
include 'db_config.php';
$dept_name=$_POST['dept_name'];
$course_name=$_POST['course_name'];
$sem=$_POST['sem'];
$reg_no=$_POST['reg_no'];
$sub_name=$_POST['sub_name'];
$attendance=$_POST['attendance'];
$series1=$_POST['series1'];
$series2=$_POST['series2'];
$tot_series=$_POST['tot_series'];
$assignment=$_POST['assignment'];
$total=$_POST['total'];
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
    $sql="insert into int_mark values('".$dept_name."','".$course_name."','".$sem."','".$reg_no."','".$sub_name."','".$attendance."','".$series1."','".$series2."','".$tot_series."','".$assignment."','".$total."')";
  
  if($conn->query($sql)=== TRUE)
  {
  
    $ob=array('Msg'=>'SUCCESSFULLY RECORDED');
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




