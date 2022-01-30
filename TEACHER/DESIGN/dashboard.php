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
        <title>Student Data Tracking System</title>
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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Student Data Tracking System </a>
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
                            <li><a href="student_registration.php"><i class="menu-icon icon-bullhorn"></i>Student Registration</a>
                            </li>
                            <li><a href="mark_entry.php"><i class="menu-icon icon-book"></i> Mark Entry </a></li>

                            
                    </ul>
                            <ul class="widget widget-menu unstyled">
                               <li><a href="int_mark_entry.php"><i class="menu-icon icon-book"></i> Internal Mark Entry </a></li>

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
                       
                                <h1><center>
                                    WELCOME <font color="green"><?php echo $_SESSION["first_name"];?>  <?php echo $_SESSION["last_name"]; ?></font></center>
                                </h1>
                                <div class="media user">
                                            <a class="media-avatar pull-left" href="#">
                                                <img src="images/user.png">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-title">
                                                    <b><font color="green">
                                                   <?php echo $_SESSION ["user_name"] ?></font></h3>
                                                <p><br>NAME:
                                                      <?php echo $_SESSION ["first_name"],$_SESSION["last_name"] ?></p>
                                                    <p>USER TYPE:
                                                      <?php echo $_SESSION ["user_type"]?></p>
                                                    <p>INSTITUTION:
                                                     <?php echo $_SESSION ["college_name"]?></p>
                                                    <p>EMAIL ID:
                                                     <?php echo $_SESSION ["email_id"]?></p>
                                                    <p>PHONE NUMBER:
                                                      <?php echo $_SESSION ["phone_no"]?></p>
                                                      <p>DEPARTMENT:
                                                      <?php echo $_SESSION ["dept_name"]?></p>
                                                      <p>PLACE:
                                                      <?php echo $_SESSION ["place"]?></p>
                                                      <p>STATUS:
                                                      <?php echo $_SESSION ["status"]?></p>


                                                       </b>                                     </div>
                                        </div>
                                          <div class="controls clearfix">
                                            <div class="pull-left">
                  <a href="../../login.php" class="btn btn-primary pull-left">BACK</a>
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