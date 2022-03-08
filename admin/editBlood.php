<?php
include('connect.php');

?>


<?php

  
  
  
  
  
  
  if(isset($_POST['button'])){
      $id=$_POST['id'];
   $uname=$_POST['name'];
  $bd=$_POST['blood_group'];
  
  
  
  $update="UPDATE donor SET name='$uname',blood_group='$bd' WHERE id='$id'";
  if(mysqli_query($connect,$update)){
      header('location:dashboard.php');
  };
   
   
  
  
  
  
  }
  
?>