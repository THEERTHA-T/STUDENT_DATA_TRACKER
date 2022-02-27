<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	     <script src="JQuery/jquery3_4_1.min.js"></script>
            <script >
       
</script>
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>
			  	<a class="brand" href="index.html">
			  		Student Data Tracking System
			  	</a>
				</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->
	
   <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <div class="sidebar">

                       <ul class="widget widget-menu unstyled">

                            <li class="active"><a href="dashboard.php"><i class="menu-icon icon-dashboard"></i>Home
                            </a></li>
                             <li><a href="edit_profile.php"><i class="menu-icon icon-bullhorn"></i>Edit Profile</a>
                            </li>
                            <li><a href="view_mark.php"><i class="menu-icon icon-bullhorn"></i>Mark view</a>
                            </li>
                                <li><a href="view_not.php"><i class="menu-icon icon-bullhorn"></i>View Notifications</a>
                            </li>
                          
                            <li><a href="view_report.php"><i class="menu-icon icon-book"></i> view Report</a></li>
<li><a href="all_sem_mark.php"><i class="menu-icon icon-book"></i> All Sem Mark</a></li>
                   
                               
                                    </li>
                                                                    </li>
                                
                               <li><a href="logout.php"><i class="menu-icon icon-bullhorn"></i>Logout</a>
                            </li>
                            </ul>
                    </div>
                    <!--/.sidebar-->
                </div>
				<div class="span7">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<H1>	<font color="green">							
								VIEW MARK</font> </H1>
							</div>
							<div class="module-body">
								<div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                  <?php
include 'db_config.php';

$conn=new mysqli($servername,$dbusername,$password1,$dbname);

$sql="select * from mark where reg_no='".$_SESSION['reg_no']."' order by sem ";

  $result=$conn->query($sql);?>
                <table class="table">
                <table border="2" class="table table-striped">
                <thead>
                  
                  
            <tr>
            <!-- <th>Username </th> 
                   <th>User_id</th>
                   <th>Reg No </th> -->
                   <th>Subject</th>
                   <th>Sem</th>
                   <th>Internal Mark</th>
                   <th>Extermal mark</th>
                   <th>Total</th>

                </tr>
                 </thead>
<?php
                  
   if($result->num_rows>0)
   {
     while($row=$result->fetch_assoc())
     {
                 
                  echo "<tbody>";
                  echo "<tr>";
                //  echo "<td>".$row['uname']." </td>";
                  // echo "<td>".$row['user_id']."</td>";
                   //echo "<td>".$row['reg_no']."</td>";
                    echo "<td>".$row['sub_name']."</td>";
                    echo "<td>".$row['sem']."</td>";
                     echo "<td>".$row['int_mark']."</td>";
                   echo "<td>".$row['ext_mark']."</td>";
                   echo "<td>".$row['total']."</td>";
                
                  echo "</tr>";
                echo "</tbody>";
                }
              }
              
                    ?>               
                </table>

                <br />
                <!-- <hr /> -->
                <br />

                
           
              
                    
                   

              </table>            </div>




          <div class="content">
            <div class="module">
              <div class="module-head">
                <H1>  <font color="green">              
                <br><br><br>VIEW INTERNAL MARK</font> </H1>
              </div>
              <div class="module-body">
                <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                  <?php
include 'db_config.php';

$conn=new mysqli($servername,$dbusername,$password1,$dbname);

$sql="select * from int_mark where reg_no='".$_SESSION['reg_no']."' order by sem";

  $result=$conn->query($sql);?>
                <table class="table">
                <table border="2" class="table table-striped">
                <thead>
                  
                  
            <tr>
            <!-- <th>Username </th> 
                   <th>User_id</th>
                   <th>Reg No </th> -->
                   <th>Subject</th>
                   <th>Sem</th>
                   <th>Attendance</th>
                   <th>Series 1 </th>
                   <th>Series 2 </th>
                    <th>Assignment </th>
                   <th>Total</th>

                </tr>
                 </thead>
<?php
                  
   if($result->num_rows>0)
   {
     while($row=$result->fetch_assoc())
     {
                 
                  echo "<tbody>";
                  echo "<tr>";
                //  echo "<td>".$row['uname']." </td>";
                  // echo "<td>".$row['user_id']."</td>";
                   //echo "<td>".$row['reg_no']."</td>";
                    echo "<td>".$row['sub_name']."</td>";
                                        echo "<td>".$row['sem']."</td>";
                     echo "<td>".$row['attendance']."</td>";
                   echo "<td>".$row['series1']."</td>";
                                      echo "<td>".$row['series2']."</td>";
                   echo "<td>".$row['assignment']."</td>";
                                      echo "<td>".$row['total']."</td>";
                
                  echo "</tr>";
                echo "</tbody>";
                }
              }
              
                    ?>               
                </table>

                <br />
                <!-- <hr /> -->
                <br />

                
           
              
                    
                   

              <div class="module-foot">
              <div class="control-group">
                <div class="controls clearfix">
                  <div class="pull-left">
                  <a href="dashboard.php" class="btn btn-primary pull-left">BACK</a>
                </div>
               
                </div>
              </div>
            </div></table>            </div>


          <br />
   
    <div class="footer">
    <div class="container">
        </div>
  </div>
</body>