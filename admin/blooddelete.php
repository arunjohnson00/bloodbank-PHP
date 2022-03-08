<?php

include('connect.php');

   $dltid= $_POST['bloodgropdlt'];

$sqli="DELETE FROM request WHERE id='$dltid'";
if(mysqli_query($connect,$sqli)){
    echo "Request has been deleted.";
};



?>
