<?php

session_start();

if (!isset($_SESSION['Fullname'])) {
    echo "<script> alert('you are logged out');</script>";


    header("location:login.php");
    

} 

include("sidebar.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Basic Info</title>
</head>

<body>
    <a style="margin-right: 2%;" class="btn btn-danger float-end mt-0 " type="submit" href="logout.php">Signout</a>
    <section>

        <div style="margin: 0 2%;" class="row m-5"><br><br><br>
            <div class="col-md-9" style="width:60%; margin:2% 10px; border:2px solid black; border-radius:10px; padding:2%;">
                <h3 class="text-center">Basic Info</h3>
                <h5 class="float-end m-1">Adhar No : <span>123412341234</span></h5>
                <b>
                    <h2><span class="fas fa-user-alt"></span> <?php echo $_SESSION['Fullname']; ?> </h2>
                </b><br>

                <div class="row">
                    <div class="col-md-6">
                        <ul style="list-style-type: square;">
                            <li>
                                <h5>Age : <span>Age</span></h5><br>

                            </li>
                            <li>
                                <h5>Blood Group : <span>Blood Group</span></h5><br>

                            </li>
                            <li>
                                <h5>Gender : <span>Gender</span></h5><br>

                            </li>
                            <li>
                                <h5>Address : <span style="font-size: 17px;">Address</span></h5><br>

                            </li>

                            <li>
                                <h5>Mobile No : <span>1234567890</span></h5><br>

                            </li>
                        </ul>
                    </div>
    
                    <div class="col-md-6">
                        <ul style="list-style-type: square;">
                            <li>
                                <h5>Occupation : <span>Occupation</span></h5><br>

                            </li>
                            <li>
                                <h5>Marital status : <span>Marital status</span></h5><br>

                            </li>
                            <li>
                                <h5>Sibling no : <span>Sibling no</span></h5><br>

                            </li>
                            <li>
                                <h5>Height : <span>Height</span></h5><br>

                            </li>


                        </ul>
    
                    </div>

                </div>



            </div>

            <div class="col-md-4">
                <img class="float-end" style="margin-top:15%; border-radius:15px; width: 50%;" src="profile.png" alt="">
            </div>

        </div>
    </section>
</body>

</html>