

<?php
include('connect.php');
    $dltid= $_POST['bloodgroupdlt'];

$sqli="DELETE FROM donor WHERE id='$dltid'";
if(mysqli_query($connect,$sqli)){

    echo "Donor has been deleted.";
 
};





?>