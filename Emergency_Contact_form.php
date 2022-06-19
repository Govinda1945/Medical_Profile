<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <style>

    </style>

</head>

<body>
    <h1 style="text-align: center;">Disease Entry</h1>
    <div class="container-fluid center_div">
        <form action="submitform.php" method="post">
            <div style="margin-top: 20px;">
                Name
                <br>
                <input class="form-control" name="name" type="text" placeholder="Enter your Full Name" style="margin-top: 20px;">
            </div>
            <div style="margin-top: 20px;">
                Relation With Patient
                <br>
                <input name="rwp" class="form-control" type="text" placeholder="Brother/Father/Mother/Etc"
                    style="margin-top: 20px;">
            </div>
            <div>
                Contact Info
                <br>
                <input name="number" class="form-control" type="text" placeholder="Contact Number" minlength="10" maxlength="10"
                    pattern="[789]{1}[0-9]{9}" style="margin-top: 20px;">
            </div>

            <div style="margin-top: 20px;">
                Address
                <br>
                <input name="address" class="form-control" type="text" placeholder="Enter your Address"
                    style="margin-top: 20px;">
            </div>
            <div class="text-center">
                <button name="emergancy" type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
                <a href="hospitalhome.php" type="button" class="btn btn-danger" style="margin-top: 20px;">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>