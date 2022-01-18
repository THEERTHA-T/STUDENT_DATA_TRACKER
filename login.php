<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>STUDENT TRACKING SYSTEM</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	 <link type="text/css" href="css/theme1.css" rel="stylesheet"> 
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<script src="sweetalert/sweetalert.min.js"></script>
	     <script src="JQuery/jquery3_4_1.min.js"></script> 
            <script >
            $(document).ready(function() { 
            	$("#Btn_login").click(function(){
            		$user_name=$("#user_name").val();
            			$password=$("#password").val();
            			if($user_name==""||$password=="")
            			{swal('Field missing' );
            				//alert('Field missing'); 
            			    return;
            			}
                  $.ajax({
                  	url:"login_code.php",
                    data:{'user_name' : $user_name,'password' : $password},
                    dataType:"json",
                    type:"post",
                    success:function(datas) 
                    {
                    	
          	      	if(datas.Msg==1)
          	      	{
          	      		window.location="ADMIN/DESIGN/dashboard.php";
          	      	}
          	      	else if(datas.Msg==2)
          	      	{
          	      		window.location="_HOD/DESIGN/dashboard.php";
          	      	}
          	      	else if(datas.Msg==3)
          	      	{
          	      		window.location="_PRINCIPAL/dashboard.php";
          	      	}
          	      	else if(datas.Msg==4)
          	      	{
          	      		window.location="_TEACHER/DESIGN/dashboard.php";
          	      	}
          	      },error:function(d1)
          	      {    if(d1=="[object Object]")
          	              {
          	              	swal("Invalid username or password.!");
          	              } 
          	      	console.log(d1);
          	      }
          	  });
      });
            });
        </script>
</head>
<body background="images/login.jpg">
	

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>
			  	<a class="brand" href="index.html">
			  		STUDENT TRACKING SYSTEM	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">				
					<ul class="nav pull-right">
						<li><a href="admin_register.php">
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
				<div class="module module-login span4 offset4">
					<form class="form-vertical">
						<div class="module-head">
							<h3><center>LOGIN</center></h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
						<div class="control-group">
																
									<input class="span12" type="text" id="user_name" placeholder="Username">
								</div>
							</div>
							<br>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="password" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="button" id="Btn_login" class="btn btn-primary pull-right">Login</button>
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

<!--			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.-->
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>