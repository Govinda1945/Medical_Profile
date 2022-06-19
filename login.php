<?php
    session_start();

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        .login {
            /* background-color: blueviolet; */
            /* border: 2px solid blueviolet; */
            color: white;
            width: 100%;
        }

        .login:hover {
            background-color: aliceblue;
            color: blueviolet;
        }

        .inputs {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
    </style>
</head>

<body>
    <section>
        <div class="container bg-primary text-white" style="margin-top:10%; font-size:20px; width: 60%; height:90%;"><br><br>
            <form class="form" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);  ?>">
                <div class="row text-center">
                    <div class="col-md-3">
                        User :
                    </div>
                    <div class=" col-md-9">
                        <select name="usertype" required class=" inputs custom-select">
                            <option selected>Choose...</option>
                            <option value="patient">Patient</option>
                            <option value="hospital">Hospital</option>
                        </select>
                    </div>
                </div><br>


                <div class="row text-center">
                    <div class="form-group col-md-3">
                        Email/Adhar Number :
                    </div>
                    <div class="form-group col-md-9">
                        <input required class="form-control inputs" type="text" name="username">
                    </div>
                </div><br>


                <div class="row text-center" id="pass">
                    <div class="form-group col-md-3">
                        Password:
                    </div>
                    <div class="form-group col-md-9">
                        <input required class="form-control inputs" type="password" name="password">

                    </div>
                </div><br>

                <div class="text-center">
                    <input type="submit" class="btn btn-danger" name="login" style="width: 100%; border-radius:10px;" value="login">
                </div><br>

                <div class="text-white">
                    <span>
                        Not have an Account?  
                        <a style="text-decoration:none;" class="text-white" href="index.php">  Signup here</a>

                    </span>
                </div><br>


            </form>
        </div>
    </section>
</body>

</html>



<?php
include("config.php");

if (isset($_POST['signup'])) {

    $name = $_POST['fname'];
    $phone = $_POST['fphone'];
    $email = $_POST['femail'];
    $bdate = $_POST['fbdate'];
    $gender = $_POST['fgender'];
    $user = $_POST['fusertype'];
    $ano = $_POST['fano'];
    $pass = $_POST['fpass'];

    $insrt = "INSERT INTO users(name,mobile,email,birthdate,gender,user,adhar,password) VALUES('$name','$phone','$email','$bdate','$gender','$user','$ano','$pass')";

    $query = mysqli_query($conn, $insrt);

    if ($query==true) {

        echo '<script type="text/javascrpt"> alert("Signup Successful!!"); </script>';
    } else {
        echo '<script type="text/javascrpt"> alert("data not saved!!"); </script>';
    }
}



if (isset($_POST['hospitalsignup'])) {

    $name = $_POST['fname'];
    $phone = $_POST['fphone'];
    $email = $_POST['femail'];
    $licence = $_POST['flicence'];
    $user = $_POST['fusertype'];
    $ano = $_POST['fano'];
    $pass = $_POST['fpass'];

    $insrt = "INSERT INTO hospital(name,mobile,email,licence,user,adhar,password) VALUES('$name','$phone','$email','$licence','$user','$ano','$pass')";

    $query = mysqli_query($conn, $insrt);

    if ($query==true) {

        echo '<script type="text/javascrpt"> alert("Signup Successful!!"); </script>';
    } else {
        echo '<script type="text/javascrpt"> alert("data not saved!!"); </script>';
    }
}


?>

<?php 

// for the patient home page

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $_POST['usertype'];



        if($user == 'patient'){
            
            $sel = "SELECT * FROM users WHERE user='$user' and Password='$password' and email='$username'or adhar='$username'";

            
            $result = mysqli_query($conn,$sel);
            
            $data = mysqli_fetch_assoc($result);

            if (mysqli_num_rows($result)==1) {

                $selectallqry = "SELECT u.id,u.name,u.mobile,u.email,u.birthdate,u.gender,u.user,u.adhar,u.password,p.user_id,p.address,p.address2,p.city,p.state,p.pin,p.noofmembers,p.age,p.bloodgroup,p.occupation,p.maritalstatus,p.profilepic,a.allergy,a.level,a.remark,d.disease,d.symptoms,d.treatement,d.dot,d.dname,e.e_name,e.rwp,e.e_number,e.e_address,h.alcohol,h.cigarette,h.drug,h.anyother,v.vaccinename,v.vaccinedate,v.polio FROM users u,patientprofile p,allergytab a,disease d,emergancy e,habbits h,vaccine v WHERE u.id = p.user_id ";

                $dataallqry = mysqli_query($conn,$selectallqry);

                $dataall = mysqli_fetch_array($dataallqry);


                // name display

                $_SESSION['Fullname'] = $data['name'];
        
                header("Location: basicinfo.php"); /* Redirect browser */
            }
            else{
                echo '<script>alert("wrong username or password") </script>';
            }
        }
    

// for the Hospital home page
        else if($user == 'hospital'){
            $sel = "SELECT * FROM hospital WHERE user='$user' and password='$password' and email='$username' or adhar='$username' or licence='$username'";
            
            $result = mysqli_query($conn,$sel);

            $data = mysqli_fetch_assoc($result);
            
            if (mysqli_num_rows($result)==1) {

                $_SESSION['Fullname'] = $data['name'];

        
                header("Location: hospitalhome.php"); /* Redirect browser */
            }
            else{
                echo '<script>alert("wrong username or password") </script>';
            }

        }
    
        
  

// for the Portal home page
        else if($user == 'portal'){
            $sel = "SELECT * FROM users WHERE user='$user' and Password='$password' and email='$username'and adhar='$username'";
        
            $result = mysqli_query($conn,$sel);

            $data = mysqli_fetch_assoc($result);  
        
            if (mysqli_num_rows($result)==1) {
                
                $_SESSION['Fullname'] = $data['name'];

                header("Location: portalhome.php"); /* Redirect browser */
            }
            else{
                echo '<script>alert("wrong username or password") </script>';
            }

        }
        
  
    }

?>