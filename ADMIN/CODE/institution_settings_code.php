<?php
session_start();
include 'db_config.php';
$address=$_POST['address'];
$place=$_POST['place'];
$district=$_POST['district'];
$state=$_POST['state'];
$country=$_POST['country'];
$pin_code=$_POST['pin_code'];
$phone_no=$_POST['phone_no'];
$email_id=$_POST['email_id'];
$affiliation=$_POST['affiliation'];
$institution_type=$_POST['institution_type'];
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
  
 $sql="UPDATE college SET address='".$address."',place='".$place."',district='".$district."',state='".$state."',country='".$country."',pin_code='".$pin_code."',phone_no='".$phone_no."',email_id='".$email_id."',affiliation='".$affiliation."',institution_type='".$institution_type."';";	
}

if($conn->query($sql)=== TRUE)
  {  
  	$ob=array('Msg'=>'SUCCESSFULLY SAVED');
  	echo json_encode($ob);
  }
  else
  {
  	$ob=array('Msg'=>'Entry Fail...!!');
  	$conn->close();
  	echo json_encode($ob);
  }
?>