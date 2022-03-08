<?php
include('connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style/donorastyle.css" type="text/css"/>
   
</head>
<body>
 <!-- <a href="home.php" class="ad" ><h4>back</h4></a>-->
  
<div class="margin">
   <form id="searchForm" action="formSearch.php" method="post" >



   <select name="blood" class="inp" id="BoodGroup">
<option >Select A Blood</option>
  
  <?php


$sqlp="SELECT DISTINCT Blood_group FROM donor ";
if($reqq=mysqli_query($connect,$sqlp)){
  while($ae=mysqli_fetch_array($reqq)){

  echo '<option value="'.$ae['Blood_group'].'">'.$ae['Blood_group'].'</option>';
  

}
}
?>
</select>












<select name="street" class="street"  id="locationResult">
<option >Select A Street</option>


</select>
<button type="submit" name="search" class="btn">Search</button>


</form>
</div>




<div class="demotable" style="overflow-x:auto;" id="searchTable">

</div>


<script>
      $(function () {$('#searchForm').on('submit', function (e) {

          e.preventDefault();
           $.ajax({
            type: 'post',
            url: 'formSearch.php',
            data: $('#searchForm').serialize(),
            success: function (dataIn) {
             
$("#searchTable").html(dataIn);
 }
          }); }); });




 $(function () {$('#BoodGroup').on('change', function (e) {

 var BldGrp= $('#BoodGroup').val();
e.preventDefault();
 $.ajax({
  type: 'post',
  url: 'streetSelect.php',
  data: {'bloodgroupQ':BldGrp},
  success: function (dataS) {
   
$("#locationResult").html(dataS);
}
}); }); });


    </script>
<?php
if(isset($_GET['id'])){
echo '<form action="" method="post">
<input name="name" type="text" value="'.$name.'">
<input name="blood_group" type="text" value="'.$blod.'">
<input name="blood_group" type="text" value="'.$serchdist.'">
<button type="submit" name="button" style="color:white;background:red;border:none">submit</button>

</form>';
}
//include('donorform.php')
?>


<!--<a href="login.php"><h3>Logout</h3></a>-->



</body>
</html>