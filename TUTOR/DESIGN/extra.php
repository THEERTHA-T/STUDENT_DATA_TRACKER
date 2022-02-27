<?php
include 'db_config.php';
$conn=new mysqli($servername,$dbusername,$password1,$dbname);
$dept="select distinct * from department";
$d_query=mysqli_query($conn,$dept);
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
            $(document).ready(function() { 
              $("#Btn-check").click(function(){
               
              $course_name=$("#course_name").val();
              $sem=$("#sem").val();
              $stud_name=$("#stud_name").val();
              $hobbies=$("#hobbies").val();
              $ac=$("#ac").val();


            
          $.ajax({
                  url:"../CODE/extra_code.php",
                  data:{'course_name' : $course_name,'sem' : $sem,'stud_name' : $stud_name,'hobbies' : $hobbies,'ac' : $ac},
                  dataType:"json",
                  type:"post",
                  success:function(datas) {

                       alert(datas.Msg);
                    window.location="extra.php";
                   // return;
                  },error:function(d1)
                  {
                    alert("error"+d1);
                    console.log(d1);
                  }
              });   
      });
            });
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
                            <li><a href="student_registration.php"><i class="menu-icon icon-bullhorn"></i>Student Registration</a>
                            </li>
                            <li><a href="mark_entry.php"><i class="menu-icon icon-book"></i> Mark Entry </a></li>

                            
                    </ul>
                            <ul class="widget widget-menu unstyled">
                               <li><a href="int_mark_entry.php"><i class="menu-icon icon-book"></i> Internal Mark Entry </a></li>
                                 <li><a href="view_mark_1.php"><i class="menu-icon icon-book"></i>  Mark  View</a></li>

                                 <li><a href="view_report.php"><i class="menu-icon icon-bullhorn"></i>Report Generation</a>
                            </li>
                               
                                    </li>
                                                                    </li>
                                                                      <li><a href="add_not.php"><i class="menu-icon icon-bullhorn"></i>Add Notifications</a>
                            </li>
                             <li><a href="view_not.php"><i class="menu-icon icon-bullhorn"></i>View Notifications</a>
                            </li>
                                  <li><a href="add_event.php"><i class="menu-icon icon-paste"></i>Add Events</a></li>   
                                      <li><a href="extra.php"><i class="menu-icon icon-paste"></i>Add extra curricular activity</a></li>         
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
            <div class="module">
              <div class="module-head">
                <form method="POST" action="view_mark.php">
                <H1>  <font color="green">              
                 ADD EXTRA-CURRICULAR ACTIVITY</font> </H1>
              </div>
              <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                     <?php
                    include 'db_config.php';
                    $conn=new mysqli($servername,$dbusername,$password1,$dbname);
                   $sql="select * from course";
                    $result=$conn->query($sql);
                    ?>
                  
                      <div class="controls">
                       &nbsp; &nbsp;  Course Name : <br>
                         &nbsp; &nbsp; <select tabindex="1" id="course_name"  class="span5">
                          <option selected="">Select course</option>
                          <?php 
                          if($result->num_rows>0)
                          {
                            while($row=$result->fetch_assoc())
                            {
                              $course_name=$row['course_name'];
                              echo "<option>".$row['course_name']."</option>";
                            }
                          }
                          ?>
                          
                        </select>                        
                      </div>    
                      </div>
                 <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                    &nbsp; &nbsp;    Semester :<br>                        
                        &nbsp; &nbsp; <select class="span5" id="sem">
                          <option selected="">Select sem</option>
                          <option>1</option>
                         <option >2</option>
                          <option>3</option>
                           <option>4 </option>
                          <option> 5</option>
                          <option> 6</option>
                        </select>
                       </div>
                    </div>
                  
                      

               <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                       &nbsp; &nbsp; Student Name:<br>
                        &nbsp; &nbsp;<input type="text" id="stud_name" placeholder="student name" class="span5">
                      </div>  
                    </div>
    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                      &nbsp; &nbsp;  Hobbies :<br>
                       &nbsp; &nbsp; <input type="text" id="hobbies" placeholder="Hobby" class="span5">
                      </div>  
                    </div>
                     <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                      &nbsp; &nbsp;  Achievements :<br>
                       &nbsp; &nbsp; <input type="text" id="ac" placeholder="Achievements" class="span5">
                      </div>  
                    </div>
                  
                                                          <div class="controls clearfix">
                                          <div class="pull-left">

                  <a href="view_mark_1.php" class="btn btn-primary pull-left">BACK</a>
                </div>
                                    &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<button type="button" id="Btn-check" class="btn btn-danger">SUBMIT</button>                       </div>                        </form>
      
                </div><!--/.stream-list-->
              </div><!--/.module-body-->
            </div><!--/.module-->
          </div><!--/.content-->
        </div><!--/.span9-->
      </div>
    </div><!--/.container-->
  </div><!--/.wrapper-->
   <table id="table1" border="2" class="table table-striped" WIDTH="80%">
                <!-- <table border="2" class="table table-striped">
                -->
                  
           

<!-- </table> -->
               </table>


  <div class="footer">
    <div class="container">      
      <b class="copyright">
    </div>
  </div>
  <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
 
    
  </table>
</body>