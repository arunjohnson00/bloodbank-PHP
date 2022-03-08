<?php
session_start();







include("connect.php");

  
if(isset($_POST['button'])){
 $email=$_POST['email'];
 $password=md5($_POST['password']);



$sql="SELECT * FROM donor WHERE Email='$email' AND Password='$password'";

if($req=mysqli_query($connect,$sql)){

  if(mysqli_num_rows($req)){
while($ar=mysqli_fetch_array($req)){

 
$_SESSION['userid']=$ar['id'];

   header('location:logindetails.php');
}




}





  
  
  
  
  }








}

/*elseif(isset($_POST['button'])){
 if($_POST["email"]=="admin@gmail.com"&&$_POST["password"]=="admin"){

 }

  
}*/


?>
