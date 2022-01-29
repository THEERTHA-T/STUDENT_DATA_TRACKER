  <?php
                       $dept_name= $_SESSION["dept_name"];
                    include 'db_config.php';
                    $conn=new mysqli($servername,$dbusername,$password1,$dbname);
                   $sql="select * from users where dept_name ='".$dept_name."'  ";
                    $result=$conn->query($sql);
                    ?>
                  
                      <div class="controls">
                        Tutor Name : <br>
                        <select tabindex="1" id="tutor_name"  class="span5">
                          <option selected="">Select Course</option>
                          <?php 
                          if($result->num_rows>0)
                          {
                            while($row=$result->fetch_assoc())
                            {
                              echo "<option>".$row['user_name']."</option>";
                            }
                          }
                          ?>
                          
                        </select>                        
                      </div>        
