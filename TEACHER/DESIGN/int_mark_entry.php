<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STUDENT DATA TRACKING SYSTEM</title>
  <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link type="text/css" href="css/theme.css" rel="stylesheet">
  <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
  <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
                <script src="JQuery/jquery3_4_1.min.js"></script>
            <script >
            $(document).ready(function() { 
              $("#Btn_save").click(function(){
                $dept_name=$("#dept_name").val();
                $reg_no=$("#reg_no").val();  
                $course_name=$("#course_name").val();  
                $sem=$("#sem").val();  
                $sub_name=$("#sub_name").val();
                  $attendance=$("#attendance").val();
                $series1=$("#series1").val();
                $series2=$("#series2").val();
                $tot_series=$("#tot_series").val();
                 $assignment=$("#assignment").val();
                $total=$("#total").val();
    
     if($reg_no==""||$course_name==""||$sem==""||$sub_name==""||$attendance==""||$series1==""||$series2==""||$tot_series==""||$assignment==""||$total=="") 
             { 
               alert("Mandatory Fields Missing");
               return;
               }

               if($attendance>8)
               {
                alert("Attendance should be lesser than or equal to 8");
                return;
               }
               else if($series1>20)
               {
                alert("Series 1 mark should be less than or equal to 20");
                return;
               }
                 else if($series2>20)
               {
                alert("Series 2 mark should be less than or equal to 20");
                                return;

               }
                 else if($assignment>20)
               {
                alert("assignment mark should be less than or equal to 12");
                                return;

               }
          $.ajax({
                  url:"../CODE/int_mark_entry_code.php",
                  data:{'dept_name' : $dept_name, 'reg_no' : $reg_no,'course_name' : $course_name,'sem' : $sem,'sub_name':$sub_name,'attendance':$attendance,'series1':$series1,'series2':$series2,'tot_series':$tot_series,'assignment':$assignment,'total':$total},
                  dataType:"json",
                  type:"post",
                  success:function(datas) {

                    alert(datas.Msg);
                    window.location="int_mark_entry.php";
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
                                 <li><a href="about_us.php"><i class="menu-icon icon-paste"></i>About us</a></li>
                               <li><a href="logout.php"><i class="menu-icon icon-bullhorn"></i>Logout</a>
                            </li>
                            </ul>
                    </div>
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->
 <div class="span5">
                    <div class="middle">     
            <div class="module-head">
               <a class="media-avatar pull-left">
                                                <img src="images/user.png">
                                            </a>
              <h2><font color="green">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;INTERNAL MARK ENTRY</font></h2>
             
            </div>
            <div></div>
            <div class="module-body">
              <div class="control-group">
                <div class="controls row-fluid">
            <div class="control-group">
                    <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        <br><br>
                      Department Name:<br><input type="text" id="dept_name"  placeholder="Dept name" class="span5"  value='<?php echo $_SESSION["dept_name"]?>' >
                      </div>
                    </div>
                      <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Register Number:<br>
                        <input type="text" id="reg_no" placeholder="Register number" class="span5">
                      </div>  
                    </div>
                   
                    <?php
                    include 'db_config.php';
                    $conn=new mysqli($servername,$dbusername,$password1,$dbname);
                                           $dept_name= $_SESSION["dept_name"];

                   $sql="select * from course where dept_name='".$dept_name."';";
                    $result=$conn->query($sql);
                    ?>
                  
                      <div class="controls">
                        Course Name : <br>
                        <select tabindex="1" id="course_name"  class="span5">
                          <option selected="">Select course</option>
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
                       Select Semester :<br> 
                        <select tabindex="1" id="sem" data-placeholder="Select" class="span5">
                          <option selected>Select Semester</option>
                                                                                      
                           </select>
                        
                      </div>

                       <label>Subject :</label>
                       <select id="sub_name" class="span5">
                         <option>select subject</option>
                       </select>
                         <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                         Attendance Mark:<br>
                        <input type="text" id="attendance" placeholder=" attendance (out of 8)" class="span5" onkeyup="sum2();">
                      </div>  
                    </div>

                        <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        First series Mark :<br>
                        <input type="text" id="series1" placeholder=" series 1 (out of 20)" class="span5" onkeyup="sum1();">
                      </div>  
                    </div>

                     <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                         Second Series Mark:<br>
                        <input type="text" id="series2" placeholder=" series 2 (out of 20)" class="span5" onkeyup="sum1();">
                      </div>  
                    </div>

                     <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                         Total Series Mark:<br>
                        <input type="text" id="tot_series" placeholder=" total mark" class="span5" readonly=""  onkeyup="sum1();">
                      </div>  
                    </div>

                      <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                        Assignment :<br>
                        <input type="text" id="assignment" placeholder=" assignment (out of 12)" class="span5" onkeyup="sum2();">
                      </div>  
                    </div>
                     <div class="control-group">
                      <label class="control-label" for="basicinput"></label>
                      <div class="controls">
                         Total internal mark:<br>
                        <input type="text" id="total" placeholder="Total(out of 40)" class="span5" readonly="" onkeyup="sum2();">
                      </div>  
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


    <div class="module-body">

      <br><br>
     <h1>INTERNAL MARK LIST</h1><br><br>
              <?php
include 'db_config.php';

$conn=new mysqli($servername,$dbusername,$password1,$dbname);

$sql="select * from int_mark order by reg_no; ";

  $result=$conn->query($sql);?>
                <table class="table">
                <table class="table table-striped" border="1" style="width:70%">                  
            <tr >
          <th>Register Number </th> 
             <th> Subject </th> 
            <th>Attendance mark</th>
             <th>Series mark  </th> 
            <th>Assignment mark </th>                
              <th>Total mark </th>                

                                 
  
                  
                </tr>
<?php
                  
   if($result->num_rows>0)
   {
     while($row=$result->fetch_assoc())
     {
                 
                  echo "<tbody>";
                  echo "<tr>";
                  echo "<td>".$row['reg_no']." </td>";
                   echo "<td>".$row['sub_name']."</td>";
                   echo "<td>".$row['attendance']."</td>";
                    echo "<td>".$row['tot_series']."</td>";
                   echo "<td>".$row['assignment']."</td>";
                                      echo "<td>".$row['total']."</td>";


                    
                  echo "</tr>";
                echo "</tbody>";
                }
              }
              
                    ?>               
                </table>

  <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      function loadData(type,category_id){
          $.ajax({
            url:"int_mark_entry_1.php",
            type:"POST",
            data:{type:type,id:category_id},
            success:function(data){
              if(type=="sub_name"){
                  $("#sub_name").html(data);
              }else{
                  $("#sem").append(data);
              }
              //$("#sem").append(data);

            }
          });
      }
      loadData();
      $("#sem").on("change",function(){
        var sem=$("#sem").val();
        loadData("sub_name",sem);
      })
    });

  </script>
  <script type="text/javascript">
    function sum1()
    {
      var txt1=document.getElementById('series1').value;
            var txt2=document.getElementById('series2').value;
            var res=(parseInt(txt1)+parseInt(txt2))/2;
            if(!isNaN(res))
            {
              document.getElementById('tot_series').value=res;
            }

    }

    function sum2()
    {
      var txt1=document.getElementById('attendance').value;
      var txt2=document.getElementById('tot_series').value;
      var txt3=document.getElementById('assignment').value;
       var res=parseInt(txt1)+parseInt(txt2)+parseInt(txt3);

if(!isNaN(res))
            {
              document.getElementById('total').value=res;
            }
    }
  </script>
    <div class="footer">
    <div class="container">
        </div>
  </div>
</body>