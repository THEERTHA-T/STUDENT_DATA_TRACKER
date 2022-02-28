<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Tracking System</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
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
                  url:"../CODE/edit_profile_code.php",
                  data:{'fname' : $fname, 'lname' : $lname, 'user_name' : $user_name,'user_type' : $user_type,'admn_no':$admn_no,'reg_no':$reg_no,'admn_type':$admn_type,'admn_date':$admn_date,'dept_name':$dept_name,'course_name':$course_name,'sem':$sem,'tutor':$tutor,'phone_no':$phone_no,'email_id':$email_id,'loc':$loc,'place':$place,'house_name':$house_name,'pin':$pin,'district':$district,'state':$state,'gender':$gender,'dob':$dob,'age':$age,'password':$password},
                  dataType:"json",
                  type:"post",
                  success:function(datas) {

                    alert(datas.Msg);
                    window.location="../../stud_login.php";
                  },error:function(d1)
                  {
                    alert("OK done");
                                        window.location="../../stud_login.php";

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
        margin-left: 20%;
      }
    </style>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Student Tracking System </a>                    
                </div>
            </div>
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
                            <li><a href="view_mark.php"><i class="menu-icon icon-bullhorn"></i>Mark view</a>
                            </li>
                                <li><a href="view_not.php"><i class="menu-icon icon-bullhorn"></i>View Notifications</a>
                            </li>
                          
                            <li><a href="view_report.php"><i class="menu-icon icon-book"></i> view Report</a></li>
<li><a href="all_sem_mark.php"><i class="menu-icon icon-book"></i> All Sem Mark</a></li>
                   
                               
                                    </li>
                                                                    </li>
                                 <li><a href="cb.php"><i class="menu-icon icon-bullhorn"></i>Complaint Box</a>
                            </li>
                               <li><a href="logout.php"><i class="menu-icon icon-bullhorn"></i>Logout</a>
                            </li>
                            </ul>
                    </div>
                    <!--/.sidebar-->
                </div>

                <!--/.span3-->
                <div class="span6">
                    <div class="middle">                       
                                <h1><center><font color="green">
                                   EDIT PROFILE</font></center>
                                </h1>
                                <div class="module">
                            <div class="module-head">                               
                                <img src="images/user.png">                        
                            </div>
                            <div class="module-body">
                              <div class="control-group">                              
                                           <div class="controls">
                                             <br>
                        <H3>ACADEMIC DETAILS</H3>
                        <HR color="grey" size="5">  </HR> 
                                               First Name :  <input type="text" id="fname" placeholder="fname" class="span5" value='<?php echo $_SESSION['fname'];?>' >                                                
                                            </div>
                                            <div class="controls">
                                                Last Name : <input  type="text" id="lname" placeholder="Last Name" class="span5" value='<?php echo $_SESSION['lname'];?>'  >
                                        </div>
                                       
                                           <div class="controls">
                                                User Name : <input  type="text" id="user_name"  placeholder="UserName" class="span5" value=<?php echo $_SESSION['user_name'];?>  >
                                        </div> 
                                          <div class="controls">
                                                User Type :<input  type="text" id="user_type"  placeholder="User Type" class="span5" value=<?php echo $_SESSION['user_type'];?>  >
                                        </div>  
 

                                         <div class="controls">
                                               Admission Number :<input  type="text" id="admn_no"  placeholder="admn_no" class="span5" value='<?php echo $_SESSION['admn_no'];?> ' >
                                        </div> 

                                         <div class="controls">
                                               Register Number :<input  type="text" id="reg_no"  placeholder="register number" class="span5" value=<?php echo $_SESSION['reg_no'];?>  >
                                        </div>
 <div class="controls">
                                               Admission Type :<input  type="text" id="admn_type"  placeholder="admn_type" class="span5" value=<?php echo $_SESSION['admn_type'];?>  >
                                        </div> 

                                         <div class="controls">
                                               Admission Date :<input  type="Date" id="admn_date"  placeholder="Admission Date " class="span5" value=<?php echo $_SESSION['admn_date'];?>  >
                                        </div>

                                          <div class="controls">
                                                              Department:<br><input  type="text" id="course_name"  readonly="" placeholder="course name" class="span5" value= 
                                                      "<?php echo $_SESSION ["dept_name"]?>" >
                                                    </div>
                                         <div class="controls">
                                               Course Name :<input  type="text" id="course_name"  placeholder="course name" class="span5" value=<?php echo $_SESSION['course_name'];?>  >
                                        </div>

                                         <div class="controls">
                                              Semester :<input  type="text" id="sem"  placeholder="sem" class="span5" value=<?php echo $_SESSION['sem'];?>  >
                                        </div>


                                         <div class="controls">
                                              Tutor :<input  type="text" id="tutor"  placeholder="tutor" class="span5" value=<?php echo $_SESSION['tutor'];?>  >
                                        </div>

 <br>
                        <H3>PERSONAL DETAILS</H3>
                        <HR color="grey" size="5">  </HR> 

  <div class="controls">
                                                Phone Number : <input  type="text" id="phone_no"  placeholder="Phone Number"class="span5" value=<?php echo $_SESSION['phone_no'];?> >
                                        </div>
 <div class="controls">
                                                Email ID :<br> <input  type="text" id="email_id"  placeholder="Email id" class="span5" value=<?php echo $_SESSION['email_id'];?> >
                                        </div>
                                        
                                             <div class="controls">
                                                Place : <input type="text" id="place" placeholder="Place"class="span5" value='<?php echo $_SESSION['place'];?>'>
                                                
                                            </div>
                                                 <div class="controls">
                                                House name : <input type="text" id="house_name" placeholder="house name"class="span5" value='<?php echo $_SESSION['house_name'];?>'>
                                                
                                            </div>
                                                 <div class="controls">
                                                Pin Code : <input type="text" id="pin" placeholder="pin"class="span5" value='<?php echo $_SESSION['pin'];?>'>
                                                
                                            </div>

                                             </div>
                                                 <div class="controls">
                                                District : <input type="text" id="district" placeholder="district "class="span5" value='<?php echo $_SESSION['district'];?>'>
                                                
                                            </div>
                                                 <div class="controls">
                                                State : <input type="text" id="state" placeholder="state"class="span5" value='<?php echo $_SESSION['state'];?>'>
                                                
                                            </div>

                                            <div class="controls">
                                                Gender : <input type="text" id="gender" placeholder="gender"class="span5" value='<?php echo $_SESSION['gender'];?>'>
                                                
                                            </div>





   <div class="controls">
                                                Date of Birth :<input  type="text" id="dob"  placeholder="yyyy-mm-dd" class="span5" value=<?php echo $_SESSION['dob'];?>  >
                                        </div>    
                                        <div class="controls">
                                                Age : <input type="text" id="age" placeholder="age"class="span5" value='<?php echo $_SESSION['age'];?>'>
                                                
                                            </div>           
                                        <div class="controls">
                                              Change Password :<input type="password" id="password" placeholder="password" class="span5" >          
                                            </div>
                                            <div class="controls">
                                                Confirm Password :<input type="password" id="cpassword" placeholder="Confirm password" class="span5" >
                                                
                                            </div>
                                                
                                            </div>
                                             
                                            <div class="control-group">
                                  <div class="controls clearfix">
                                    <div class="pull-left">
                  <a href="dashboard.php" class="btn btn-primary pull-left">BACK</a>
                </div>
                                    <button type="button" id="Btn_save" class="btn btn-success pull-right">SAVE</button>                          
                                </div>
                            </div>            
                                    </div>
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










