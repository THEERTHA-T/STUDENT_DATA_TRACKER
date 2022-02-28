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
            $(document).ready(function() { 
              $("#Btn_submit").click(function(){
                $dept_name=$("#dept_name").val();
                $course_name=$("#course_name").val();
              $sem=$("#sem").val();
                $tutor_name=$("#tutor_name").val();
                  if($dept_name==""||$course_name==""||$sem==""||$tutor_name=="") 
             { 
               alert("mandatory fields missing");
               return;
               }
             
          $.ajax({
                  url:"../CODE/assign_tutor_code.php",
                  data:{'dept_name' : $dept_name,  'course_name' : $course_name,'sem':$sem,'tutor_name':$tutor_name},
                  dataType:"json",
                  type:"post",
                  success:function(datas) {

                    alert(datas.Msg);
                    window.location="assign_tutor.php";

                  },error:function(d1)
                  {
                    alert("Error"+d1);
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
                              <li><a href="course.php"><i class="menu-icon icon-bullhorn"></i>Add Course</a>
                            </li>
                             <li><a href="subject.php"><i class="menu-icon icon-bullhorn"></i>Manage Subject</a>
                            </li>
                            <li><a href="student_registration.php"><i class="menu-icon icon-bullhorn"></i>Assign Tutor</a>
                            </li>       
                             <li><a href="stud_details.php"><i class="menu-icon icon-bullhorn"></i>View Student details</a>
                            </li>                                          
                    </ul>
                            <ul class="widget widget-menu unstyled">
                                 <li><a href="view_mark_1.php"><i class="menu-icon icon-book"></i>  Mark view </a></li>
                                 <li><a href="report_generation.php"><i class="menu-icon icon-bullhorn"></i>View Internal Mark Report</a>
                            </li>
                               
                                    </li>
                                                                    </li>
                                                                      <li><a href="add_not.php"><i class="menu-icon icon-bullhorn"></i>Add Notifications</a>
                            </li>
                             <li><a href="view_not.php"><i class="menu-icon icon-bullhorn"></i>View Notifications</a>
                            </li>
                                           <li><a href="add_event_1.php"><i class="menu-icon icon-paste"></i>Add Events</a></li>  
                                 <li><a href="about_us.php"><i class="menu-icon icon-paste"></i>About us</a></li>
                               <li><a href="logout.php"><i class="menu-icon icon-bullhorn"></i>Logout</a>
                            </li>
                            </ul>
                    </div>
                    <!--/.sidebar-->
                </div>
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<H1>	<font color="green">							
								 ASSIGN TUTOR</font> </H1>
							</div>
							<div class="module-body">
								<div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                       <br> <input type="hidden"  id="institution_name" placeholder="Institution Name..." class="span7"  value='<?php echo $_SESSION["college_name"]?>' >
                      </div>
                    </div>
                     <div class="controls">
                                                Department Name :<br> <input type="text" id="dept_name" placeholder="Department Name" readonly="" class="span5" value='<?php echo $_SESSION['dept_name'];?>'>
                                                
                                            </div>

                      <?php
                       $dept_name= $_SESSION["dept_name"];
                    include 'db_config.php';
                    $conn=new mysqli($servername,$dbusername,$password1,$dbname);
                   $sql="select * from course where dept_name ='".$dept_name."'  ";
                    $result=$conn->query($sql);
                    ?>
                  
                      <div class="controls">
                        Course Name : <br>
                        <select tabindex="1" id="course_name"  class="span5">
                          <option selected="">Select Course</option>
                          <?php 
                          if($result->num_rows>0)
                          {
                            while($row=$result->fetch_assoc())
                            {
                              echo "<option>".$row['course_name']."</option>";
                            }
                          }
                          ?>
                          
                        </select>                        
                      </div>        

                     <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                       Semester :<br> 
                        <select tabindex="1" id="sem" data-placeholder="Select" class="span5">
                          <option selected>Select semester</option>
                          <option >1</option>
                          <option >2</option>   
                         <option >3</option>                                               
                          <option >4</option>                                                 
                          <option >5</option>                                                 
                                              
                           </select>
                        
                      </div>        
                       <?php
                       $dept_name= $_SESSION["dept_name"];
                    include 'db_config.php';
                    $conn=new mysqli($servername,$dbusername,$password1,$dbname);
                   $sql="select * from users where dept_name ='".$dept_name."' and user_type='Teacher' or user_type='HOD' ";
                    $result=$conn->query($sql);
                    ?>
                  
                      <div class="controls">
                        Tutor Name : <br>
                        <select tabindex="1" id="tutor_name"  class="span5">
                          <option selected="">Select Course</option>
                          <?php 
                          if($result->num_rows>0)
                          {
                            while($row=$result->fetch_assoc())
                            {
                              echo "<option>".$row['user_name']."</option>";
                            }
                          }
                          ?>
                          
                        </select>                        
                      </div>        

                  
                    
                                                          <div class="controls clearfix">
                                        	<div class="pull-left">
                  <a href="dashboard.php" class="btn btn-primary pull-left">BACK</a>
                </div>
                                    <button type="button" id="Btn_submit" class="btn btn-danger pull-right">ADD</button>                       </div>                
								</div><!--/.stream-list-->
							</div><!--/.module-body-->
						</div><!--/.module-->

              <div class="module-body">

      <br><br>
     <h1>TUTOR LIST</h1><br><br>
              <?php

include 'db_config.php';
                       $dept_name= $_SESSION["dept_name"];
$conn=new mysqli($servername,$dbusername,$password1,$dbname);

$sql="select * from tutor where dept_name ='".$dept_name."' order by sem; ";

  $result=$conn->query($sql);?>
                <table class="table">
                <table class="table table-striped" border="1" style="width:70%">                  
            <tr >
          <th>Course Name </th> 
             <th>Semester</th> 
            <th>Tutor Name</th>                               
           

                  
                </tr>
<?php
                  
   if($result->num_rows>0)
   {
     while($row=$result->fetch_assoc())
     {
                 
                  echo "<tbody>";
                  echo "<tr>";
                  echo "<td>".$row['course_name']." </td>";
                   echo "<td>".$row['sem']."</td>";
                   echo "<td>".$row['tutor_name']."</td>";
                                      echo "</tr>";
                echo "</tbody>";
                }
              }
              
                    ?>               
                </table>
          </div><!--/.content-->
        </div><!--/.span9-->

					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
	<div class="footer">
		<div class="container">			 
			<b class="copyright">
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>