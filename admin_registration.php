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
              $("#BTN-register").click(function(){
               //bck=$("#bck").val();
                $first_name=$("#first_name").val();
                  $last_name=$("#last_name").val();
                $user_name=$("#user_name").val();
              $password=$("#password").val();
                $cpassword=$("#cpassword").val();
                $phone_no=$("#phone_no").val();
              $email_id=$("#email_id").val();
              $college_name=$("#college_name").val();
              $qualification=$("#qualification").val();
              $dob=$("#dob").val();
              $place=$("#place").val();
              
            if($first_name==""||$last_name==""||$user_name==""||$password==""||$cpassword==""||$phone_no==""||$email_id==""||$college_name==""||$qualification==""||$dob==""||$place=="") 
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
                  url:"admin_registration_code.php",
                  data:{'first_name' : $first_name, 'last_name' : $last_name, 'user_name' : $user_name,'password':$password,'phone_no':$phone_no,'email_id':$email_id,'college_name':$college_name,'qualification':$qualification,'dob':$dob,'place':$place},
                  dataType:"json",
                  type:"post",
                  success:function(datas) {

                    alert(datas.Msg);
                    window.location="admin_registration.php";
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
                        <ul class="widget widget-menu ">
                            <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Home
                            </a></li>
                       
                            <li><a href="admin_registration.php"><i class="menu-icon icon-bullhorn"></i>Register</a>
                            </li>
                       
                              <li><a href="login.php"><i class="menu-icon icon-bullhorn"></i>Login</a>
                            </li>
                         </ul>
                         <br>
                           <ul class="widget widget-menu ">
                            <li><a href="contact.php"><i class="menu-icon icon-bullhorn"></i>Contact Us</a>
                            </li>
                      
                            <li><a href="about.php"><i class="menu-icon icon-bullhorn"></i>About Us</a>
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
              <h2><font color="green">ADMIN  REGISTRATION</font></h2>
             
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
                        <input type="text" id="first_name" placeholder="First Name" class="span5">
                        
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="last_name" placeholder="Last Name" class="span5">
                        
                      </div>
                    </div>

                    <div class="control-group">

                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="user_name" placeholder="User Name" class="span5">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="password" id="password" placeholder="Password" class="span5">
                      </div>  
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="password" id="cpassword" placeholder="Confirm Password" class="span5">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="phone_no" placeholder="Mobile Number" class="span5">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="email_id" placeholder="Email id" class="span5">
                        
                      </div>
                      <br>
                      <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="college_name" placeholder="Institution Name" class="span5">
                        
                      </div>

                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="qualification" placeholder="Qualification " class="span5">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="Date" id="dob" placeholder="yyyy-mm-dd" class="span5">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <input type="text" id="place" placeholder="place" class="span5">
                        
                      </div>
                    </div>
                    <div class="control-group">
                    </div>
              <div class="control-group">
                <div class="span5">
                  <div class="pull-left">
                  <a href="index.php" class="btn btn-primary pull-left">BACK</a>
                </div>
                  <input type="BUTTON" class="btn btn-success pull-right" value="REGISTER" id="BTN-register" >
                  
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