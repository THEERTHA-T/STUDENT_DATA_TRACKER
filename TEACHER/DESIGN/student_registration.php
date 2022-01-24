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
              $("#BTN-register").click(function(){
                $fname=$("#fname").val();
                $lname=$("#lname").val();  
                $user_name=$("#user_name").val();  
                $admno=$("#admno").val();
                $reg_no=$("#reg_no").val();

  
                $phone_no=$("#phone_no").val();
                  $email_id=$("#email_id").val();
                  $loc=$("#loc").val();       
                  $place=$("#place").val();
                  $house_name=$("#house_name").val();
                  $pin=$("#pin").val();
                  $district=$("#district").val();
                  $state=$("#state").val();
                  $admntype=$("#admntype").val();
              $gender=$("#gender").val();
              $password=$("#password").val();
                $cpassword=$("#cpassword").val();
                $admndate=$("#admndate").val();
              $course_name=$("#course_name").val();
              $sem=$("#sem").val();
              $tutor=$("#tutor").val();
              $dob=$("#dob").val();
              $dob=$("#dob").val();
              $dob=$("#dob").val();
              $dob=$("#dob").val();

             if($password!=$cpassword)
             {
               alert("password mismatch");
               return;
             }
          $.ajax({
                  url:"../CODE/student_registeration_code.php",
                  data:{'fname' : $fname, 'lname' : $lname, 'username' : $uname,'password':$password,'phone_no':$phoneno,'email_id':$emailid,'place':$place,'loc':$loc,'dob':$dob,'dept':$dept,'pin':$pin,'district':$district,'state':$state,'admntype':$admntype,'admno':$admno,'gender':$gender,'housename':$housename,'admndate':$admndate,'pname':$pname,'pocc':$pocc},
                  dataType:"json",
                  type:"post",
                  success:function(datas) {
                     // alert()
                    alert(datas.Msg);
                    window.location="student_registration.php";
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
			  		Edmin
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav nav-icons">
						<li class="active"><a href="#">
							<i class="icon-envelope"></i>
						</a></li>
						<li><a href="#">
							<i class="icon-eye-open"></i>
						</a></li>
						<li><a href="#">
							<i class="icon-bar-chart"></i>
						</a></li>
					</ul>

					<form class="navbar-search pull-left input-append" action="#">
						<input type="text" class="span3">
						<button class="btn" type="button">
							<i class="icon-search"></i>
						</button>
					</form>
				
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Item No. 1</a></li>
								
								<li><a href="#">Don't Click</a></li>
								<li class="divider"></li>
								<li class="nav-header">Example Header</li>
								<li><a href="#">A Separated link</a></li>
															</ul>
						</li>
						
						<li><a href="#">
							Support
						</a></li>
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="images/user.png" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Your Profile</a></li>
								<li><a href="#">Edit Profile</a></li>
								<li><a href="#">Account Settings</a></li>
								<li class="divider"></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
			<div class="module module-login span6 offset3">
          <form class="form-vertical">
            <div class="module-head">
              <h3>STUDENT DETAILS</h3>
            </div>
            <div class="module-body">
              <div class="control-group">
                <div class="controls row-fluid">
            <div class="control-group">
                      <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="fname" placeholder="First Name..." class="span12">
                        
                      </div>
                    </div>

               
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="lname" placeholder="Last Name..." class="span12">
                        
                      </div>
                    </div>
                    
                                                   <div class="control-group">
											
											<div class="controls">
												<select tabindex="1" id="gender" data-placeholder="Select.." class="span8">
													<option >Male</option>
													<option >Female</option>
													<option >Other</option>
													
													
												</select>
											</div> 
										</div>
         
                    
                  
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="date" id="dob" placeholder="YYYY-MM-DD" class="span12">
                        
                      </div>
                    </div>
 
  <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="pname" placeholder="Parent's Name..." class="span12">
                        
                      </div>
                    </div> 
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="pocc" placeholder="Occupation" class="span12">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="phoneno" placeholder="Mobile Number..." class="span12">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="emailid" placeholder="Email id..." class="span12">
                        
                      </div>
                    
  <HR color="grey" size="5">  </HR> 
  <h4>Address Details</h4>             
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="housename" placeholder="House Name" class="span12">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="place" placeholder="Place" class="span12">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="loc" placeholder="Location" class="span12">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="pin" placeholder="Pincode" class="span12">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="district" placeholder="District" class="span12">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="state" placeholder="state" class="span12">
                        
                      </div>
                    </div>
                    <HR color="grey" size="5"></HR>
                    <h4>Admission Details</h4>
                    <h5> Date Of Admission </h5>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="date" id="admndate" placeholder="YYYY-MM-DD" class="span12">
                        
                      </div>
                    </div>

<br>
                    <?php
include 'db_config.php';

$conn=new mysqli($servername,$dbusername,$password1,$dbname);
$sql="select * from tb_dept";
  $result=$conn->query($sql);?>
                    <div class="controls">
                        <select tabindex="1" id="dept" data-placeholder="Department.." class="span8">
                          <option >Select Department</option>
                          <?php if($result->num_rows>0)
   {
     while($row=$result->fetch_assoc())
     {
      echo "<option >".$row['dept_name']."</option>";
                        }
   }
   ?> 
                                                  </select>
                      </div>
                    </div>
                   <div class="control-group">
											
											<div class="controls">
												<select tabindex="1" id="admntype" data-placeholder="Select.." class="span8">
													<option >Admission Type</option>
													<option >Merit</option>
													<option >Management</option>
													<option >Sports</option>
													
												</select>
											</div> 
										</div>
                    <div class="control-group">
											
                      <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="admno" placeholder="Admission Number" class="span12">
                      </div>  
                    </div>
                    <hr color="grey" size="5">

<h4>User details</h4>                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="password" id="password" placeholder="Password..." class="span12">
                      </div>  
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="password" id="cpassword" placeholder="Confirm Password..." class="span12">
                        
                      </div>
                    </div>
                    
                      <br>
                      
                     <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="uname" placeholder="User Name..." class="span12">
                        
                      </div>
                    </div>
                  <!--    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="college" placeholder="Institution Name..." class="span12">
                        
                      </div>

                    </div>-->
                     
            <div class="module-foot">
              <div class="control-group">
                <div class="controls clearfix">
                  <div class="pull-left">
                  <a href="dashboard.php" class="btn btn-primary pull-left">BACK</a>
                </div>
                  <input type="BUTTON" class="btn btn-primary pull-right" value="REGISTER" id="BTN-register" >
                  
                </div>
              </div>
            </div>
          </form>
        </div>
      
                           
						
			


</div>
				
						
					
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
</form>
</div>
</div>
</div>
</div>

	<div class="footer">
		<div class="container">
			 

					</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>