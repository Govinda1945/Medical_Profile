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
    <title>Familyhistory</title>
</head>

<body>
    <a style="margin-right: 2%;" class="btn btn-danger float-end mt-0 " type="submit" href="logout.php">Signout</a>
    <section>
        <div class="row">
            <div class="col-md-9" style="width:61%; margin:0.5% 10px; border:2px solid black; border-radius:10px; padding:2%;">
                <h3 class="text-center">Emergency Contact</h3>
                <h5>Name : <span>Name</span></h5>
                <h5>Relation With Patient : <span>Relation</span></h5>
                <h5>Contact : <span>Contact No</span></h5>
                <h5>Address : <span style="font-size: 17px;">Address</span></h5>

            </div>
        </div>
    </section>
</body>

</html>