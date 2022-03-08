 <div class="table-responsive">
     <?php





        $sql = "SELECT * FROM donor ";
        if ($req = mysqli_query($connect, $sql)) {
            echo "<table class='table table-hover table-nowrap'>
       <thead class='thead-light' style='background-color: #f5f9fc;
       text-transform: uppercase;
       font-size :20px;
       font-weight: 500;
       color: #525f7f'>
       <tr>
       <th scope='col'style='font-size:small'> donar Name</th>
           <th scope='col' style='font-size:small'>Email</th>
         
           <th scope='col'style='font-size:small'>Contact_no</th>
           <th scope='col'style='font-size:small'>Blood Group</th>
       
       </tr>
       </thead>";


            while ($ar = mysqli_fetch_array($req)) {

                echo " <tbody>
   <tr class='sbtable'>
   
   
   <td style='font-size:small'>" . $ar['Name'] . "</td>
   
   <td style='font-size:small'>" . $ar['Email'] . "</td>
  
   <td style='font-size:small'>" . $ar['Contact_no'] . "</td>
   <td style='font-size:small'>" . $ar['Blood_group'] . "</td>
  
   
   
        
   
   
   </tr>
   </tbody>";
            }
            echo "</table>";
        }






        ?>
 </div>