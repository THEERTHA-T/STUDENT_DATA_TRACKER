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
$sql="select * from student_academic s1 join student_personal s2 on s1.user_name=s2.user_name; ";
$result=$conn ->query($sql);
if($result->num_rows > 0)
 {

 while($row=$result->fetch_assoc())
 {
 	
     if($row["user_type"]=="Student")
     {

      session_start();
  $_SESSION["fname"]=$row["fname"];
  $_SESSION["lname"]=$row["lname"];
  $_SESSION["user_name"]=$row["user_name"];
  $_SESSION["user_type"]=$row["user_type"];
  $_SESSION["admn_no"]=$row["admn_no"];
  $_SESSION["admn_type"]=$row["admn_type"];
   $_SESSION["admn_date"]=$row["admn_date"];
  $_SESSION["dept_name"]=$row["dept_name"];
  $_SESSION["course_name"]=$row["course_name"];
   $_SESSION["sem"]=$row["sem"];
   $_SESSION["tutor"]=$row["tutor"];
   $_SESSION["phone_no"]=$row["phone_no"];
   $_SESSION["email_id"]=$row["email_id"];
      $_SESSION["place"]=$row["place"];

      $_SESSION["house_name"]=$row["house_name"];
  $_SESSION["pin"]=$row["pin"];
  $_SESSION["district"]=$row["district"];
  $_SESSION["state"]=$row["state"];
   $_SESSION["gender"]=$row["gender"];
  $_SESSION["dob"]=$row["dob"];
  $_SESSION["age"]=$row["age"];
   $_SESSION["password"]=$row["password"];


   $_SESSION["reg_no"]=$row["reg_no"];
   $ob=array('Msg'=> 1);
  echo json_encode($ob);
  return;
     }
 }
  }
 else
 {
 $ob = array('Msg'=> 'student does not exist');
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
