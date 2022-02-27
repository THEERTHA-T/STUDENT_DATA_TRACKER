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
              
                $user_name=$("#user_name").val();
                $user_type=$("#user_type").val();
                $date1=$("#date1").val();
                $sub=$("#sub").val();
              $msg=$("#msg").val();
              
  if($user_name==""||$user_type==""||$date1==""||$sub==""||$msg=="") 
             { 
               alert("Mandatory Fields Missing");
               return;
               }
             
                $.ajax({
                  url:"../CODE/add_not_code.php",
                  data:{'user_name' : $user_name,'user_type' : $user_type,'date1' : $date1,'sub' : $sub,'msg':$msg},
                  dataType:"json",
                  type:"post",
                  success:function(datas) {

                    alert(datas.Msg);
                    window.location="add_not.php";
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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Student Data Tracking System </a>                    
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
                                   ADD NOTIFICATION</font></center>
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
                                                User Name : <input  type="text" id="user_name"  placeholder="UserName" class="span5" value=<?php echo $_SESSION['user_name'];?>  >
                                        </div> 
                                                      
                                        <div class="controls">
                                              Subject :<input type="text" id="sub" placeholder="subject" class="span5" >          
                                            </div>
                                            <div class="controls">
                                                 Date :<input type="Date" id="date1" placeholder=" Date" class="span5" >
                                                
                                            </div>
                                              <div class="controls">
                                                Message : <br> <input  type="text" id="msg"  placeholder="message" class="span5"  >
                                        </div> 
                                            
                                            <div class="control-group">
                                  <div class="controls clearfix">
                                    <div class="pull-left">
                  <a href="dashboard.php" class="btn btn-primary pull-left">BACK</a>
                </div>
                                    <button type="button" id="Btn_save" class="btn btn-success pull-right">ADD NOTIFICATION</button>                          
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










