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
                $first_name=$("#first_name").val();
                  $last_name=$("#last_name").val();
                $user_name=$("#user_name").val();
                $user_type=$("#user_type").val();
                $qualification=$("#qualification").val();
                $dob=$("#dob").val();
              $password=$("#password").val();
                $cpassword=$("#cpassword").val();
                $place=$("#place").val();
                $phone_no=$("#phone_no").val();
              $email_id=$("#email_id").val();
              $college_name=$("#college_name").val();
              $dept_name=$("#dept_name").val();
              $status=$("#status").val();

              if($password!=$cpassword)
             {
               alert("password mismatch");
               return;
             }
            
          $.ajax({
                  url:"../CODE/edit_profile_code.php",
                  data:{'first_name' : $first_name, 'last_name' : $last_name, 'user_name' : $user_name,'user_type' : $user_type,'qualification' : $qualification,'dob' : $dob,'password':$password,'place' : $place,'phone_no':$phone_no,'email_id':$email_id,'college_name':$college_name,'dept_name' : $dept_name,'status':$status},
                  dataType:"json",
                  type:"post",
                  success:function(datas) {

                    alert(datas.Msg);
                    window.location="../../login.php";
                  },error:function(d1)
                  {
                    alert(""+d1);
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
                                <li><a href="stud_details.php"><i class="menu-icon icon-bullhorn"></i>View Student details</a>
                            </li>
                            <li><a href="view_mark_1.php"><i class="menu-icon icon-bullhorn"></i>Mark view</a>
                            </li>
                                <li><a href="add_not.php"><i class="menu-icon icon-bullhorn"></i>Add Notifications</a>
                            </li>
                             <li><a href="view_not.php"><i class="menu-icon icon-bullhorn"></i>View Notifications</a>
                            </li>
                            <li><a href="view_report.php"><i class="menu-icon icon-book"></i> view Report</a></li>

                   
                               
                                    </li>
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
                                               User Type :  <input type="text" id="user_type" placeholder="UserType" class="span5" value='<?php echo $_SESSION['user_type'];?>' >                                                
                                            </div>
                                            <div class="controls">
                                                First Name : <input  type="text" id="first_name" placeholder="First Name" class="span5" value=<?php echo $_SESSION['first_name'];?>  >
                                        </div>
                                        <div class="controls">
                                                Last Name : <input  type="text" id="last_name" placeholder="Last Name" class="span5" value=<?php echo $_SESSION['last_name'];?> >
                                        </div>
                                            <div class="controls">
                                                User Name : <input  type="text" id="user_name"  placeholder="UserName" class="span5" value=<?php echo $_SESSION['user_name'];?>  >
                                        </div> 
                                          <div class="controls">
                                                Qualification :<input  type="text" id="qualification"  placeholder="qualification" class="span5" value=<?php echo $_SESSION['qualification'];?>  >
                                        </div>  
                                         <div class="controls">
                                                Date of Birth :<input  type="text" id="dob"  placeholder="yyyy-mm-dd" class="span5" value=<?php echo $_SESSION['dob'];?>  >
                                        </div>               
                                        <div class="controls">
                                              Change Password :<input type="password" id="password" placeholder="password" class="span5" >          
                                            </div>
                                            <div class="controls">
                                                Confirm Password :<input type="password" id="cpassword" placeholder="Confirm password" class="span5" >
                                                
                                            </div>
                                              <div class="controls">
                                                Place : <br> <input  type="text" id="place"  placeholder="place" class="span5" value=<?php echo $_SESSION['place'];?>  >
                                        </div> 
                                            <div class="controls">
                                                Email ID :<br> <input  type="text" id="email_id"  placeholder="Email id" class="span5" value=<?php echo $_SESSION['email_id'];?> >
                                        </div>
                                        <div class="controls">
                                                Phone Number : <input  type="text" id="phone_no"  placeholder="Phone Number"class="span5" value=<?php echo $_SESSION['phone_no'];?> >
                                        </div>
                                            <div class="controls">
                                                College Name : <input type="text" id="college_name" placeholder="Institution Name"class="span5" value='<?php echo $_SESSION['college_name'];?>' readonly="">
                                                
                                            </div>
                                             <div class="controls">
                                                Department Name : <input type="text" id="dept_name" placeholder="Department Name"class="span5" value='<?php echo $_SESSION['dept_name'];?>'>
                                                
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










