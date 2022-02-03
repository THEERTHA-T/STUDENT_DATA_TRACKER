<?php 
session_start();
if(!$_SESSION["user_name"])
{
  header("location/PROJECT/Stud_Tracker/login.php");
}
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
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Student Tracking System </a>
                      <ul class="nav pull-right">
                           <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="images/user.png" class="nav-avatar" />
                            <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="Editprofile.php">Edit Profile</a></li>
                                <li><a href="#">Account Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>   
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
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
                          
                            <li><a href="mark_entry.php"><i class="menu-icon icon-book"></i> Mark Entry </a></li>

                            
                    </ul>
                            <ul class="widget widget-menu unstyled">
                               <li><a href="int_mark_entry.php"><i class="menu-icon icon-book"></i> Internal Mark Entry </a></li>
                                 <li><a href="view_mark_1.php"><i class="menu-icon icon-book"></i>  Mark  View</a></li>

                                 <li><a href="report_generation.php"><i class="menu-icon icon-bullhorn"></i>Report Generation</a>
                            </li>
                               
                                    </li>
                                                                    </li>
                                 <li><a href="about_us.php"><i class="menu-icon icon-paste"></i>About us</a></li>
                               <li><a href="logout.php"><i class="menu-icon icon-bullhorn"></i>Logout</a>
                            </li>
                            </ul>
                    </div>
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->
                <div class="span9">
                    <div class="content">
                                  <?php
include 'db_config.php';

$conn=new mysqli($servername,$dbusername,$password1,$dbname);

$sql="select * from college where college_name='".$_SESSION['college_name']."' ";

  $result=$conn->query($sql);?>
                       
<?php
                  
   if($result->num_rows>0)
   {
     while($row=$result->fetch_assoc())
     {
                 
                  echo "<center><h1><font color=red>"; 
                  echo $row['college_name'];
                  echo "</font></h1>";

                  echo "<h3><b><br>ADDRESS :</b>";
                  echo $row['address'];

                  echo "<b><br>PLACE :</b>";
                  echo $row['place'];

                  echo "<b><br>DISTRICT :</b>";
                  echo $row['district'];

                  echo "<b><br>STATE :</b>";
                  echo $row['state'];

                  echo "<b><br>COUNTRY :</b>";
                  echo $row['country'];

                  echo "<b><br>PIN CODE :</b>";
                  echo $row['pin_code'];

                  echo "<b><br>CONTACT NUMBER :</b>";
                  echo $row['phone_no'];

                  echo "<b><br>EMAIL ID :</b>";
                  echo $row['email_id'];

                  echo "<b><br>AFFILIATION :</b>";
                  echo $row['affiliation'];

                  echo "<b><br>COLLEGE TYPE :</b>";
                  echo $row['institution_type'];
                  
                  echo "</h3>";
                }
              }
              
                    ?>    
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