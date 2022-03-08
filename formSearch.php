
<?php
include('connect.php');
?>

<?php
   


$street=$_POST['street'];
  $blood=$_POST['blood'];


$sql="SELECT * FROM donor WHERE  Blood_group='$blood' AND Street='$street' ";

if($req=mysqli_query($connect,$sql)){

    echo"<table class='table'>
    

<tr class='subtable'>


<th>Name</th>

<th>Email</th>

<th>Contact_no</th>
<th>Blood_group</th>
<th>Street</th>
<th>District</th>

</tr>
";
   while($ar=mysqli_fetch_array($req)){
echo " 
<tr class='sbtable'>


<td>".$ar['Name']."</td>

<td>".$ar['Email']."</td>

<td>".$ar['Contact_no']."</td>
<td>".$ar['Blood_group']."</td>
<td>".$ar['Street']."</td>
<td>".$ar['District']."</td>

</tr>
";






   }
echo "</table>";
}




if(isset($_GET['id'])){
  $id= $_GET['id'];

$sqli="SELECT * FROM donor WHERE id='$id'";
if($re=mysqli_query($connect,$sqli)){
    while($abc=mysqli_fetch_array($re)){

$name=$abc['Name'];
$blod=$abc['Blood_group'];


    }


}
if(isset($_POST['button'])){
 $uname=$_POST['name'];
$bd=$_POST['blood_group'];



$update="UPDATE donor SET name='$uname',blood_group='$bd' WHERE id='".$_GET['id']."'";
if(mysqli_query($connect,$update)){
  header('location:home.php');
};
 
 




}
}





?>