<?php
include 'db_config.php';
$user_name1=$_POST['user_name'];
$user_type=$_POST['user_type'];
$first_name=$_POST['first_name'];
$password=$_POST['password'];
$last_name=$_POST['last_name'];
$dob=$_POST['dob'];
$qualification=$_POST['qualification'];
$place=$_POST['place'];
$email_id=$_POST['email_id'];
$phone_no=$_POST['phone_no'];
$college_name=$_POST['college_name'];
$dept_name=$_POST['dept_name'];
$status=$_POST['status'];
$ob;
$conn=new mysqli($servername,$dbusername,$password1,$dbname);
if($conn->connect_error)
{
	$ob=array('Msg'=> 'Connection err');
	echo json_encode($ob);
	return;
}
if($password=="")
{
	$sql="UPDATE users SET first_name='".$first_name."',last_name='".$last_name."',user_name='".$user_name1."',user_type='".$user_type."',qualification='".$qualification."',dob='".$dob."',place='".$place."',email_id='".$email_id."',phone_no='".$phone_no."',college_name='".$college_name."',dept_name='".$dept_name."',status='".$status."' where user_name='".$user_name1."';";
}
else
{
$sql="UPDATE users SET first_name='".$first_name."',last_name='".$last_name."',user_name='".$user_name1."',user_type='".$user_type."',qualification='".$qualification."',dob='".$dob."',password='".$password."',place='".$place."',email_id='".$email_id."',phone_no='".$phone_no."',college_name='".$college_name."' ,dept_name='".$dept_name."',status='".$status."'where user_name='".$user_name1."';";	
}
if($conn->query($sql)=== TRUE)
  {
  
  	$ob=array('Msg'=>'PROFILE UPDATED');
  	echo json_encode($ob);

  }
  else
  {
  	$ob=array('Msg'=>'Entry Fail...!!');
  	$conn->close();
  	echo json_encode($ob);
  }
?>