<?php
include 'db_config.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$user_name1=$_POST['user_name'];
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
$place=$_POST['place'];
$house_name=$_POST['house_name'];
$pin=$_POST['pin'];
$district=$_POST['district'];
$state=$_POST['state'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$password=$_POST['password'];
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
	$sql="UPDATE student_academic SET fname='".$fname."',lname='".$lname."',user_name='".$user_name1."',user_type='".$user_type."',admn_no='".$admn_no."',reg_no='".$reg_no."',admn_type='".$admn_type."',admn_date='".$admn_date."',dept_name='".$dept_name."',course_name='".$course_name."',sem='".$sem."',tutor='".$tutor."' where user_name='".$user_name1."';";

  $sql1="UPDATE student_personal SET  user_name='".$user_name1."',phone_no='".$phone_no."',email_id='".$email_id."',place='".$place."',house_name='".$house_name."',pin='".$pin."',district='".$district."',state='".$state."',gender='".$gender."',dob='".$dob."',age='".$age."' where user_name='".$user_name1."';";

  $sql2="UPDATE users SET first_name='".$fname."',last_name='".$lname."',user_name='".$user_name1."',user_type='".$user_type."',dob='".$dob."',place='".$place."',phone_no='".$phone_no."',email_id='".$email_id."',dept_name='".$dept_name."' where user_name='".$user_name1."';  ";
}
else
{
  $sql="UPDATE student_academic SET fname='".$fname."',lname='".$lname."',user_name='".$user_name1."',user_type='".$user_type."',admn_no='".$admn_no."',reg_no='".$reg_no."',admn_type='".$admn_type."',admn_date='".$admn_date."',dept_name='".$dept_name."',course_name='".$course_name."',sem='".$sem."',tutor='".$tutor."' where user_name='".$user_name1."';";

  $sql1="UPDATE student_personal SET  user_name='".$user_name1."',phone_no='".$phone_no."',email_id='".$email_id."',place='".$place."',house_name='".$house_name."',pin='".$pin."',district='".$district."',state='".$state."',gender='".$gender."',dob='".$dob."',age='".$age."',password='".$password."' where user_name='".$user_name1."';";

  $sql2="UPDATE users SET first_name='".$fname."',last_name='".$lname."',user_name='".$user_name1."',user_type='".$user_type."',dob='".$dob."',place='".$place."',phone_no='".$phone_no."',email_id='".$email_id."',dept_name='".$dept_name."',password='".$password."' where user_name='".$user_name1."'; ";
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