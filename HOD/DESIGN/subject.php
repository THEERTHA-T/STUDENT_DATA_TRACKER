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
                $sub_code=$("#sub_code").val();
              $sub_name=$("#sub_name").val();
              $teacher_name=$("#teacher_name").val();
                  if($course_name==""||$sem==""||$sub_code==""||sub_name==""||teacher_name=="") 
             { 
               alert("Mandatory fields missing");
               return;
               }
             
          $.ajax({
                  url:"../CODE/subject_code.php",
                  data:{'dept_name' : $dept_name,  'course_name' : $course_name,'sem':$sem,'sub_code':$sub_code,'sub_name':$sub_name,'teacher_name':$teacher_name},
                  dataType:"json",
                  type:"post",
                  success:function(datas) {

                    alert(datas.Msg);
                    window.location="subject.php";

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
                            <li><a href="assign_tutor.php"><i class="menu-icon icon-bullhorn"></i>Assign Tutor</a>
                            </li>                                                 
                    </ul>
                            <ul class="widget widget-menu unstyled">
                                 <li><a href="view_report.php"><i class="menu-icon icon-bullhorn"></i>View Report</a>
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
				<div class="span7">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<H1>	<font color="green">							
								 ADD SUBJECT DETAILS</font> </H1>
							</div>
						
                    <div class="module-body">
                <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                      Department Name: <br> <input type="text" id="dept_name" readonly="" placeholder="Dept name" class="span5"  value='<?php echo $_SESSION["dept_name"]?>' >
                      </div>
                    </div>
                     <?php
                    include 'db_config.php';
                    $conn=new mysqli($servername,$dbusername,$password1,$dbname);
                                           $dept_name= $_SESSION["dept_name"];

                   $sql="select * from course where dept_name='".$dept_name."';";
                    $result=$conn->query($sql);
                    ?>
                  
                      <div class="controls">
                        Course Name : <br>
                        <select tabindex="1" id="course_name"  class="span5">
                          <option selected="">Select course</option>
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
                       Select Semester :<br> 
                        <select tabindex="1" id="sem" data-placeholder="Select" class="span5">
                          <option selected>Select Semester</option>
                          <option >1</option>
                          <option >2</option>   
                         <option >3</option>                                               
                          <option >4</option>                                                 
                          <option >5</option>                                                 
                          <option >6</option>                                                             
                           </select>
                        
                      </div>
                        <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                      Subject Code :<br><input type="text"  id="sub_code" placeholder=" Subject Code   " class="span5" >
                        
                      </div>
                         <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                      Subject Name :<br><input type="text"  id="sub_name" placeholder=" Subject Name   " class="span5" >
                        
                      </div>
                        <?php
                       $dept_name= $_SESSION["dept_name"];
                    include 'db_config.php';
                    $conn=new mysqli($servername,$dbusername,$password1,$dbname);
                   $sql="select * from users where dept_name ='".$dept_name."' and user_type='Teacher' ";
                    $result=$conn->query($sql);
                    ?>
                  
                      <div class="controls">
                        Teacher Name : <br>
                        <select tabindex="1" id="tutor_name"  class="span5">
                          <option selected="">Select Teacher</option>
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
                                    <button type="button" id="Btn_submit" class="btn btn-success pull-right">ADD SUBJECT</button>                       </div>                
								</div><!--/.stream-list-->
							</div><!--/.module-body-->
						</div><!--/.module-->
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