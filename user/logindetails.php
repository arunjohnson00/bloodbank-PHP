<?php

session_start();

include('connect.php');
if (!isset($_SESSION['userid'])) {

    header('location:signup.php');
}

$sqli = "SELECT * FROM donor WHERE id='" . $_SESSION['userid'] . "'";
if ($reqe = mysqli_query($connect, $sqli)) {
    echo "";


    while ($are = mysqli_fetch_array($reqe)) {
        $profile = $are['image'];
    }
}
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
    <title>Document</title>
    <link rel="stylesheet" href="style/logindetailsstyle.css" type="text/css" />
    <link rel="stylesheet" href="style/LoginDetails.css" type="text/css" />
</head>

<body>


    <div class="img">


        <a href="logoutuser.php">
            <button type="text" name="button" class="logout">logout<i class="fas fa-sign-out-alt"></i></button></a>
    </div>

    <div class="container emp-profile">

        <!--<div class="row" >-->
        <div class="col-md-4">
            <div class="profile-img">
                <form action="datacre" method="post" id="form" enctype="multipart/form-data">

                    <img id="abc" src="<?php
                                        if ($profile == '') {
                                            echo "https://st2.depositphotos.com/1104517/11965/v/600/depositphotos_119659092-stock-illustration-male-avatar-profile-picture-vector.jpg";
                                        } else {

                                            echo $profile;
                                        }

                                        ?>" alt="" />
                    <div class="file btn btn-lg btn-primary">
                        Change Photo

                        <input accept="" id="imageupld" type="file" name="upload" class="image">

                </form>
                <div id="res"></div>
                <script>
                    imageupld.onchange = () => {
                        if (imageupld.files[0]) {
                            abc.src = URL.createObjectURL(imageupld.files[0])
                        };


                        var formData = new FormData();
                        formData.append('upload', $('#imageupld')[0].files[0]);
                        console.log(formData)
                        $.ajax({
                            url: 'datacre.php',
                            type: 'POST',
                            //data:$(this).serialize(),
                            data: formData,
                            success: function(result) {
                                // $("#res").html(result);
                            },
                            cache: false,
                            contentType: false,
                            processData: false



                        })


                    }
                </script>



            </div>
        </div>
    </div>

    <li class="nav-item">
        <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="    color: black; margin-left: 219px;">About</a>
    </li>







    <div class="demotable" style="    margin-top: 38%;
    display: flex;
    text-transform: capitalize;
  
    margin-left: 139px;">
        <div style='text-transform:capitalize'>
            <?php


            $sql = "SELECT * FROM donor WHERE id='" . $_SESSION['userid'] . "'";
            if ($req = mysqli_query($connect, $sql)) {
                echo "";


                while ($ar = mysqli_fetch_array($req)) {

                    echo " <tbody>
<tr class='sbtable' >" ?>

                    <div class="col-md-8" style="margin-left:295px;margin-top:-127px">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="" id="home" role="tabpanel" aria-labelledby="home-tab" style="    display: table;
    width: 461px;
    /* display: flex; */
    margin-top: -94px;">


                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo "<td>" . $ar['Name'] . "</td>" ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo "<td>" . $ar['Email'] . "</td>" ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo "<td>" . $ar['Contact_no'] . "</td>" ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Blood Group</label>
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo "<td>" . $ar['Blood_group'] . "</td>" ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Street</label>
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo "<td>" . $ar['Street'] . "</td>" ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>District</label>
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo "<td>" . $ar['District'] . "</td>" ?>
                                    </div>
                                </div>


                                <?php echo "<td>

<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#exampleModal'>Edit Profile</button>"
                                ?>





                                <!-- Modal -->
                                <div class='modal' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                    <div class='modal-dialog' role='document'>
                                        <div class='modal-content' style='background:#ffffff;margin-top: 50%;'>
                                            <form action='edituserblood.php' id='editreq' method='post'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title' id='exampleModalLabel'>EDIT</h5>
                                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                        <span aria-hidden='true' style='padding-left: 1400%;'>&times;</span>
                                                    </button>
                                                </div>

                                                <div class='modal-body'>

                                                    <input name='id' type='text' value=<?php echo '"' . $ar['id'] . '"' ?> hidden>

                                                    <input name='name' type='text' value=<?php echo '"' . $ar['Name'] . '"' ?>style='border-radius:4px;border: 2px solid #cfd6df;width:242px;height: 46px;font-size:small;padding-left: 21px;'>

                                                    <select name='blood_group' style='border-radius:4px;border: 2px solid #cfd6df;width:227px;height: 46px;font-size:small;padding-left: 21px;'>
                                                        <option>Select a blood</option>

                                                        <option value='A+'>A+</option>
                                                        <option value='B+'>B+</option>
                                                        <option value='O+'>O+</option>
                                                        <option value='AB+'>AB+</option>
                                                        <option value='A-'>A-</option>
                                                        <option value='B-'>B-</option>
                                                        <option value='O-'>O-</option>
                                                        <option value='AB-'>AB-</option>
                                                    </select>


                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                                    <button type='submit' name='button' class='btn btn-secondary'>submit</button>


                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                <?php
                    "</td>


     

     


</tr>
</tbody>";
                }
                echo "</table>";
            } else {
                echo mysqli_error($connect);
            }



                ?>







                    </div>
        </div>









    </div>
    </div>

    </div>



    </div>

    </div>

    <div style="display: flex;
   justify-content: space-evenly;
    margin-top: 7%; 
">


        <a href="donorformuser.php" style="color:white">
            <button type="button" class="bnt"> Donate</button></a>
        <a href="requestformuser.php" style="color:white"><button type="button" class="bnt"> Request</button></a>
    </div>


</body>

</html>