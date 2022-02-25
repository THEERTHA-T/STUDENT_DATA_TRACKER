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
                $hod=$("#hod").val();
                  if($dept_name==""||$hod=="") 
             { 
               alert("mandatory fields missing");
               return;
               }
             
          $.ajax({
                  url:"../CODE/assign_hod_code.php",
                  data:{'dept_name' : $dept_name,'hod':$hod},
                  dataType:"json",
                  type:"post",
                  success:function(datas) {

                    alert(datas.Msg);
                    window.location="assign_hod.php";

                  },error:function(d1)
                  {
                    alert("HOD already exist for this department"+d1);
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
			  		Student Tracking System
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
                            <li><a href="institution_settings.php"><i class="menu-icon icon-bullhorn"></i>Institution Settings</a>
                            </li>
                            <li><a href="add_department.php"><i class="menu-icon icon-book"></i>Add Department </a></li>
                          </ul>
                            <ul class="widget widget-menu unstyled">
                                 <li><a href="staff_registration.php"><i class="menu-icon icon-bullhorn"></i>User Creation</a>
                            </li>
                                 <li><a href="assign_hod.php"><i class="menu-icon icon-paste"></i>Assign HOD</a></li>
                                    </li>
                             
                                    </li>
                                 <li><a href="about_us.php"><i class="menu-icon icon-paste"></i>About us</a></li>
                               <li><a href="logout.php"><i class="menu-icon icon-bullhorn"></i>Logout</a>
                            </li>
                            </ul>
                    </div>
                </div>  
<div class="span1">
          <div class="content">
      
      </div></div>
                 
				<div class="span7">
					<div class="content">
						<div class="module">
							<div class="module-head">
                 <a class="media-avatar pull-left">
                                                <img src="images/user.png">
                                            </a>
								<H1><font color="green">							
								  &nbsp;  &nbsp;  &nbsp; ASSIGN HOD</font> </H1>
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
                        <br><br>
                        Department Name : <br>
                        <select tabindex="1" id="dept_name"  class="span5">
                          <option selected="">Select Department</option>
                          <?php 
                          if($result->num_rows>0)
                          {
                            while($row=$result->fetch_assoc())
                            {
                              $dept_name=$row['dept_name'];
                              echo "<option>".$row['dept_name']."</option>";
                            }
                          }
                          ?>
                          
                        </select>                        
                      </div>              
                  
                      
                          <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                       &nbsp;&nbsp;&nbsp; HOD :<br>    
                        <select tabindex="1" id="hod" name="hod" class="span5">
                          <option selected="">Select Head of department</option>                          
                          </select>
                      </div>
                                                          <div class="controls clearfix">
                                        	<div class="pull-left"><br><br>
                  <a href="dashboard.php" class="btn btn-primary pull-left">BACK</a>
                </div><br><br>
                                    <button type="button" id="Btn_submit" class="btn btn-success pull-right">ASSIGN</button>                       </div>                
								</div><!--/.stream-list-->
							</div><!--/.module-body-->
						</div><!--/.module-->
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

  <div class="module-body">

      <br><br>
     <h1>HOD LIST</h1><br><br>
              <?php
include 'db_config.php';

$conn=new mysqli($servername,$dbusername,$password1,$dbname);

$sql="select * from department order by dept_id; ";

  $result=$conn->query($sql);?>
                <table class="table">
                <table class="table table-striped" border="1" style="width:70%">                  
            <tr >
          <th>Department ID </th> 
             <th> Department Name </th> 
            <th>Course Count</th>
             <th>HOD  </th>         
                                
  
                  
                </tr>
<?php
                  
   if($result->num_rows>0)
   {
     while($row=$result->fetch_assoc())
     {
                 
                  echo "<tbody>";
                  echo "<tr>";
                  echo "<td>".$row['dept_id']." </td>";
                   echo "<td>".$row['dept_name']."</td>";
                   echo "<td>".$row['course_count']."</td>";
                    echo "<td>".$row['hod']."</td>";
                                      
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
  </div><!--/.wrap=-->


	<div class="footer">
		<div class="container">			 
			<b class="copyright">
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    $('#dept_name').on('change',function(){
      var dept_name=this.value;
      //console.log(dept_name);
      $.ajax({
        url:'hod_set.php',
        type:"POST",
        data:{
          dept_name:dept_name
        },
        success:function(result){
          $('#hod').html(result);
          console.log(result);
        }
      })
    
    });
  </script>
</body>