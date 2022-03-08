<?php
session_start();




if (isset($_SESSION['id'])) {

  header('location:dashboard.php');
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

  <title>Document</title>
  <link rel="stylesheet" href="style/loginstyle.css" type="text/css" />
</head>

<body>

  <div class="row">
    <div class="col-md-6 mx-auto p-0">

      <form id="myForm" action="loginconnect.php" method="post">

        <div class="card">
          <div class="login-box">
            <div class="login-snip"><input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" id="Login">Admin Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab" id="signUp"></label>
              <div class="login-space">
                <div class="login">
                  <div class="group"> <label for="email" class="label">Email</label> <input id="email" type="text" class="input" placeholder="Enter your email" name="eml" required value="admin@gmail.com"> </div>
                  <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" class="input" placeholder="Enter your password" name="pass" required value="admin"> </div>
                  <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div>
                  <div class="group"> <input type="submit" class="button" name="btn" value="Sign In"> </div>
                  <div class="hr"></div>
                  <div class="foot"> <label for="tab-2">Not A Member?</label> </div>
                </div>
      </form>


    </div>
  </div>
</body>

</html>








</body>

</html>