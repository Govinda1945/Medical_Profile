<?php
    include("config.php");

    if (isset($_POST['submit'])) {

        $idq ="SELECT * FROM users";
        $idqr = mysqli_query($conn,$idq);
        $idf = mysqli_fetch_array($idqr);
        
        $id = $idf['id'];

        
    
        $disease = $_POST['disease'];
        $symptoms = $_POST['symptoms'];
        $treatement = $_POST['treatement'];
        $dot = $_POST['dot'];
        $dname = $_POST['dname'];
    
        $insrt = "UPDATE disease SET disease='$disease',symptoms='$symptoms',treatement='$treatement',dot='$dot',dname='$dname' WHERE user_id=$id";
    
        $query = mysqli_query($conn, $insrt);
    
        if ($query==true) {
           
            header("location:hospitalhome.php");
        } else {
            die();
        }
    }

?>




<?php

    if (isset($_POST['allergybut'])) {

        $idq ="SELECT * FROM users";
        $idqr = mysqli_query($conn,$idq);
        $idf = mysqli_fetch_array($idqr);
        
        $id = $idf['id'];

        
    
        $allergy = $_POST['allergy'];
        $level = $_POST['level'];
        $remark = $_POST['remark'];
    
        $insrt = "UPDATE allergytab SET allergy='$allergy',level='$level',remark='$remark' WHERE user_id='$id'";
    
        $query = mysqli_query($conn, $insrt);
    
        if ($query==true) {
           
            header("location:hospitalhome.php");
        } else {
            die();
        }
    }

?>



<?php

    if (isset($_POST['emergancy'])) {

        $idq ="SELECT * FROM users";
        $idqr = mysqli_query($conn,$idq);
        $idf = mysqli_fetch_array($idqr);
        
        $id = $idf['id'];

        
    
        $name = $_POST['name'];
        $rwp = $_POST['rwp'];
        $number = $_POST['number'];
        $address=$_POST['address'];
    
        $insrt = "UPDATE emergancy SET e_name='$name',rwp='$rwp',e_number='$number',e_address='$address' WHERE user_id='$id'";
    
        $query = mysqli_query($conn, $insrt);
    
        if ($query==true) {
           
            header("location:hospitalhome.php");
        } else {
            die();
        }
    }

?>
<?php

    if (isset($_POST['vaccinebut'])) {

        $idq ="SELECT * FROM users";
        $idqr = mysqli_query($conn,$idq);
        $idf = mysqli_fetch_array($idqr);
        
        $id = $idf['id'];

        
    
        $vaccname = $_POST['name'];
        $vdate = $_POST['vdate'];
        $pdt = $_POST['polio'];
    
        $insrt = "UPDATE vaccine SET vaccinename='$vaccname',vaccinedate='$vdate',polio='$pdt' WHERE user_id='$id'";
    
        $query = mysqli_query($conn, $insrt);
    
        if ($query==true) {
           
            header("location:hospitalhome.php");
        } else {
            die();
        }
    }

?>


<?php

    if (isset($_POST['habbitsubmit'])) {

        $idq ="SELECT * FROM users";
        $idqr = mysqli_query($conn,$idq);
        $idf = mysqli_fetch_array($idqr);
        
        $id = $idf['id'];

        
    
        $alstatus = $_POST['alstatus'];
        $cistatus = $_POST['cistatus'];
        $drstatus = $_POST['drstatus'];
        $anyother = $_POST['anyother'];

    
        $insrt = "UPDATE habbits SET alcohol='$alstatus',cigarette='$cistatus',drug='$drstatus',anyother='$anyother' WHERE user_id='$id'";
    
        $query = mysqli_query($conn, $insrt);
    
        if ($query==true) {
           
            header("location:hospitalhome.php");
        } else {
            die();
        }
    }

?>


<?php

    if (isset($_POST['addpatient'])) {
        $idq ="SELECT * FROM users";
        $idqr = mysqli_query($conn,$idq);
        $idf = mysqli_fetch_array($idqr);
        
        $id = $idf['id'];


        $ffname = $_POST['ffname'];
        $flname = $_POST['flname'];
        $email = $_POST['email'];
        $adhar = $_POST['adhar'];
        $address = $_POST['address'];
        $address2 = $_POST['address2'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pin = $_POST['pin'];
        $noofmembers = $_POST['noofmembers'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $bloodgroup = $_POST['bloodgroup'];
        $occupation = $_POST['occupation'];
        $maritalstatus = $_POST['maritalstatus'];
        $dob = $_POST['dob'];
        $profilepic = $_FILES['profilepic'];

                                  
    //    print_r($_FILES['profilepic']);           


        $img_loc = $_FILES['profilepic']['tmp_name'];
        $img_name = $_FILES['profilepic']['name'];
        $img_des = "uploadImage/" .$img_name;

        move_uploaded_file($img_loc, $img_des);

        
        $isrt = "UPDATE patientprofile SET firstname='$ffname',lastname='$flname',email='$email',adhar='$adhar',address='$address',address2='$address2',city='$city',state='$state',pin='$pin',noofmembers='$noofmembers',phone='$phone',age='$age',gender='$gender',bloodgroup='$bloodgroup',occupation='$occupation',maritalstatus='$maritalstatus',dob='$dob',profilepic='$img_des' WHERE user_id='$id'";

        $result = mysqli_query($conn, $isrt) or die($conn->error);

        if($result){

            echo '<script>alert("Profile Added")</script>';

            header("location: hospitalhome.php" );

        }
         
     }


?>