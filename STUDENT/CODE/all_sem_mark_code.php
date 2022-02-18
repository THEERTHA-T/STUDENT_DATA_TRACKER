<?php
session_start();
include 'db_config.php';
 $sub_name=$_POST['sub_name'];
$conn=new mysqli($servername,$dbusername,$password1,$dbname);
  if($conn->connect_error)
{
$ob=array('Msg'=>'Connection err');
echo json_encode($ob);
return;
}
else
{
$sql="select * from mark where sub_name='$sub_name' and  reg_no='".$_SESSION['reg_no']."'";
$result=$conn->query($sql);
$return_arr=array();
$row_array=array();

if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {
    $row_array['reg_no']=$row['reg_no'];
    $row_array['int_mark']=$row['int_mark'];
    $row_array['ext_mark']=$row['ext_mark'];
    $row_array['total']=$row['total'];
    array_push($return_arr,$row_array);
  }
}

echo json_encode($return_arr);
}

?>