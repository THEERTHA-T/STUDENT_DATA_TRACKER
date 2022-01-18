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
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<script src="JQuery/jquery3_4_1.min.js"></script>
            <script >
       $(document).ready(function() { 
              $("#Btn_submit").click(function(){
                $address=$("#address").val();
                $place=$("#place").val();
                $district=$("#district").val();
                $state=$("#state").val();
                $country=$("#country").val();
                $pin_code=$("#pin_code").val();
                $phone_no=$("#phone_no").val();
                $email_id=$("#email_id").val();
                $affiliation=$("#affiliation").val();
                $institution_type=$("#institution_type").val();
$.ajax({
                  url:"../CODE/institution_settings_code.php",
                  data:{'address' : $address, 'place' : $place, 'district' : $district,'state':$state,'country':$country,'pin_code':$pin_code,'phone_no':$phone_no,'email_id':$email_id,'affiliation':$affiliation,'institution_type':$institution_type},
                  dataType:"json",
                  type:"post",
                  success:function(datas)
                   {

                    alert(datas.Msg);
                    indow.location="institution_settings.php"
                  },error:function(d1)
                  {
                    alert("Something went wrong "+d1);
                    console.log(d1);
                  }
              });    
      });
            });
       </script>
         <style type="text/css">
      .middle
      {
        float:left;
        margin-left: 20%;
      }
    </style>
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
                                 <li><a href="add_course.php"><i class="menu-icon icon-paste"></i>Add Courses</a></li>
                                    </li>
                                 <li><a href="about_us.php"><i class="menu-icon icon-paste"></i>About us</a></li>
                               <li><a href="logout.php"><i class="menu-icon icon-bullhorn"></i>Logout</a>
                            </li>
                            </ul>
                    </div>
                </div>  
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<H1>	<font color="green">							
								INSTITUTION SETTINGS</font> </H1>
							</div>
							<div class="module-body">
								<div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                       College Name :<br> <input type="text"  id="institution_name" placeholder="Institution Name" class="span7"  value='<?php echo $_SESSION["college_name"]?>' readonly=""/>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Address :<br><input type="text"  id="address" placeholder="Address" class="span7">                    
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                       Place :<br> <input type="text"  id="place" placeholder="Location" class="span7">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                       District :<br><input type="text"  id="district" placeholder="District" class="span7">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      
                      <div class="controls"> State :<br>
                        <select tabindex="1" id="state" data-placeholder="Select" class="span7">
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
                       Country :<br><input type="text"  id="country" placeholder="country" class="span7" value="India">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Pin Code :<br><input type="text"  id="pin_code" placeholder="Pincode" class="span7">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Contact Number :<br><input type="text"  id="phone_no" placeholder="Contact number" class="span7">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Email ID :<br><input type="text"  id="email_id" placeholder="Email id" class="span7">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Affiliation :<br><input type="text"  id="affiliation" placeholder="Affiliated to" class="span7">
                        
                      </div>
                    </div>
                    <div class="control-group">
											
											<div class="controls">Institution Type :<br>
												<select tabindex="1" id="institution_type" data-placeholder="Select" class="span7">
                          <option selected>Select Instituition Type </option>
													<option >Government College</option>
													<option >Aided College</option>
													<option >Self Financing College</option>
																									</select>
											</div>
										</div>
                                        <div class="controls clearfix">
                                        	<div class="pull-left">
                  <a href="dashboard.php" class="btn btn-primary pull-left">BACK</a>
                </div>
                                    <button type="button" id="Btn_submit" class="btn btn-danger pull-right">ADD</button>                       </div>                
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