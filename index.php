<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/indexstyle.css" type="text/css" />

<body class="af">
    <div class="body">



        <div class="bloodbank">BLOOD BANK</div>



        <?php


        include('donora.php');



        ?>

        <div class="mainbox">
            <div class="bcm">

                <a href="user/signup.php">
                    <button type="text" name="button" class="become">Become A Donor</button></a>

            </div>
            <div class="bcm">

                <a href="admin/index.php">
                    <button type="text" name="button" class="become">Admin Login</button></a>

            </div>

        </div>



    </div>
</body>

</html>