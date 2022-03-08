
<?php

session_start();
//if(isset($_POST['btn'])){
  

$imgloca="img/";
 $loca=$imgloca.$_FILES['upload']['name'];


$connect=mysqli_connect("localhost","root","","mydonor");
$sql="update donor set image='$loca' where id='".$_SESSION['userid']."'";
if(mysqli_query($connect,$sql)){
    echo "succes";
 move_uploaded_file($_FILES['upload']['tmp_name'],$loca);
 header('location:logindetails.php');
}
else{echo mysqli_error($connect);}
//}
?>






