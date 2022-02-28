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
                 $dept_name=$("#dept_name").val();
                $course_name=$("#course_name").val();
                $user_name=$("#user_name").val();
                $matter=$("#matter").val();
                $date1=$("#date1").val();
              
  if($dept_name==""||$course_name==""||$user_name==""||$matter==""||$date1=="") 
             { 
               alert("Mandatory Fields Missing");
               return;
               }
             
                $.ajax({
                  url:"../CODE/cb_code.php",
                  data:{'dept_name' : $dept_name,'course_name' : $course_name,'user_name' : $user_name,'matter' : $matter,'date1':$date1},
                  dataType:"json",
                  type:"post",
                  success:function(datas) {

                    alert(datas.Msg);
                    window.location="cb.php";
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
                                   RAISE YOUR COMPLAINT</font></center>
                                </h1>
                                <div class="module">
                            <div class="module-head">                               
                                <img src="images/user.png">                        
                            </div>
                            <div class="module-body">
                              <div class="control-group">                              
                                            <div class="controls">
                                               Department Name :  <input type="text" id="dept_name" placeholder="dept_name" class="span5" value='<?php echo $_SESSION['dept_name'];?>' >                                                
                                            </div>
                                          
                                            <div class="controls">
                                                Course Name : <input  type="text" id="course_name"  placeholder="course_name" class="span5" value=<?php echo $_SESSION['course_name'];?>  >
                                        </div> 
                                         <div class="controls">
                                                Student Name : <input  type="text" id="user_name"  placeholder="user_name" class="span5" value=<?php echo $_SESSION['user_name'];?>  >
                                        </div>
                                                      
                                        <div class="controls">
                                              Matter :<input type="text" id="matter" placeholder="subject" class="span5" >          
                                            </div>
                                            <div class="controls">
                                                 Date :<input type="Date" id="date1" placeholder=" Date" class="span5" >
                                                
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










