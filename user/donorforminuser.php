<?php
if(isset($_POST['signup'])){
$name=$_POST['name'];
$email=$_POST['email'];
$pass=md5($_POST['password']);
$number=$_POST['contact'];
$bloodgroup=$_POST['blood_group'];
$street=$_POST['street'];
$district=$_POST['dist'];

$connect=mysqli_connect("localhost","root","","mydonor");
$sql="INSERT INTO donor (name,email,password,contact_no,blood_group,street,district) VALUES('$name','$email','$pass','$number','$bloodgroup','$street','$district')";
if(mysqli_query($connect,$sql)){
header('location:dashboarduser.php');
}
}




?>
