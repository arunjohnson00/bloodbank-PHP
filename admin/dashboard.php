<?php

session_start();


if (!isset($_SESSION['id'])) {

    header('location:index.php');
}
$view = "dashboard";

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
    <link rel="stylesheet" href="style/donorstyle.css" type="text/css" />
    <link rel="stylesheet" href="style/requeststyle.css" type="text/css" />

    <title>Document</title>
    <style>
        @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);
        @import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");

        .navbar-vertical .navbar-nav .nav-link {
            padding: 1.75rem 1.5rem;
            font-size: 1.2rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            white-space: nowrap;
        }

        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #212529b8;
        }
    </style>
</head>

<body>
    <?php include('connect.php'); ?>
    <!-- Dashboard -->
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        <!-- Vertical Navbar -->
        <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
            <div class="container-fluid">
                <!-- Toggler -->
                <!-- Brand --> <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-2 me-0"> <img src="https://theleaders-online.com/wp-content/uploads/2020/11/blood-bank.jpg" style="height: 100px;" alt="..."> </a> <!-- User menu (mobile) -->
                <div class="navbar-user d-lg-none">
                    <!-- Dropdown -->
                    <div class="dropdown">
                        <!-- Toggle --> <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            </button>
                            <div class="dropdown-menu dropdown-menu-right" style="margin-right: -101%;margin-top: 2%;">

                            </div>

                        </a> <!-- Menu -->

                    </div>
                </div> <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item"> <a class="nav-link" href="">
                                <form action="" method="post"><button type="submit" name="dsh" style="background:white;    width: 232px;height: 48px;"> <i class="bi bi-house"></i> Dashboard </button>
                            </a> </li>


                        <li class="nav-item"> <a class="nav-link" href=""><button type="submit" name="dnr" style="background:white;    width: 232px;height: 48px;"> <i class="bi bi-heart"></i> Donors </button></a> </li>
                        <li class="nav-item"> <a class="nav-link" href=""> <button type="submit" name="rqt" style="background:white;width: 232px;height: 48px;"><i class="bi bi-people"></i> Patients </button></a> </li>
                        <li class="nav-item"><a href=""><button type="submit" name="add" style="color:white;width: 220px;height: 49px;background:#ff7e7d;margin-left: 5%;margin-top: 11%;border-radius: 3px">Add new patient</button></a></li>
                        <li class="nav-item"><a href=""><button type="submit" name="added" style="color:white;width: 220px;height: 49px;background:#ff7e7d;margin-left: 5%;margin-top: 11%;border-radius: 3px">Add new Donar</button></form></a></li>
                    </ul> <!-- Divider -->
                    <hr class="navbar-divider my-5 opacity-20"> <!-- Navigation -->

                    <div class="mt-auto"></div> <!-- User (md) -->
                    <ul class="navbar-nav">

                        <li class="nav-item"> <a class="nav-link" href="logout.php"> <i class="bi bi-box-arrow-left"></i> Logout </a> </li>

                    </ul>
                </div>
            </div>
        </nav> <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            <!-- Header -->
            <header class="bg-surface-primary border-bottom pt-6">
                <div class="container-fluid">
                    <div class="mb-npx">
                        <div class="row align-items-center">
                            <div class="col-sm-12 col-12 mb-4 mb-sm-0" style="display:flex;justify-content: space-between;align-items: center;">
                                <!-- Title -->
                                <h1 class="h2 mb-0 ls-tight" style="color:#ff7e7d">Blood Bank Dashboard </h1>





                                <div class="dropdown-menu dropdown-menu-right" style="margin-top: 1%;width:245px;height: 205px;">
                                    <div style="display: flex;align-items: center; flex-wrap: wrap; flex-direction: column;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScXyoZXpAWph9Vnu9_ZpWgNmn20W4hlBOn-5dLmFQuww8zSfnhRRNQW7B0RRuApO_PFwg&usqp=CAU" style="border-radius :27px;width:15%" alt="">
                                        <h4 class="mb-0">Kristin Watson</h4>
                                    </div>
                                    <div style="    display: flex;flex-direction: column-reverse; align-content: space-around; flex-wrap: wrap;">
                                        <h2><a type='button' data-target="#ProfileModal" data-toggle='modal' style="margin-top:18%">Profile</h2></a>
                                        <!-- Modal -->

                                    </div>


                                </div>




                            </div> <!-- Actions -->

                        </div> <!-- Nav -->
                        <ul class="nav nav-tabs mt-4 overflow-x border-0">


                        </ul>
                    </div>
                </div>
            </header> <!-- Main -->


            <?php

            if (isset($_POST['dsh'])) {
                include('dashboardbody.php');
            } else if (isset($_POST['dnr'])) {

                include('donor.php');
            } else  if (isset($_POST['rqt'])) {
                include('request.php');
            } else if (isset($_POST['add'])) {
                include('requestform.php');
            } else if (isset($_POST['added'])) {
                include('donorform.php');
            } else if (isset($_POST['added'])) {
                include('donorda.php');
            } else {
                include('dashboardbody.php');
            }

            ?>
        </div>
    </div>




</body>

</html>