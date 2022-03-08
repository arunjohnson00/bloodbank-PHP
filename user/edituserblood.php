<?php
include('connect.php');

?>


<?php
if (isset($_POST['id'])) {
  $id = $_POST['id'];

  $sqli = "SELECT * FROM donor WHERE id='$id'";
  if ($re = mysqli_query($connect, $sqli)) {
    while ($abc = mysqli_fetch_array($re)) {

      $name = $abc['Name'];
      $blod = $abc['Blood_group'];
    }
  }






  if (isset($_POST['button'])) {
    $id = $_POST['id'];
    $uname = $_POST['name'];
    $bd = $_POST['blood_group'];



    $update = "UPDATE donor SET name='$uname',blood_group='$bd' WHERE id='$id'";
    if (mysqli_query($connect, $update)) {
      header('location:logindetails.php');
    };
  }
}
?>