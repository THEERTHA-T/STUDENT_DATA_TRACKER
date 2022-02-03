<?php 
include 'db_config.php';
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$ob;
$conn=new mysqli($servername,$dbusername,$password1,$dbname);
if($conn->connect_error)
{
	$ob=array('Msg'=> 'Connection err');
	echo json_encode($ob);
	return;
}
$sql="select * from users where user_name='".$user_name."' and password='".$password."' ";
$result=$conn ->query($sql);
if($result->num_rows > 0)
 {

 while($row=$result->fetch_assoc())
 {
 	if($row["user_type"]=="OfficeAdmin")
 	{
 		session_start();
 	 $_SESSION["user_name"]=$row["user_name"];
 	 $_SESSION["user_type"]=$row["user_type"];
 	 $_SESSION["first_name"]=$row["first_name"];
 	 $_SESSION["last_name"]=$row["last_name"];
 	 $_SESSION["college_name"]=$row["college_name"];
 	 $_SESSION["email_id"]=$row["email_id"];
 	 $_SESSION["phone_no"]=$row["phone_no"];
 	 $_SESSION["password"]=$row["password"];
   $_SESSION["qualification"]=$row["qualification"];
   $_SESSION["dob"]=$row["dob"];
   $_SESSION["place"]=$row["place"];


 	 $ob=array('Msg'=> 1);
	echo json_encode($ob);
	return;
 	}
   else if($row["user_type"]=="Teacher" && $row["status"]=="HOD")
     {
      session_start();
   $_SESSION["user_name"]=$row["user_name"];
   $_SESSION["user_type"]=$row["user_type"];
   $_SESSION["first_name"]=$row["first_name"];
   $_SESSION["last_name"]=$row["last_name"];
   $_SESSION["college_name"]=$row["college_name"];
   $_SESSION["email_id"]=$row["email_id"];
   $_SESSION["phone_no"]=$row["phone_no"];
   $_SESSION["password"]=$row["password"];
   $_SESSION["qualification"]=$row["qualification"];
   $_SESSION["place"]=$row["place"];
   $_SESSION["dob"]=$row["dob"];
   $_SESSION["dept_name"]=$row["dept_name"];
      $_SESSION["status"]=$row["status"];

   $ob=array('Msg'=> 2);
  echo json_encode($ob);
  return;
     }
 	 
      else if($row["user_type"]=="Principal")
     {
     	session_start();
 	 $_SESSION["user_name"]=$row["user_name"];
 	 $_SESSION["user_type"]=$row["user_type"];
 	 $_SESSION["first_name"]=$row["first_name"];
 	 $_SESSION["last_name"]=$row["last_name"];
 	 $_SESSION["college_name"]=$row["college_name"];
 	 $_SESSION["email_id"]=$row["email_id"];
 	 $_SESSION["phone_no"]=$row["phone_no"];
 	 $_SESSION["password"]=$row["password"];
 	 $_SESSION["qualification"]=$row["qualification"];
 	 $_SESSION["place"]=$row["place"];
 	 $_SESSION["dob"]=$row["dob"];
   $_SESSION["dept_name"]=$row["dept_name"];
 	 $ob=array('Msg'=> 3);
	echo json_encode($ob);
	return;
     }
           else if($row["user_type"]=="Teacher" && $row["status"]=="Tutor")
     {
      session_start();
   $_SESSION["user_name"]=$row["user_name"];
   $_SESSION["user_type"]=$row["user_type"];
   $_SESSION["first_name"]=$row["first_name"];
   $_SESSION["last_name"]=$row["last_name"];
   $_SESSION["college_name"]=$row["college_name"];
   $_SESSION["email_id"]=$row["email_id"];
   $_SESSION["phone_no"]=$row["phone_no"];
   $_SESSION["password"]=$row["password"];
   $_SESSION["qualification"]=$row["qualification"];
   $_SESSION["place"]=$row["place"];
   $_SESSION["dob"]=$row["dob"];
   $_SESSION["dept_name"]=$row["dept_name"];
      $_SESSION["status"]=$row["status"];

   $ob=array('Msg'=> 4);
  echo json_encode($ob);
  return;
     }
     else if($row["user_type"]=="Teacher")
     {
      session_start();
   $_SESSION["user_name"]=$row["user_name"];
   $_SESSION["user_type"]=$row["user_type"];
   $_SESSION["first_name"]=$row["first_name"];
   $_SESSION["last_name"]=$row["last_name"];
   $_SESSION["college_name"]=$row["college_name"];
   $_SESSION["email_id"]=$row["email_id"];
   $_SESSION["phone_no"]=$row["phone_no"];
   $_SESSION["password"]=$row["password"];
   $_SESSION["qualification"]=$row["qualification"];
   $_SESSION["place"]=$row["place"];
   $_SESSION["dob"]=$row["dob"];
      $_SESSION["dept_name"]=$row["dept_name"];
            $_SESSION["status"]=$row["status"];

   $ob=array('Msg'=> 5);
  echo json_encode($ob);
  return;
     }
     
 }
  }
 else
 {
 $ob = array('Msg'=> 'Admin does not exist');
 $conn->close();
 goto Bottum;
 echo json_encode($ob);
 return;
 }
 Bottum:
 ?>
   <script type="text/javascript">
   	var javascriptalert=<?php echo json_encode($ob); ?>;
   	alert(javascriptalert);
   </script>
