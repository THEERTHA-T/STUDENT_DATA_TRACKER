<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STUDENT TRACKING SYSTEM</title>
  <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link type="text/css" href="css/theme.css" rel="stylesheet">
  <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
  <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
                <script src="JQuery/jquery3_4_1.min.js"></script>
            <script >
            $(document).ready(function() { 
              $("#Btn_register").click(function(){
                $first_name=$("#first_name").val();
                  $last_name=$("#last_name").val();
                $user_name=$("#user_name").val();
                $user_type=$("#user_type").val();
              $password=$("#password").val();
                $cpassword=$("#cpassword").val();
                $phone_no=$("#phone_no").val();
              $email_id=$("#email_id").val();
              $college_name=$("#college_name").val();
              $qualification=$("#qualification").val();
              $dob=$("#dob").val();
              $place=$("#place").val();
              $dept_name=$("#dept_name").val();
              
            if($first_name==""||$last_name==""||$user_name==""||$user_type==""||$password==""||$cpassword==""||$phone_no==""||$email_id==""||$college_name==""||$qualification==""||$dob==""||$place==""||dept_name=="") 
             { 
               alert("Mandatory Fields Missing");
               return;
               }
             if($password!=$cpassword)
             {
               alert("password mismatch");
               return;
             }
          $.ajax({
                  url:"../CODE/staff_registration_code.php",
                  data:{'first_name' : $first_name, 'last_name' : $last_name, 'user_name' : $user_name, 'user_type' : $user_type,'password':$password,'phone_no':$phone_no,'email_id':$email_id,'college_name':$college_name,'qualification':$qualification,'dob':$dob,'place':$place,'dept_name':$dept_name},
                  dataType:"json",
                  type:"post",
                  success:function(datas) {

                    alert(datas.Msg);
                    window.location="staff_registration.php";
                   // return;
                  },error:function(d1)
                  {
                   // alert("hh"+d1);
                    console.log(d1);
                  }
              });    
      });
            });
</script>
</head>
 <style type="text/css">
      .middle
      {
        float:left;
        margin-left: 10%;
      }
    </style>
<body>
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
          <i class="icon-reorder shaded"></i>
        </a>
          <a class="brand" href="index.html">
            STUDENT TRACKING SYSTEM </a>        
        <div class="nav-collapse collapse navbar-inverse-collapse">
        
          <ul class="nav pull-right">

            <li><a href="#">
              Sign Up
            </a></li>      
            <li><a href="#">
              Forgot your password?
            </a></li>
          </ul>
        </div><!-- /.nav-collapse -->
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
 <div class="span6">
                    <div class="middle">     
            <div class="module-head">
               <a class="media-avatar pull-left">
                                                <img src="images/user.png">
                                            </a>
              <h2><font color="green">USER REGISTRATION</font></h2>
             
            </div>
            <div></div>
            <div class="module-body">
              <div class="control-group">
                <div class="controls row-fluid">
            <div class="control-group">
                      <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                       <br> First Name :<br>
                        <input type="text" id="first_name" placeholder="First Name" class="span5">
                        
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Last Name :<br>
                        <input type="text" id="last_name" placeholder="Last Name" class="span5">
                        
                      </div>
                    </div>

                    <div class="control-group">

                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        User Name :<br>
                        <input type="text" id="user_name" placeholder="User Name" class="span5">
                        
                      </div>
                    </div>
                      <div class="controls">User Type :<br>
                        <select tabindex="1" id="user_type" data-placeholder="Select" class="span5">
                          <option selected>Select User Type </option>
                          <option >Teacher</option>
                          <option >Principal</option>                                                 
                           </select>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Enter New password :<br>
                        <input type="password" id="password" placeholder="New Password" class="span5">
                      </div>  
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Re-type Password:<br>
                        <input type="password" id="cpassword" placeholder="Confirm Password" class="span5">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Contact Number :<br>
                        <input type="text" id="phone_no" placeholder="Mobile Number" class="span5">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Email ID :<br>
                        <input type="text" id="email_id" placeholder="Email id" class="span5">
                        
                      </div>
                      <br>
                      <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        College Name :<br>
                        <input type="text" id="college_name" placeholder="Institution Name" class="span5" value='<?php echo $_SESSION["college_name"]?>' readonly="">
                        
                      </div>

                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Qualification :<br>
                        <input type="text" id="qualification" placeholder="Qualification " class="span5">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Date Of Birth :<br>
                        <input type="Date" id="dob" placeholder="yyyy-mm-dd" class="span5">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Place :<br>
                        <input type="text" id="place" placeholder="place" class="span5">
                        
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
                          <option>None</option>
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
                    </div>
              <div class="control-group">
                <div class="span5">
                  <div class="pull-left">
                  <a href="dashboard.php" class="btn btn-primary pull-left">BACK</a>
                </div>
                  <input type="BUTTON" class="btn btn-success pull-right" value="REGISTER" id="Btn_register" >
                  
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div><!--/.wrapper-->

  <div class="footer">
    <div class="container">
        </div>
  </div>
  <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>