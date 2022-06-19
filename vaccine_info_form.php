<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccine Info</title>
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
    <h1 style="text-align: center;">Vaccine Info</h1>
    <form action="submitform.php" method="post">
        <div class="container-fluid">
            <div class="col-md-4">
                Vaccine Name
                <br>
                <input name="name"  class="form-control" type="text" placeholder="Vaccine" style="margin-top: 20px;">
            </div>
        </div>
        <div class="container-fluid" style="margin-top: 30px;">
            <div class="form-group col-md-4" >
                <label for="formGroupExampleInput" >Date-Of-Vaccination</label>
                <input name="vdate" type="date" class="form-control" placeholder="dd/mm/yyyy" maxlength="10" style="margin-top: 10px;">
            </div>
        </div>
        <div class="container-fluid" style="margin-left: 20px;">
            <div style="margin-top: 20px;">
                Polio Dose Taken
                <br>
                <div class="form-check form-check-inline">
                    <input name="polio" class="form-check-input" type="radio" name="inlineRadioOptions" id="polioradio1"
                        value="yes">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input name="polio" class="form-check-input" type="radio" name="inlineRadioOptions" id="polioradio2"
                        value="no">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" name="vaccinebut" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
            <a href="hospitalhome.php" type="button" class="btn btn-danger" style="margin-top: 20px;">Cancel</a>
        </div>
    </form>
</body>

</html>