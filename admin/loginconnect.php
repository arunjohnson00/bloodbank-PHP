<?php
session_start();







include("connect.php");

  
if(isset($_POST['btn'])){
  $email=$_POST['eml'];
 $password=md5($_POST['pass']);



$sql="SELECT * FROM admin WHERE Email='$email' AND Password='$password'";

if($req=mysqli_query($connect,$sql)){

  if(mysqli_num_rows($req)){
while($ar=mysqli_fetch_array($req)){

 
$_SESSION['id']=$ar['id'];

   header('location:dashboard.php');
}




}





}






}

/*elseif(isset($_POST['button'])){
 if($_POST["email"]=="admin@gmail.com"&&$_POST["password"]=="admin"){

 }

  
}*/


?>
