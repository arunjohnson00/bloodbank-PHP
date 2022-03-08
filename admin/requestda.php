<?php
include('connect.php');

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/42d6c79ed8.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style/donordastyle.css" type="text/css" />
</head>

<body>





    <div class="demotable">
        <div class="table-responsive">
            <?php
   




$sql="SELECT * FROM request ";
if($req=mysqli_query($connect,$sql)){
    echo"<table class='table table-hover table-nowrap'>
    <thead class='thead-light' style='background-color: #f5f9fc;
    text-transform: uppercase;
    font-size :12px;
    font-weight: 500;
    color: #525f7f'>
    <tr>
    <th scope='col'style='font-size:small'>Name</th>
        <th scope='col'style='font-size:small'>Email</th>
        <th scope='col'style='font-size:small'>Password</th>
        <th scope='col'style='font-size:small'>Contact_no</th>
        <th scope='col'style='font-size:small'>Blood Group</th>
        <th scope='col'style='font-size:small'>Street</th>
        <th scope='col'style='font-size:small'>District</th>
    </tr>
    </thead>";
$i=0;
   while($ar=mysqli_fetch_array($req)){
    $i++;
echo " <tbody>
<tr class='sbtable'>


<td style='font-size:small'>".$ar['name']."</td>

<td style='font-size:small'>".$ar['email']."</td>
<td style='font-size:small'>".$ar['password']."</td>
<td style='font-size:small'>".$ar['contact_no']."</td>
<td style='font-size:small'>".$ar['blood_group']."</td>
<td style='font-size:small'>".$ar['street']."</td>
<td style='font-size:small'>".$ar['district']."</td>



     


</tr>
</tbody>";






   }
echo "</table>";
}






?>

        </div>
    </div>



</body>

</html>