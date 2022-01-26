<?php
include 'db_config.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$user_name=$_POST['user_name'];
$user_type=$_POST['user_type'];
$admn_no=$_POST['admn_no'];
$reg_no=$_POST['reg_no'];
$admn_type=$_POST['admn_type'];
$admn_date=$_POST['admn_date'];
$dept_name=$_POST['dept_name'];
$course_name=$_POST['course_name'];
$sem=$_POST['sem'];
$tutor=$_POST['tutor'];

$phone_no=$_POST['phone_no'];
$email_id=$_POST['email_id'];
$loc=$_POST['loc'];
$place=$_POST['place'];
$house_name=$_POST['house_name'];
$pin=$_POST['pin'];
$district=$_POST['district'];
$state=$_POST['state'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

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
  $ob = array('Msg'=> 'Student already exist');
  $conn->close();
  echo json_encode($ob);
  return;
 } 
 else
 {
  $sql="insert into student_academic (fname,lname,user_name,user_type,admn_no,reg_no,admn_type,admn_date,dept_name,course_name,sem,tutor) values('".$fname."','".$lname."','".$user_name."','".$user_type."','".$admn_no."','".$reg_no."','".$admn_type."','".$admn_date."','".$dept_name."','".$course_name."','".$sem."','".$tutor."')";

   $sql1="insert into student_personal (user_name,phone_no,email_id,loc,place,house_name,pin,district,state,gender,dob,age,password) values('".$user_name."','".$phone_no."','".$email_id."','".$loc."','".$place."','".$house_name."','".$pin."','".$district."','".$state."','".$gender."','".$dob."','".$age."','".$password."')";

   $sql2="insert into users(first_name,last_name,user_name,user_type,dob,place,password,phone_no,email_id,dept_name)values('".$fname."','".$lname."','".$user_name."','".$user_type."','".$dob."','".$place."','".$password."','".$phone_no."','".$email_id."','".$dept_name."')";
  if($conn->query($sql)=== TRUE && $conn->query($sql1) ===TRUE && $conn->query($sql2)===TRUE) 
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




