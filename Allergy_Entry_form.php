<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allergy Entry</title>
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
</head>

<body>
    <div class="container-fluid center_div">
        <h1 style="text-align: center;">Allergy Section</h1>
        <form action="submitform.php" method="POST">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Allergy</label>
                <input type="text" name="allergy" class="form-control" placeholder="Allergy If">
            </div>

            <div class="form-group col-md-4">
                <label for="inputAllergy">Allergy Type</label>
                <select name="level" id="inputAllergy" class="form-control">
                    <option selected>Choose...</option>
                    <option>NA</option>
                    <option>Low</option>
                    <option>Medium</option>
                    <option>High</option>
                    
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Remark</label>
                <input type="text" name="remark" class="form-control" placeholder="Remark">
            </div>
            <div class="text-center">
                <button name="allergybut" type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
                <a href="hospitalhome.php" type="button" class="btn btn-danger" style="margin-top: 20px;">Cancel</a>
            </div>

        </form>
    </div>
</body>

</html>