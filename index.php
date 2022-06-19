<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Midical Profile</title>

    <style>
        body {
            min-width: 100%;
            min-height: 100%;
            background-repeat: no-repeat;
            position: fixed;
        }

        .signup {
            /* background-color: rgb(72, 153, 247); */
            /* border: 2px solid blueviolet; */
            color: white;
            font-size: 23px;
            border-radius: 25px;
            width: 40%;
            margin-top: 10%;
            margin-left: 8%;
        }

        .signup:hover {
            background-color: aliceblue;
            color: blue;
        }

        .login {
            color: white;
            width: 100%;
        }

        .login:hover {
            background-color: aliceblue;
            color: blueviolet;
        }

        .overlay {
            margin: 10% 5%;
            width: 35%;

        }

        .logo {
            width: 80%;
            margin-top: 10%;
        }

        * {
            box-sizing: border-box;
        }

        .inputs {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        .submit {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        .cancel {
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        .submit:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

        #nextdis {
            display: none;
            margin-top: 1%;
        }

        a {
            list-style: none;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <section id="hide">
        <nav class="navbar navbar-expand-lg navbar-light float-end bg-light">
            <a href="login.php" class="btn btn-primary m-3 login" style="border-radius: 10px;">Login</a>
        </nav>
        <div class="row">
            <div class="col-md-6 overlay">
                <h5>The Sushruta's</h5>
                <b>
                    <h1> आरोग्य आधार</h1>
                </b><br>
                <i>
                    <h4>स्वस्थस्य स्वास्थ्य रक्षणं, आतुरस्य विकार प्रशमनं।</h4><br>
                    <h6>A personal medical history may include information about allergies, illnesses, surgeries, immunizations, and results of physical exams and tests. It may also include information about medicines taken and health habits, such as diet and exercise.</h6>
                </i>
                <button class="btn btn-primary signup" onclick="signupform()">Patient SignUp</button>
                <a href="hospitalsignupform.php" class="btn btn-primary signup">Hospital SignUp</a>
            </div>

            <div class="col-md-6">
                <img class="logo img-fluid rounded float-end" src="medical-logo.jpg" alt="">
            </div>
        </div>
    </section>



    <section id="nextdis">
        <div class="container bg-primary text-white" style="width: 70%; height:90%;">
            <form class="form" id="myForm" method="POST" onsubmit="return validateForm()" name="myForm" action="login.php">
                <div class="row text-center" id="name">
                    <div class="form-group col-md-3">
                        Full Name:
                    </div>
                    <div class="form-group col-md-9">
                        <input required class="form-control inputs" placeholder="Enter your Name" type="text" name="fname" id="fname">

                        <b>
                            <p class="formerror  text-danger"></p>
                        </b>
                    </div>
                </div><br>
                <div class="row text-center" id="phone">
                    <div class="form-group col-md-3">
                        Mobile Number:
                    </div>
                    <div class="form-group col-md-9">
                        <input required class="form-control inputs" placeholder="Enter your Mobile Number" type="text" name="fphone" id="fphone">

                        <b>
                            <p class="formerror  text-danger"></p>
                        </b>
                    </div>
                </div><br>
                <div class="row text-center" id="email">
                    <div class="form-group col-md-3">
                        Email :
                    </div>
                    <div class="form-group col-md-9">
                        <input required class="form-control inputs" placeholder="Enter your Email" type="email" name="femail" id="femail">

                        <b>
                            <p class="formerror  text-danger"></p>
                        </b>
                    </div>
                </div><br>
                <div class="row text-center">
                    <div class="form-group col-md-3">
                        Birthdate:
                    </div>
                    <div class="form-group col-md-9">
                        <input required class="form-control" type="date" name="fbdate">
                    </div>
                </div><br>
                <div class="row text-center">
                    <div class="col-md-3">
                        Gender:
                    </div>
                    <div class=" col-md-9">
                        <select name="fgender" required class=" inputs custom-select">
                            <option selected>Choose...</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="nottosay">Prefered not to say</option>
                        </select>
                    </div>
                </div><br>
                <div class="row text-center">
                    <div class="col-md-3">
                        User:
                    </div>
                    <div class=" col-md-9">
                        <select name="fusertype" required class=" inputs custom-select">
                            <option selected value="patient">Patient</option>
                        </select>
                    </div>
                </div><br>

                <div class="row text-center" id="ano">
                    <div class="form-group col-md-3">
                        Adhar Number:
                    </div>
                    <div class="form-group col-md-9">
                        <input required class="form-control inputs" placeholder="Enter your Adhar Number" type="text" name="fano" id="fano">

                        <b>
                            <p class="formerror  text-danger"></p>
                        </b>
                    </div>

                </div><br>
                <div class="row text-center" id="pass">
                    <div class="form-group col-md-3">
                        Password:
                    </div>
                    <div class="form-group col-md-9">
                        <input required onkeyup="return passValidate()" class="form-control inputs" placeholder="Enter your password" type="password" name="fpass" id="fpass">
                        <b>
                            <p class="formerror  text-danger"></p>
                        </b>
                    </div>
                </div><br>
                <div class="row text-center" id="cpass">
                    <div class="form-group col-md-3">
                        Confirm Password:
                    </div>
                    <div class="form-group col-md-9">
                        <input required class="form-control inputs" placeholder="Enter your Confirm password" type="password" name="fcpass" id="fcpass">
                        <b>
                            <p class="formerror  text-danger"></p>
                        </b>
                    </div>
                </div><br>

                <div>
                    <button style="width: 100%; padding:5px; " class="btn btn-danger text-center" name="signup">Signup</button>

                </div><br>
        </div>

        </form>


    </section><br><br>


    


</body>

<footer class=" bg-dark text-white text-center " style="width:100%; margin-top:1%;"> Copyright © <a style="text-decoration: none; color: white;" href="#">The validators</a> All rights reserved!</footer>

</html>

<script>
    function signupform() {

        document.getElementById("nextdis").style.display = "block";
        document.getElementById("hide").style.display = "none";

    }



    function clearErrors() {
        errors = document.getElementsByClassName('formerror');
        for (let item of errors) {
            item.innerHTML = " ";
        }
    }

    function passValidate() {
        clearErrors();


        var password = document.forms['myForm']["fpass"].value;
        if (password.length < 6) {
            seterror("pass", "*Password should be atleast 6 Characters long!!");
            return false;
        }

        if (password.search(/[A-Z]/) < 0) {
            seterror("pass", "Your password must be starts with Capital Letter.");
            return false;
        }

        if (password.search(/[a-z]/i) < 0) {
            seterror("pass", "Your password must contain at least one letter.");
            return false;
        }
        if (password.search(/[0-9]/) < 0) {
            seterror("pass", "Your password must contain at least one digit.");
            return false;
        }

    }



    function seterror(id, error) {
        //sets error inside tag of id
        element = document.getElementById(id);
        element.getElementsByClassName('formerror')[0].innerHTML = error;
        return false;

    }

    function validateForm() {
        clearErrors();




        //perform validation and if validation fails, set the value of returnval to false
        var name = document.forms['myForm']["fname"].value;
        // alert(name.length)
        if (name.length < 5) {
            seterror("name", "*Length of name is too short!!");
            document.forms['myForm']["fname"].value = "";
            return false;
        }


        var email = document.forms['myForm']["femail"].value;
        if (email.length > 50) {
            seterror("email", "*Length of email is too long!!");
            document.forms['myForm']["femail"].value = "";
            return false;
        }

        var phone = document.forms['myForm']["fphone"].value;
        if (phone.length != 10) {
            seterror("phone", "*Phone number should be of 10 digit!!");
            document.forms['myForm']["fphone"].value = "";
            return false;
        }


        var ano = document.forms['myForm']["fano"].value;
        if (ano.length != 12) {
            seterror("ano", "*Enter Valid Adhar Number!!");
            document.forms['myForm']["fphone"].value = "";
            return false;
        }


        var password = document.forms['myForm']["fpass"].value;

        var cpassword = document.forms['myForm']["fcpass"].value;
        if (cpassword != password) {
            seterror("cpass", "*Password and Confirm password should be Equal!!");
            document.forms['myForm']["fpass"].value = "";
            document.forms['myForm']["fcpass"].value = "";
            return false;
        }




    }
</script>



