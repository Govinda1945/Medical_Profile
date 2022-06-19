<?php
include("sidebar.php")
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Data Entry</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <section>

        <section style="margin: 1% 4%;">


            <h1>Welcome To Arogya Adhar</h1>

            <form action="submitform.php" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col">
                        First Name
                        <input name="ffname" type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        Last Name
                        <input name="flname" type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input name="email" type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Adhar Number</label>
                        <input name="adhar" type="text" class="form-control" placeholder="Adhar Number" minlength="12" maxlength="12" pattern="[0-9]{12}">
                    </div>

                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input name="address" type="text" class="form-control"  placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input name="address2" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input name="city" type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select name="state" id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Maharashtra</option>
                            <option>Gujarat</option>
                            <option>Delhi</option>
                            <option>Goa</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Pin</label>
                        <input name="pin" type="text" class="form-control" id="inputZip">
                    </div>
                </div>


                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Number Of Family Members</label>
                        <input type="number" name="noofmembers">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Phone Number</label>
                        <input name="phone" type="mobile" placeholder="Mobile Number" minlength="10" maxlength="10" pattern="[789]{1}[0-9]{9}" style="margin-top: 50px;">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4">
                        Age
                        <input name="age" type="text" class="form-control" placeholder="Age">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Gender</label>
                        <select name="gender" id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Transgender</option>

                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Blood Group</label>
                        <select name="bloodgroup" id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>A+</option>
                            <option>B+</option>
                            <option>O+</option>
                            <option>AB+</option>
                            <option>A-</option>
                            <option>B-</option>
                            <option>O-</option>
                            <option>AB-</option>
                        </select>
                    </div>
                </div>

                </div>

                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="formGroupExampleInput">Occupation</label>
                        <input name="occupation" type="text" class="form-control" id="formGroupExampleInput" placeholder="Occupation">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputState">Marrital Status</label>
                        <select name="maritalstatus" id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Married</option>
                            <option>Unmarried</option>


                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="formGroupExampleInput">Date-Of-Birth</label>
                        <input name="dob" type="text" class="form-control" placeholder="dd/mm/yyyy" maxlength="10">
                    </div>
                </div>



                <div class="form-group">
                    <label for="exampleFormControlFile1">Add Photo</label>
                    <input name="profilepic" type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <input  class="btn btn-primary" type="submit" name="addpatient" value="Create Profile" style="align-items: center;" >
                <a class="btn btn-danger" href="hospitalhome.php" style="align-items: center;">Cancel</a>
            </form>

        </section>

    </section>




</body>

</html>