<?php
session_start();

if (isset($_SESSION['userid'])) {

    header('location:logindetails.php');
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

            <form id="myForm" action="logincheck.php" method="post">

                <div class="card">
                    <div class="login-box">
                        <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" id="Login">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab" id="signUp">Sign Up</label>
                            <div class="login-space">
                                <div class="login">
                                    <div class="group"> <label for="email" class="label">Email</label> <input id="email" type="text" class="input" placeholder="Enter your email" name="email" required value="ameerameeran123@gmail.com"> </div>
                                    <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" class="input" placeholder="Enter your password" name="password" required value="ameerameeran"> </div>
                                    <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div>
                                    <div class="group"> <input type="submit" class="button" name="button" value="Sign In"> </div>
                                    <div class="hr"></div>
                                    <div class="foot"> <label for="tab-2">Not A Member?</label> </div>
                                </div>
            </form>
            <form action="signupConnect.php" method="post">
                <div class="sign-up-form">
                    <div class="group"> <label for="user" class="label">Username</label> <input id="usera" type="text" class="input" placeholder="Create your Username" name="users" required> </div>
                    <div class="group"> <label for="pass" class="label">Email Address</label> <input id="passc" type="text" class="input" placeholder="Enter your email address" name="mail" required> </div>
                    <div class="group"> <label for="pass" class="label">Password</label> <input id="passa" type="password" class="input" data-type="password" placeholder="Create your password" name="pass" minlength="8" required> </div>
                    <div class="group"> <label for="pass" class="label">Contact</label> <input id="passb" type="tel" class="input" placeholder=" Enter your contact number" name="repass" required> </div>
                    <div class="group"> <label for="pass" class="label">Select Blood</label><select name="bld" id="bld" class="input">
                            <option value="">select blood group</option>
                            <option value='A+'>A+</option>
                            <option value='B+'>B+</option>
                            <option value='O+'>O+</option>
                            <option value='AB+'>AB+</option>
                            <option value='A-'>A-</option>
                            <option value='B-'>B-</option>
                            <option value='O-'>O-</option>
                            <option value='AB-'>AB-</option>
                        </select> </div>
                    <div class="group"> <label for="pass" class="label">Street</label> <input id="str" type="tel" class="input" placeholder=" Enter your street" name="str" required> </div>
                    <div class="group"> <label for="pass" class="label">District</label> <input id="dst" type="tel" class="input" placeholder=" Enter your district" name="dst" required> </div>

                    <div class="group"> <input type="submit" class="button" value="Sign Up" name="btn"> </div>



                    <div class="hr"></div>
                    <div class="foot"> <label for="tab-1">Already Member?</label> </div>
                </div>
        </div>
    </div>
    </div>
    </div>
    </form>

    </div>
    </div>
</body>

</html>








</body>

</html>