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
              $("#Btn_save").click(function(){
                $fname=$("#fname").val();
                $lname=$("#lname").val();  
                $user_name=$("#user_name").val();  
                $user_type=$("#user_type").val();  
                $admn_no=$("#admn_no").val();
                $reg_no=$("#reg_no").val();
                $admn_type=$("#admn_type").val();
                $admn_date=$("#admn_date").val();
                $dept_name=$("#dept_name").val();
                $course_name=$("#course_name").val();
                $sem=$("#sem").val();
                $tutor=$("#tutor").val();
                $phone_no=$("#phone_no").val();
                $email_id=$("#email_id").val();
                $loc=$("#loc").val();       
                $place=$("#place").val();
                $house_name=$("#house_name").val();
                $pin=$("#pin").val();
                $district=$("#district").val();
                $state=$("#state").val();
                $gender=$("#gender").val();
                $dob=$("#dob").val();
                $age=$("#age").val();
                $password=$("#password").val();
                $cpassword=$("#cpassword").val();

    
             if($password!=$cpassword)
             {
               alert("password mismatch");
               return;
             }
          $.ajax({
                  url:"../CODE/student_registration_code.php",
                  data:{'fname' : $fname, 'lname' : $lname, 'user_name' : $user_name,'user_type' : $user_type,'admn_no':$admn_no,'reg_no':$reg_no,'admn_type':$admn_type,'admn_date':$admn_date,'dept_name':$dept_name,'course_name':$course_name,'sem':$sem,'tutor':$tutor,'phone_no':$phone_no,'email_id':$email_id,'loc':$loc,'place':$place,'house_name':$house_name,'pin':$pin,'district':$district,'state':$state,'gender':$gender,'dob':$dob,'age':$age,'password':$password,'cpassword':$cpassword},
                  dataType:"json",
                  type:"post",
                  success:function(datas) {

                    alert(datas.Msg);
                    window.location="student_registration.php";
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
            STUDENT DATA TRACKING SYSTEM </a>        
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
                            <li><a href="student_registration.php"><i class="menu-icon icon-bullhorn"></i>Student Registration</a>
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
                                  <li><a href="add_event.php"><i class="menu-icon icon-paste"></i>Add Events</a></li>   
                                      <li><a href="extra.php"><i class="menu-icon icon-paste"></i>Add extra curricular activity</a></li>         
                                 <li><a href="about_us.php"><i class="menu-icon icon-paste"></i>About us</a></li>
                               <li><a href="logout.php"><i class="menu-icon icon-bullhorn"></i>Logout</a>
                            </li>
                            </ul>
                    </div>
                    <!--/.sidebar-->
                </div>
 <div class="span5">
                    <div class="middle">     
            <div class="module-head">
               <a class="media-avatar pull-left">
                                                <img src="images/user.png">
                                            </a>
              <h2><font color="red">STUDENT REGISTRATION</font></h2>
             
            </div>
            <div></div>
            <div class="module-body">
              <div class="control-group">
                <div class="controls row-fluid">
            <div class="control-group">
                      <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <br>
                        <br>
                        <H3>ACADEMIC DETAILS</H3>
                        <HR color="grey" size="5">  </HR> 
                       First Name :<br>
                        <input type="text" id="fname" placeholder="First Name" class="span5">
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Last Name :<br>
                        <input type="text" id="lname" placeholder="Last Name" class="span5">
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
                 
                     <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        User Type :<br>
                        <input type="text" id="user_type" placeholder="User Name" class="span5" value="Student">                        
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Admission Number:<br>
                        <input type="text" id="admn_no" placeholder="admn number" class="span5">
                      </div>  
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Register Number:<br>
                        <input type="text" id="reg_no" placeholder="Register number" class="span5">
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                       Admission Type :<br>                        
                        <select class="span5" id="admn_type">
                          <option>Management</option>
                         <option selected="">Merit</option>
                          <option>Caste</option>
                           <option>Sports Quota</option>
                          <option>Reserved Category</option>
                        </select>
                       </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                         Admission Date :<br>
                        <input type="Date" id="admn_date" placeholder="Admn Date" class="span5">
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
                        <input type="text" id="sem" placeholder="Sem" class="span5">
                      </div>
                    </div>

                     <?php
                       $dept_name= $_SESSION["dept_name"];
                    include 'db_config.php';
                    $conn=new mysqli($servername,$dbusername,$password1,$dbname);
                   $sql="select * from tutor where dept_name ='".$dept_name."'  ";
                    $result=$conn->query($sql);
                    ?>                  
                      <div class="controls">
                        Tutor Name : <br>
                        <select tabindex="1" id="tutor"  class="span5">
                          <option selected="">Select tutor</option>
                          <?php 
                          if($result->num_rows>0)
                          {
                            while($row=$result->fetch_assoc())
                            {
                              echo "<option>".$row['tutor_name']."</option>";
                            }
                          }
                          ?>                          
                        </select>                        
                      </div>     

                    <h3>PERSONAL DETAILS</h3>
                    <HR color="grey" size="5">  </HR> 

                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Phone Number :<br>
                        <input type="text" id="phone_no" placeholder="Phone num" class="span5">
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Email ID :<br>
                        <input type="text" id="email_id" placeholder="Email id" class="span5">
                      </div>
                    </div>
                   
                   <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        House Name :<br>
                        <input type="text" id="house_name" placeholder="House name" class="span5">
                      </div>
                    </div>

                      <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        City :<br>
                        <input type="text" id="loc" placeholder="Location" class="span5">
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Place :<br>
                        <input type="text" id="place" placeholder="place" class="span5">
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Pin code :<br>
                        <input type="text" id="pin" placeholder="pin code" class="span5">
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        District :<br>
                        <input type="text" id="district" placeholder="district" class="span5">
                      </div>
                    </div>

                     <div class="control-group">
                      
                      <div class="controls"> State :<br>
                        <select tabindex="1" id="state" data-placeholder="Select" class="span5">
                          <option selected>Select state </option>
                          <option >Andhra Pradesh</option>
                          <option >Arunachal Pradesh</option>
                          <option >Assam</option>
                          <option>Bihar</option>
                          <option>Chhattisgarh</option>
                          <option>Goa</option>
                          <option>Gujarat</option>
                          <option>Haryana</option>
                          <option>Himachal Pradesh</option>
                          <option>Jharkhand</option>
                          <option>Karnataka</option>
                          <option>Kerala</option>
                          <option>Madhya Pradesh</option>
                          <option>Maharashtra</option>
                          <option>Manipur</option>
                          <option>Meghalaya</option>
                          <option>Mizoram</option>
                          <option>Nagaland</option>
                          <option>Odisha</option>
                          <option>Punjab</option>
                          <option>Rajasthan</option>
                          <option>Sikkim</option>
                          <option>Tamil Nadu</option>
                          <option>Telangana</option>
                          <option>Tripura</option>
                          <option>Uttar Pradesh</option>
                          <option>Uttarakhand</option>
                          <option>West Bengal</option>
                                                  </select>
                      </div>
                    </div>

                     <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                       Gender :<br>                        
                        <select class="span5" id="gender">
                          <option selected="">Select Gender</option>
                         <option >Female</option>
                          <option>Male</option>
                           <option>Transgender</option>
                        </select>
                       </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Date of Birth :<br>
                        <input type="Date" id="dob" placeholder="dob" class="span5">
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Age :<br>
                        <input type="text" id="age" placeholder="age" class="span5">
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        New Password :<br>
                        <input type="password" id="password" placeholder="password" class="span5">
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Confirm Password :<br>
                        <input type="password" id="cpassword" placeholder="re-type password" class="span5">
                      </div>
                    </div>

                    <div class="control-group">
                    </div>
              <div class="control-group">
                <div class="span5">
                  <div class="pull-left">
                  <a href="dashboard.php" class="btn btn-primary pull-left">BACK</a>
                </div>
                  <input type="BUTTON" class="btn btn-success pull-right" value="REGISTER" id="Btn_save" >
                  
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