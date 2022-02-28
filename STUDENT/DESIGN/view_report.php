<?php
include 'db_config.php';
$conn=new mysqli($servername,$dbusername,$password1,$dbname);
$dept="select distinct * from department";
$d_query=mysqli_query($conn,$dept);
?>
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
              $("#Btn-check").click(function(){
               
              $dept_name=$("#dept_name").val();
              $course_name=$("#course_name").val();
              $sem=$("#sem").val();
              $sub_name=$("#sub_name").val();

            
          $.ajax({
                  url:"../CODE/view_report_code.php",
                  data:{'dept_name':$dept_name,'course_name':$course_name,'sem':$sem,'sub_name' : $sub_name},
                  dataType:"json",
                  type:"post",
                  success:function(datas) {
 //console.log("ok"+datas.count1);
    // console.log(datas.Msg);
   $("#tot_1").val(datas.tot_1);
   $("#tot_2").val(datas.tot_2);
   $("#pass").val(datas.pass);
   $("#fail").val(datas.fail);

                 
                  },error:function(d1)
                  {
                    alert("error"+d1);
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
            Student Data Tracking System
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
        <div class="span9">
          <div class="content">
            <div class="module">
              <div class="module-head">
                <form method="POST" action="view_mark.php">
                <H1>  <font color="green">              
                 VIEW MARK</font> </H1>
              </div>
             
                   <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                       &nbsp;&nbsp;&nbsp; Department Name :<br>    
                        &nbsp;&nbsp;&nbsp;<select tabindex="1" id="dept_name"  class="span5">
                          <option selected="">Select department</option>
                          <?php while($row=mysqli_fetch_assoc($d_query)): ?>
                            <option value="<?php echo $row['dept_name']; ?>"> <?php echo $row['dept_name']; ?> </option>
                          <?php endwhile; ?>
                          </select>
                      </div>

              <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                       &nbsp;&nbsp;&nbsp; course Name :<br>    
                        &nbsp;&nbsp;&nbsp;<select tabindex="1" id="course_name" name="course_name" class="span5">
                          <option selected="">Select course</option>                          
                          </select>
                      </div>

                          <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                       &nbsp;&nbsp;&nbsp; Semester :<br>    
                        &nbsp;&nbsp;&nbsp;<select tabindex="1" id="sem" name="sem" class="span5">
                          <option selected="">Select sem</option>                          
                          </select>
                      </div>

                      <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                       &nbsp;&nbsp;&nbsp; Subject :<br>    
                        &nbsp;&nbsp;&nbsp;<select tabindex="1" id="sub_name" name="sub_name" class="span5">
                          <option selected="">Select subject</option>                          
                          </select>
                      </div>
                                                          <div class="controls clearfix">
                                          <div class="pull-left">
                  <a href="dashboard.php" class="btn btn-primary pull-left">BACK</a>
                </div>
                                    <button type="button" id="Btn-check" class="btn btn-danger pull-right">CHECK</button>                       </div>                        </form>
      
                </div><!--/.stream-list-->
              </div><!--/.module-body-->
            </div><!--/.module-->
          </div><!--/.content-->
        </div><!--/.span9-->
      </div>
    </div><!--/.container-->
  </div><!--/.wrapper-->
  <font color="red"><u><h1><center>INTERNAL MARK REPORT<center></h1></u></font>
                       <div class="module-body">
                <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <BR><br>
                      Total Number of students (series 1):<br> &nbsp;&nbsp;<input type="text" id="tot_1"  readonly="" class="span5" >
                      </div>
                       <div class="controls">
                      Total Number of students (series 2):<br> &nbsp;&nbsp;<input type="text" id="tot_2"  readonly="" class="span5" >
                      </div>
                       <div class="controls">
                         <div class="controls">
                     Pass Percentage : <br>&nbsp;&nbsp;<input type="text" id="pass"  class="span5" readonly="">
                      </div>
                       <div class="controls">
                      Total Number of Failed Students :<br> &nbsp;&nbsp;<input type="text" id="fail"  class="span5" readonly="" >
                      </div>
                    
  <div class="footer">
    <div class="container">      
      <b class="copyright">
    </div>
  </div>
  <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    $('#dept_name').on('change',function(){
      var dept_name=this.value;
      //console.log(dept_name);
      $.ajax({
        url:'course_set.php',
        type:"POST",
        data:{
          dept_name:dept_name
        },
        success:function(result){
          $('#course_name').html(result);
          console.log(result);
        }
      })
    
    });

    $('#course_name').on('change',function(){
      var course_name=this.value;
      //console.log(dept_name);
      $.ajax({
        url:'sem_set.php',
        type:"POST",
        data:{
          course_name:course_name
        },
        success:function(result){
          $('#sem').html(result);
          console.log(result);
        }
      })
    
    });



    $('#sem').on('change',function(){
      var sem=this.value;
      //console.log(dept_name);
      $.ajax({
        url:'sub_set.php',
        type:"POST",
        data:{
          sem:sem
        },
        success:function(result){
          $('#sub_name').html(result);
          console.log(result);
        }
      })
    
    });
 
  </script>
  
    
  </table>
</body>