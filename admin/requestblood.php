<?php
include('connect.php');
?>


<?php


$input = $_POST['bloodgroupQ'];

$sql = "SELECT * FROM request WHERE blood_group LIKE '$input%'";
if ($req = mysqli_query($connect, $sql)) {
  echo "<div id='deletede' style='color:red'></div><table class='table table-hover table-nowrap'>
    <thead class='thead-light' style='background-color: #f5f9fc;
    text-transform: uppercase;
    font-size :12px;
    font-weight: 500;
    color: #525f7f'>
    <tr>
    <th scope='col'style=' font-size: 1.02rem;font-weight: 500; text-transform: uppercase; letter-spacing: .025em; white-space: nowrap;'>Name</th>
        <th scope='col'style=' font-size: 1.02rem;font-weight: 500; text-transform: uppercase; letter-spacing: .025em; white-space: nowrap;'>Email</th>
        <th scope='col'style=' font-size: 1.02rem;font-weight: 500; text-transform: uppercase; letter-spacing: .025em; white-space: nowrap;'>Password</th>
        <th scope='col'style=' font-size: 1.02rem;font-weight: 500; text-transform: uppercase; letter-spacing: .025em; white-space: nowrap;'>Contact_no</th>
        <th scope='col'style=' font-size: 1.02rem;font-weight: 500; text-transform: uppercase; letter-spacing: .025em; white-space: nowrap;'>Blood Group</th>
        <th scope='col'style=' font-size: 1.02rem;font-weight: 500; text-transform: uppercase; letter-spacing: .025em; white-space: nowrap;'>Street</th>
        <th scope='col'style=' font-size: 1.02rem;font-weight: 500; text-transform: uppercase; letter-spacing: .025em; white-space: nowrap;'>District</th>
    </tr>
    </thead><tbody>";
  $i = 0;
  while ($ar = mysqli_fetch_array($req)) {
    $i++;
    echo "
<tr class='sbtable$i'>

<td style='font-size: small;'>" . $ar['name'] . "</td>
<td style='font-size: small;'>" . $ar['email'] . "</td>
<td style='font-size: small;'>" . $ar['password'] . "</td>
<td style='font-size: small;'>" . $ar['contact_no'] . "</td>
<td style='font-size: small;'>" . $ar['blood_group'] . "</td>
<td style='font-size: small;'>" . $ar['street'] . "</td>
<td style='font-size: small;'>" . $ar['district'] . "</td>
<td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#exampleModal$i'>
Edit
</button>

<!-- Modal -->
<div class='modal' id='exampleModal$i' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
 <div class='modal-dialog' role='document'>
   <div class='modal-content' style='background:#ffffff;margin-top: 50%;'>
     <div class='modal-header'>
       <h5 class='modal-title' id='exampleModalLabel' style='margin-right: 423px;'>EDIT</h5>
       <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
         <span aria-hidden='true'>&times;</span>
       </button>
     </div>
     <form action='requestedit.php' method='post'>
     <div class='modal-body'>
     
     <input name='id' type='text' value='" . $ar['id'] . "' hidden >
     <input name='name' type='text' value='" . $ar['name'] . "'style='border-radius:4px;border: 2px solid #cfd6df;width:242px;height: 46px;font-size:small;padding-left: 21px;'>
     
     <select name='blood_group' style='border-radius:4px;border: 2px solid #cfd6df;width:227px;height: 46px;font-size:small;padding-left: 21px;'>
     <option>Select a blood</option>
     
     <option value='A+'>A+</option>
     <option value='B+'>B+</option>
     <option value='O+'>O+</option>
     <option value='AB+'>AB+</option>
     <option value='A-'>A-</option>
     <option value='B-'>B-</option>
     <option value='O-'>O-</option>
     <option value='AB-'>AB-</option>
     </select>
     </div>
     <div class='modal-footer'>
       <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
       <button type='submit' name='button' class='btn btn-secondary'>submit</button>
     
      
     </div>
     </form>
   </div>
 </div>
</div></td>
<td>
<form action='blooddelete.php' id='deletereqe$i' method='post'>
<input id='reqe$i' name='deleteid' type='text' value='" . $ar['id'] . "' hidden>
<button type='submit' class='btn btn-danger'>Delete</button>
</form>


</tr>
";
?>


    <script>
      $(function() {
        $('#deletereqe<?php echo $i ?>').on('submit', function(e) {

          var BldGrpdlte = $('#reqe<?php echo $i ?>').val();
          console.log(BldGrpdlte)
          e.preventDefault();
          $.ajax({
            type: 'post',
            url: 'blooddelete.php',
            data: {
              'bloodgropdlt': BldGrpdlte
            },
            success: function(dataDeleted) {
              $('.sbtable<?php echo $i ?>').hide(500),
                $("#deletede").html(dataDeleted);
            }
          });
        });
      });
    </script>


<?php

  }
  echo "</tbody></table>";
}






?>