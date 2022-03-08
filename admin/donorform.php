<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/donorform.css" type="text/css" />
  <title>Document</title>

</head>

<body>
  <?php
  //include('logout.php');
  ?>


  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <form class="form-horizontal" action="donorformin.php" method="post">
    <fieldset>

      <!-- Form Name -->

      <legend class="aa">Donote Blood</legend>
      <div class="image">
        <!-- Text input-->

        <div class="ac">

          <div class="form-group">
            <label class="col-md-4 control-label" for="name">Name</label>
            <div class="col-md-4">
              <input id="name" name="name" type="text" placeholder="Enter your name" class="form-control input-md" required="" style="height: 50px;">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-4">
              <input id="email" name="email" type="text" placeholder="Enter your email id" class="form-control input-md" required="" style="height: 50px;">

            </div>
          </div>

          <!-- Password input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="password">Password</label>
            <div class="col-md-4">
              <input id="password" name="password" type="password" placeholder="Enter a password" class="form-control input-md" required="" style="height: 50px;">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="contact">Contact no.</label>
            <div class="col-md-4">
              <input id="contact" name="contact" type="text" placeholder="Enter your contact no." class="form-control input-md" required="" style="height: 50px;">

            </div>
          </div>

          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="blood_group">Blood Group</label>
            <div class="col-md-4">
              <select id="blood_group" name="blood_group" class="form-control" style="height: 50px;">
                <option value="-1">Select</option>
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="AB+">AB+</option>
                <option value="O+">O+</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                <option value="AB-">AB-</option>
                <option value="O-">O-</option>
              </select>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="street">Street</label>
            <div class="col-md-4">
              <input id="street" name="street" type="text" placeholder="Enter your street" class="form-control input-md" required="" style="height: 50px;">

            </div>
          </div>



          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="dist">District</label>
            <div class="col-md-4">
              <input id="dist" name="dist" type="text" placeholder="Enter your district" class="form-control input-md" required="" style="height: 50px;">

            </div>
          </div>

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="signup"></label>
            <div class="col-md-4">
              <button id="signup" name="signup" class="btn btn-success" style="color:white;background:#ff7675;border:none;    width: 389px;">Sign Up</button>
            </div>
          </div>
        </div>

    </fieldset>
    </div>
  </form>
</body>

</html>