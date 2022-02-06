<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Tracking System</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
                 <script src="JQuery/jquery3_4_1.min.js"></script>
    
    </head>
    <style type="text/css">
      .middle
      {
        float:left;
        margin-left: 20%;
      }
    </style>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Student Data Tracking System </a>                    
                </div>
            </div>
        </div>
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
                            <li><a href="view_mark_1.php"><i class="menu-icon icon-bullhorn"></i>Mark view</a>
                            </li>
                                <li><a href="add_not.php"><i class="menu-icon icon-bullhorn"></i>Add Notifications</a>
                            </li>
                             <li><a href="view_not.php"><i class="menu-icon icon-bullhorn"></i>View Notifications</a>
                            </li>
                            <li><a href="view_report.php"><i class="menu-icon icon-book"></i> view Report</a></li>

                   
                               
                                    </li>
                                                                    </li>
                                
                               <li><a href="logout.php"><i class="menu-icon icon-bullhorn"></i>Logout</a>
                            </li>
                            </ul>
                    </div>
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->
                <div class="span6">
                    <div class="middle">                       
                                <h1><center><font color="green">
                                   NOTIFICATIONS</font></center>
                                </h1>
                               <div class="module-body">
              <?php
include 'db_config.php';

$conn=new mysqli($servername,$dbusername,$password1,$dbname);

$sql="select * from notifications ORDER BY msg_id DESC ";

  $result=$conn->query($sql);?>
                <table class="table">
                <table border="2" class="table table-striped">
                <thead>
                  
            <tr>
                   <!-- <th>Dept name </th> --> 
                   <th>Date</th>
                  <th>Name</th>
                   <th>User Type</th>
                   <th>Subject</th>

                   <!-- <th>Message ID </th>  -->
                   <th>Notification</th>
                  
                </tr>
                 </thead>
<?php
                  
   if($result->num_rows>0)
   {
     while($row=$result->fetch_assoc())
     {
                 
                  echo "<tbody>";
                  echo "<tr>";
                  //echo "<td>".$row['dname']." </td>";
                   echo "<td>".$row['date1']."</td>";
                  echo "<td>".$row['user_name']." </td>";
                  echo "<td>".$row['user_type']." </td>";
                  echo "<td>".$row['sub']." </td>";
                   echo "<td>".$row['msg']."</td>";
                    
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
                <!-- <div>
                  <center><span ><a type="submit" id="BTN_Submit" href="add_mark.php" class="btn btn-success" /> Add mark</a></span></center>               
                   </div> -->
                </div>
              </div>
            </div></table>            </div><!--/.module-->

          <br />                             
                                                                
                                </div>
                            </div>            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
   </div>
</div>
</div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
    </body>
</head>
</html>










