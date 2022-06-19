


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disease Entry</title>
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

<body >
    <h1 style="text-align: center;">Disease Entry</h1>
    <div class="container-fluid center_div">
        <form action="submitform.php" method="POST">
            <div style="margin-top: 20px;">
                Disease
                <br>
                <input class="form-control" type="text" name="disease" placeholder="Disease If Any" style="margin-top: 20px;">
            </div>
            <div style="margin-top: 20px;">
                Symptoms
                <br>
                <input class="form-control" name="symptoms" type="text" placeholder="Cold/Fever/Etc" style="margin-top: 20px;">
            </div>
            <div style="margin-top: 20px;">
                Treatement
                <br>
                <input class="form-control" name="treatement" type="text" placeholder="Given to patient" style="margin-top: 20px;">
            </div>
            <div style="margin-top: 20px;">
                Date-of-Treatment
                <br>
                <input class="form-control" name="dot" type="date" placeholder="dd/mm/yyyy" style="margin-top: 20px;">
            </div>
            <div style="margin-top: 20px;">
                Doctor Name
                <br>
                <input class="form-control" name="dname" type="text" placeholder="Doctor Name" style="margin-top: 20px;">
            </div>
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
                <a href="hospitalhome.php" type="button" class="btn btn-danger" style="margin-top: 20px;">Cancel</a>
                
            </div>
        </form>
    </div>
</body>



</html>