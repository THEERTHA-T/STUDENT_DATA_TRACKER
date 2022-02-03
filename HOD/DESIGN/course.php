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
                $course_dur=$("#course_dur").val();
                $num_sem=$("#num_sem").val();
                  if($dept_name==""||$course_name==""||$course_dur==""||num_sem=="") 
             { 
               alert("mandatory fields missing");
               return;
               }
             
          $.ajax({
                  url:"../CODE/course_code.php",
                  data:{'dept_name' : $dept_name,  'course_name' : $course_name,'course_dur':$course_dur,'num_sem':$num_sem},
                  dataType:"json",
                  type:"post",
                  success:function(datas) {

                    alert(datas.Msg);
                    window.location="course.php";

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
			  		Student DataTracking System
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
                                 <li><a href="view_mark_1.php"><i class="menu-icon icon-book"></i>  Mark view </a></li>
                                 <li><a href="view_report.php"><i class="menu-icon icon-bullhorn"></i>View Report</a>
                            </li>
                               
                                    </li>
                                                                    </li>
                                      <li><a href="add_event_1.php"><i class="menu-icon icon-paste"></i>Add Events</a></li>  
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
								 ADD COURSE DETAILS</font> </H1>
							</div>
							<div class="module-body">
								<div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                       <br> <input type="hidden"  id="institution_name" placeholder="Institution Name..." class="span7"  value='<?php echo $_SESSION["college_name"]?>' >
                      </div>
                    </div>
                    <?php
                    include 'db_config.php';
                    $conn=new mysqli($servername,$dbusername,$password1,$dbname);
                   $sql="select * from department";
                    $result=$conn->query($sql);
                    ?>
                  
                      <div class="controls">
                        Department Name : <br>
                        <select tabindex="1" id="dept_name"  class="span5">
                          <option selected="">Select Department</option>
                          <?php 
                          if($result->num_rows>0)
                          {
                            while($row=$result->fetch_assoc())
                            {
                              echo "<option>".$row['dept_name']."</option>";
                            }
                          }
                          ?>
                          
                        </select>                        
                      </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Course Name :<br> <input type="text"  id="course_name" placeholder=" Course Name" class="span5">
                        
                      </div>
                    </div>                  
                  
                     <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                       Course Duration :<br> 
                        <select tabindex="1" id="course_dur" data-placeholder="Select" class="span5">
                          <option selected>Select Course Duration(in years)</option>
                          <option >1</option>
                          <option >2</option>   
                         <option >3</option>                                               
                          <option >4</option>                                                 
                          <option >5</option>                                                 
                                              
                           </select>
                        
                      </div>
                        <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                       Number of Semester :<br><input type="text"  id="num_sem" placeholder="  Number of Semester " class="span5" >
                        
                      </div>
                                                          <div class="controls clearfix">
                                        	<div class="pull-left">
                  <a href="dashboard.php" class="btn btn-primary pull-left">BACK</a>
                </div>
                                    <button type="button" id="Btn_submit" class="btn btn-success pull-right">ADD COURSE</button>                       </div>                
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