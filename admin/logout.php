<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/42d6c79ed8.js" crossorigin="anonymous"></script>
  <title>Document</title>
  <link rel="stylesheet" href="style/logoutstyle.css" type="text/css" />
</head>

<body>
  <div>

    <div class="image">


      <a href="index.php" class="text-danger">
        <h4> logout<i class="fas fa-sign-out-alt"></i></h4>
      </a>
    </div>
    <?php
    session_start();
    session_unset();
    session_destroy();
    if (!isset($_SESSION['id'])) {
      header('location:index.php');
    };

    ?>
  </div>
</body>

</html>