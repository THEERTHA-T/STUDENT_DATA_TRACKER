<?php
include 'db_config.php';
    $dept_name=$_POST['dept_name'];
	$course_name=$_POST['course_name'];
	$sem=$_POST['sem'];
	$sub_name=$_POST['sub_name'];
	
// 	$ob=array('Msg'=>$clg_name);
// echo json_encode($ob);
// return;
	$conn=new mysqli($servername,$dbusername,$password1,$dbname);
	if($conn->connect_error)
{
$ob=array('Msg'=>'Connection err');
echo json_encode($ob);
return;
}
$sql="select count(series1) as s_1 from int_mark where sub_name='".$sub_name."'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		
		 $tot_1=$row['s_1'];
	}
}
$sql="select count(series2) as s_2 from int_mark where sub_name='".$sub_name."'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		
		 $tot_2=$row['s_2'];
	}
}

$sql="select count(total) as t_1 from int_mark where sub_name='".$sub_name."' and total>=18";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		
		 $tot_2=$row['t_1'];
		 $pass=($tot_2/$tot_1)*100;
	}
}

$sql="select count(total) as t_1 from int_mark where sub_name='".$sub_name."' and total<18";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		
		 $fail=$row['t_1'];
		}
		 
}

$obb=array('tot_1'=>$tot_1,'tot_2'=>$tot_2,'pass'=>$pass,'fail'=>$fail);
echo json_encode($obb);

?>