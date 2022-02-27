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
$sql="select * from int_mark";
$result=$conn->query($sql);
$return_arr=array();
$row_array=array();

if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {
    $row_array['reg_no']=$row['reg_no'];
        $row_array['sub_name']=$row['sub_name'];
    $row_array['attendance']=$row['attendance'];
    $row_array['assignment']=$row['assignment'];
    $row_array['series1']=$row['series1'];
      $row_array['series2']=$row['series2'];
    $row_array['total']=$row['total'];
    array_push($return_arr,$row_array);
  }
}

echo json_encode($return_arr);
}

?>