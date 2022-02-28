<?php
include 'db_config.php';
 //$sub_name=$_POST['sub_name'];
$conn=new mysqli($servername,$dbusername,$password1,$dbname);
  if($conn->connect_error)
{
$ob=array('Msg'=>'Connection err');
echo json_encode($ob);
return;
}
else
{
$sql="select student_academic.reg_no,student_academic.user_name,student_academic.admn_no,student_academic.admn_type,student_academic.admn_date,student_personal.email_id,student_personal.phone_no,student_personal.dob,student_personal.place from student_academic inner join student_personal on student_academic.user_name=student_personal.user_name";
$result=$conn->query($sql);
$return_arr=array();
$row_array=array();

if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {
    $row_array['reg_no']=$row['reg_no'];
        $row_array['user_name']=$row['user_name'];
    $row_array['admn_no']=$row['admn_no'];
    $row_array['admn_type']=$row['admn_type'];
    $row_array['admn_date']=$row['admn_date'];
     $row_array['email_id']=$row['email_id'];
    $row_array['phone_no']=$row['phone_no'];
    $row_array['dob']=$row['dob'];
        $row_array['place']=$row['place'];
    array_push($return_arr,$row_array);
  }
}

echo json_encode($return_arr);
}

?>