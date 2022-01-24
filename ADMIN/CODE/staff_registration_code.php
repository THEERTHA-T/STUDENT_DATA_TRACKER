<?php
include 'db_config.php';
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$user_type=$_POST['user_type'];
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$phone_no=$_POST['phone_no'];
$email_id=$_POST['email_id'];
$college_name=$_POST['college_name'];
$qualification=$_POST['qualification'];
$dob=$_POST['dob'];
$place=$_POST['place'];
$dept_name=$_POST['dept_name'];

$ob;
$conn=new mysqli($servername,$dbusername,$password1,$dbname);
if($conn->connect_error)
{
  $ob=array('Msg'=> 'Connection err');
  echo json_encode($ob);
  return;
}
$sql="select * from users where user_name='".$user_name."'";
$result=$conn ->query($sql);
if($result->num_rows > 0)
 {
  $ob = array('Msg'=> 'User already exist');
  $conn->close();
  echo json_encode($ob);
  return;
 } 
 else
 {
  $sql="insert into users (first_name,last_name,user_name,user_type,password,phone_no,email_id,college_name,qualification,dob,place,dept_name) values('".$first_name."','".$last_name."','".$user_name."','".$user_type."','".$password."','".$phone_no."','".$email_id."','".$college_name."','".$qualification."','".$dob."','".$place."','".$dept_name."')";
  
  if($conn->query($sql)=== TRUE)
  {
  
    $ob=array('Msg'=>'SUCCESSFULLY REGISTERED');
    echo json_encode($ob);
    return;
  }
  else
  {
    $ob=array('Msg'=>'Entry Fail...!!');
    $conn->close();
    echo json_encode($ob);
  }
 }

?>




