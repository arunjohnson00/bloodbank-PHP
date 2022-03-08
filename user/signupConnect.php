<?php


if(isset($_POST['btn'])){
 echo $username=$_POST['users'];
  echo $mail=$_POST['mail'];

 echo $pass=md5($_POST['pass']);
 
  echo $contact=$_POST['repass'];
 echo $bld=$_POST['bld'];
  echo $street=$_POST['str'];
 echo  $district=$_POST['dst'];
 $loca=$_FILES['upload']['name'];
$connect=mysqli_connect("localhost","root","","mydonor");
$sqli="INSERT INTO donor(Name,Email,Password,Contact_no,Blood_group,Street,District,image) VALUES('$username','$mail','$pass','$contact','$bld','$street','$district','$loca')";
if(mysqli_query($connect,$sqli)){
 echo "sucess";
 header('location:signup.php');
}
else{
  echo mysqli_error($connect);
}



}

?>

