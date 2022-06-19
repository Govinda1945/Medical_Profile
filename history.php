<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
</head>

<body>
    <section id="nextdis">
        <div class="container bg-primary text-white" style="width: 70%; height:90%;">
            <form class="form" id="myForm" method="POST" onsubmit="return validateForm()" name="myForm" action="login.php">
                <div class="row text-center" id="disease">
                    <div class="form-group col-md-3">
                        Disease
                    </div>
                    <div class="form-group col-md-9">
                        <input required class="form-control inputs" placeholder="Disease if any" type="text" name="fdis" id="fdis">
                    </div>
                </div><br>
                <div class="row text-center" id="symptoms">
                    <div class="form-group col-md-3">
                        Symptoms
                    </div>
                    <div class="form-group col-md-9">
                        <input required class="form-control inputs" placeholder="Cold/Fever/etc" type="text" name="fsym" id="fsym">

                    </div>
                </div><br>
                <div class="row text-center" id="treatment">
                    <div class="form-group col-md-3">
                        Treatment
                    </div>
                    <div class="form-group col-md-9">
                        <input required class="form-control inputs" placeholder="Treatment Given to Patient" type="text" name="ftreat" id="ftreat">
                    </div>
                </div><br>
                <div class="row text-center">
                    <div class="form-group col-md-3">
                        Date of Treatment
                    </div>
                    <div class="form-group col-md-9">
                        <input required class="form-control" type="date" name="fddate">
                    </div>
                </div><br>
                <div class="row text-center">
                    <div class="col-md-3">

                    </div>
                </div><br>

                <div class="row text-center" id="ano">
                    <div class="form-group col-md-3">
                        Doctor Name
                    </div>
                    <div class="form-group col-md-9">
                        <input required class="form-control inputs" placeholder="Doctor Name" type="text" name="fdrname" id="fdrname">

                        <b>
                            <p class="formerror  text-danger"></p>
                        </b>
                    </div>

                    <div class="row text-center" id="ano">
                        <div class="form-group col-md-3">
                            Docotr's Remark
                        </div>
                        <div class="form-group col-md-9">
                            <input required class="form-control inputs" placeholder="Doctor Name" type="text" name="fremark" id="fremark">

                            <b>
                                <p class="formerror  text-danger"></p>
                            </b>
                        </div>



                        <div>
                            <button style="width: 100%; padding:5px; " class="btn btn-danger text-center" name="signup">Submit</button>

                        </div><br>
                    </div>

            </form>


    </section><br><br>
</body>

</html>