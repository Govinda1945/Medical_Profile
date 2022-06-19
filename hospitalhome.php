<?php
session_start();
include('config.php');





if (!isset($_SESSION['Fullname'])) {
    echo "<script> alert('you are logged out');</script>";


    header("location:login.php");
}



// select all query

// $selectallqry = "SELECT u.id,u.name,u.mobile,u.email,u.birthdate,u.gender,u.user,u.adhar,u.password,p.user_id,p.address,p.address2,p.city,p.state,p.pin,p.noofmembers,p.age,p.bloodgroup,p.occupation,p.maritalstatus,p.profilepic,a.allergy,a.level,a.remark,d.disease,d.symptoms,d.treatement,d.dot,d.dname,e.e_name,e.rwp,e.e_number,e.e_address,h.alcohol,h.cigarette,h.drug,h.anyother,v.vaccinename,v.vaccinedate,v.polio FROM users u,patientprofile p,allergytab a,disease d,emergancy e,habbits h,vaccine v WHERE u.id = p.user_id ";

// $dataallqry = mysqli_query($conn, $selectallqry);

// $dataall = mysqli_fetch_array($dataallqry);




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
    <title>Search Form</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        .container {
            border: 2px solid black;
            margin: 8% auto;
            padding: 3%;
            width: 30%;
        }

        .container1{
            margin: 4% 3%;
            

        }

        .searchcontainer {
            text-align: center;
        }
    </style>

</head>



<body><br>
    <a style="margin-right: 2%;" class="btn btn-danger float-end mt-0 " type="submit" href="logout.php">Logout</a>



    <?php
        if (isset($_POST['searchprof'])) {
            $searchpatient = $_POST['searchpatient'];
        
            $sql = "SELECT * FROM patientprofile WHERE MATCH (email, adhar) against ('$searchpatient')";
        
            $result = mysqli_query($conn, $sql);
        
            while ($row = mysqli_fetch_array($result)) {
        
        
        
                echo "<table class='container1' >
                <thead>
                    <tr style='text-align:center;' class='row'>
                        <th class='col-md-2'>Name</th>
                        <th class='col-md-2'>Picture</th>
                        <th class='col-md-2'>Aadhar No</th>
                        <th class='col-md-2'>Blood Group</th>
                        <th class='col-md-2'>View</th>
                    
                    </tr>
                
                </thead>
        
                <tbody>
                <tr style='margin-top:2%;' class='row'>
        
                <td class='col-md-2'>$row[firstname].$row[lastname]</td>
                <td class='col-md-2'><img src='$row[profilepic]' width='80%' height='100%' style='border-radius:100%;'></td>
                <td class='col-md-2'>$row[adhar] </td>
                <td class='col-md-2'>$row[bloodgroup] </td>
                <td class='col-md-2'><a href='showprofile.php' class='btn btn-primary'>Show Profile</a></td>
                
        
            </tr>
                </tbody>
                </table>
                ";
        
            }
        
         
            
        }

    ?>
    <section>
        <div class="container">
            <div class="searchcontainer">
                <form action="hospitalhome.php" method="POST">
                    <div class="searchbar">
                        <input name="searchpatient" class="form-control" placeholder="Enter Aadhar number or Email id" type="text">
                    </div>

                    <div>
                        <button onclick="Showtable()" name="searchprof" style="margin: 5% 13%;" type="submit" class="btn btn-primary btn-sm">
                            <span class="glyphicon glyphicon-search"></span> Search
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </section>

</body>

</html>