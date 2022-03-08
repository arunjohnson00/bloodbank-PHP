<?php
include('connect.php');
?>
<?php

if(isset($_POST['id'])){
    $id= $_POST['id'];
 
 $sqli="SELECT * FROM request WHERE id='$id'";
 if($re=mysqli_query($connect,$sqli)){
     while($abc=mysqli_fetch_array($re)){
 
         $Nme=$abc['name'];
 $blod=$abc['blood_group'];
 
 
     }
 
 
 }
 if(isset($_POST['button'])){
 
 
 $nme=$_POST['name'];
 $bld=$_POST['blood_group'];
 
 $update="UPDATE request SET name='$nme',blood_group='$bld' WHERE id='$id'";
 if(mysqli_query($connect,$update)){
 
    // header('location:request.php');
 }
 
 
 
 }
 
 }
?>