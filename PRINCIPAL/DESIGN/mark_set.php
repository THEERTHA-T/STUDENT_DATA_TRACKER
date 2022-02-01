<?php
include 'db_config.php';
$conn=new mysqli($servername,$dbusername,$password1,$dbname);
$sub_name=$_POST['sub_name'];
//echo $dept_name;
$mark="select * from mark where sub_name='$sub_name';";
$c_query=mysqli_query($conn,$mark);
$output='<table class="table">
                <table class="table table-striped" border="1" style="width:70%">                  
            <tr >
            <th>Register Number </th> 
             <th> Subject </th> 
            <th>Internal mark</th>
             <th>External mark  </th> 
            <th>Total mark </th>                
  
                  
                </tr>';
while($course_row=mysqli_fetch_assoc($c_query)){
  $output.='<option value="'.$course_row['reg_no'].'">'.$course_row['reg_no']. '</option>';
}
echo $output;
?>
