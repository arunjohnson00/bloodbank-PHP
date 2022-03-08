<?php
include('connect.php');
?>
<?php


$Serach=$_POST['bloodgroupQ'];

$sqlo="SELECT DISTINCT Street, District FROM donor WHERE Blood_group='$Serach'";
if($reqt=mysqli_query($connect,$sqlo)){
  while($af=mysqli_fetch_array($reqt)){

  echo '<option value="'.$af['Street'].'">'.ucfirst($af['Street']).'</option>';
  

}
}


?>