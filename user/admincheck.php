<?php
session_start();
include("connect.php");





if(isset($_POST['btn'])){
  
     echo $mail=$_POST['mail'];
   
    echo $pass=md5($_POST['pass']);
 
   $connect=mysqli_connect("localhost","root","","mydonor");
   $sqli="INSERT INTO admin(Email,Password) VALUES('$mail','$pass')";
   if(mysqli_query($connect,$sqli)){
    echo "sucess";
    header('location:signup.php');
   }
  
if(isset($_POST['button'])){
 $email=$_POST['email'];
 $password=md5($_POST['password']);



$sql="SELECT * FROM admin WHERE Email='$email' AND Password='$password'";

if($req=mysqli_query($connect,$sql)){

  if(mysqli_num_rows($req)){
while($ar=mysqli_fetch_array($req)==1){

 
$_SESSION['id']=$ar['id'];

  
header('location:dashboard.php');
}




}


}

}}
