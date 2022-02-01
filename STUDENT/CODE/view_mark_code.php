$sql="select * from mark order by reg_no; ";

  $result=$conn->query($sql);?>
                <table class="table">
                <table class="table table-striped" border="1" style="width:70%">                  
            <tr >
            <th>Register Number </th> 
             <th> Subject </th> 
            <th>Internal mark</th>
             <th>External mark  </th> 
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
                   echo "<td>".$row['int_mark']."</td>";
                    echo "<td>".$row['ext_mark']."</td>";
                   echo "<td>".$row['total']."</td>";

                    
                  echo "</tr>";
                echo "</tbody>";
                }
              }
              
                    ?>               
                </table>