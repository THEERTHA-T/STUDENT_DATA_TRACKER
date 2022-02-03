
<?php
include 'db_config.php';
$conn=new mysqli($servername,$dbusername,$password1,$dbname);
if($_POST['type']==""){
$sql="select  distinct sem from subject";

$query=mysqli_query($conn,$sql)or die("unsuccessful");

$str="";





while($row=mysqli_fetch_assoc($query))
{
		$str.="<option>{$row['sem']}</option>";
}
}
else if($_POST['type']=="sub_name"){
$sql="select  * from subject where sem={$_POST['id']}";

$query=mysqli_query($conn,$sql)or die("unsuccessful");

$str="";

while($row=mysqli_fetch_assoc($query))
{
		$str.="<option>{$row['sub_name']}</option>";
}	
}

echo $str;

?>