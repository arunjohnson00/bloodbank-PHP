






<div class="image">
    
      
    <a href="index.php" class="text-danger"><h4> logout<i class="fas fa-sign-out-alt"></i></h4></a>
  </div>




<?php
session_start();
session_unset();
session_destroy();
 if(!isset($_SESSION['userid'])){
    header('location:signup.php');
};

?>