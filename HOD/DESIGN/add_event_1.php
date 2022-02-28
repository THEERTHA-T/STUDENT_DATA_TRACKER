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
                $event_id=$("#event_id").val();
                $event_name=$("#event_name").val();
                $event_num=$("#event_num").val();
             
                  if($event_id==""||$event_name==""||$event_num=="") 
             { 
               alert("Mandatory fields missing");
               return;
               }
             
          $.ajax({
                  url:"../CODE/add_event_1_code.php",
                  data:{'event_id' : $event_id,  'event_name' : $event_name,'event_num':$event_num},
                  dataType:"json",
                  type:"post",
                  success:function(datas) {

                    alert(datas.Msg);
                    window.location="add_event_1.php";

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
                             <li><a href="stud_details.php"><i class="menu-icon icon-bullhorn"></i>View Student details</a>
                            </li>                                  
                    </ul>
                            <ul class="widget widget-menu unstyled">
                                  <li><a href="view_mark_1.php"><i class="menu-icon icon-book"></i>  Mark view </a></li>
                                 <li><a href="view_report.php"><i class="menu-icon icon-bullhorn"></i>View Internal Mark Report</a>
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
				<div class="span7">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<H1>	<font color="green">							
								 ADD EVENT DETAILS</font> </H1>
							</div>
                <div class="module-body">
                <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                      Event ID: <br> <input type="text" id="event_id"  placeholder="event ID" class="span5" >
                      </div>
                    </div>
						
                   <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Event Name :<br> <input type="text"  id="event_name" placeholder=" event Name" class="span5">
                        
                      </div>
                    </div>                  
                  
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Number of participants :<br> <input type="text"  id="event_num" placeholder=" event number" class="span5">
                        
                      </div>
                    </div>                  
                  

                    
                                                          <div class="controls clearfix">
                                        	<div class="pull-left">
                  <a href="dashboard.php" class="btn btn-primary pull-left">BACK</a>
                </div>
                                    <button type="button" id="Btn_submit" class="btn btn-success pull-right">ADD EVENT</button>                       </div>                
								</div><!--/.stream-list-->
							</div><!--/.module-body-->
						</div><!--/.module-->
            <div class="module-body">

      <br><br>
     <h1>EVENT LIST</h1><br><br>
              <?php

include 'db_config.php';
$conn=new mysqli($servername,$dbusername,$password1,$dbname);

$sql="select * from event  order by 'event_id'; ";

  $result=$conn->query($sql);?>
                <table class="table">
                <table class="table table-striped" border="1" style="width:70%">                  
            <tr >
          <th>Event ID </th> 
             <th>Event Name </th> 
            <th>Number of participants</th>                             
  
                  
                </tr>
<?php
                  
   if($result->num_rows>0)
   {
     while($row=$result->fetch_assoc())
     {
                 
                  echo "<tbody>";
                  echo "<tr>";
                  echo "<td>".$row['event_id']." </td>";
                   echo "<td>".$row['event_name']."</td>";
                   echo "<td>".$row['event_num']."</td>";
                    echo "</tr>";
                echo "</tbody>";
                }
              }
              
                    ?>               
                </table>
          </div><!--/.content-->
        </div><!--/.span9-->

      </div>
    </div><!--/.container-->
  </div><!--/.wrapper-->
          </div><!--/.content-->
        </div><!--/.span9-->
      </div>
    </div><!--/.container-->
  </div><!--/.wrapper-->
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