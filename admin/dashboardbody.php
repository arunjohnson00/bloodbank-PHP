<?php

include('connect.php');

$view = "dashboradbody.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .text-sm {
            font-size: 1.875rem !important;
        }
    </style>
</head>

<body>

    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">
            <!-- Card stats -->
            <div class="row g-6 mb-6">

                <form action="" method="post">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">Donor list</span> <a href="donorda.php"><button type="submit" name="dnrlt"> <img src="https://www.centurypa.com/images/blog/Blood%20donation.jpg" style="height: 146px;cursor:pointer" alt=""></button></a></div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">Request list</span> <a href="requestda.php"><button type="submit" name="rqtlt"><img src="https://maruthibloodbank.org/wp-content/uploads/2021/05/blood-request-01.jpg" style="height: 146px;cursor:pointer" alt=""></button></a> </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="card shadow border-0 mb-7">
                <div class="card-header">

                </div>

                <?php

                if (isset($_POST['dnrlt'])) {
                    include('requestda.php');
                } else if (isset($_POST['rqtlt'])) {
                    include('donorda.php');
                } else {
                    include('donorlist.php');
                }

                ?>


            </div>
        </div>
    </main>
</body>

</html>