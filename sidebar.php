<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>form</title>
    <style>
        body{
            font-family: 'Roboto', sans-serif;
        }

        *{
            margin: 0;
            padding: 0;
            /* list-style: none;
            text-decoration: none;  */
        }
        a{
            text-decoration: none;
        }
        .sidebar{
            position: fixed;
            left: -320px;
            height: 100%;
            width: 320px;
            background-color: #042331;
            transition: all .5s;
        }

        .sidebar header{
            font-size: 22px;
            color: aliceblue;
            line-height: 70px;
            /* user-select: none; */
        }
        
        .sidebar ul a{
            display: block;
            width: 100%;
            height: 100%;
            line-height: 68px;
            font-size: 20px;
            color: aliceblue;
            padding-left: 40px;
            box-sizing: border-box;
            border-top: 1px solid rgba(255, 255, 255, .1);
            border-bottom: 1px solid black;
            transition: .1s;
        }

        .sidebar ul li:hover a{
            padding-left: 50px;
        }

        .sidebar ul li a{
            list-style: none;
            text-decoration: none; 
        }

         ul a i{
            margin-right: 16px;
        }

        #check{
            display: none;
        }

        label #btn{
            position: absolute;
            cursor: pointer;
            background-color: #042331;
            border-radius: 3px;
            left: 40px;
            top: 25px;
            font-size: 35px;
            /* color: aliceblue; */
            color: aliceblue;
            padding: 6px 12px;
            transition: all .5s;
        }

        label #cancel{
            position: absolute;
            cursor: pointer;
            border-radius: 3px;
            z-index: 1111;
            left: -195px;
            top: 17px;
            font-size: 30px;
            color: white;
            padding: 4px 9px;
            transition: all .5s ease;
        }

        #check:checked ~ .sidebar{
            left: 0;
            top: 0;
        }

        #check:checked ~ label #btn{
            left: 250px;
            opacity: 0;
            pointer-events: none;
        }
        #check:checked ~ label #cancel{
            left: 270px;
            top: 15px;
        }
        
        section{
            transition: all .5s;
            /* margin-left: 260px; */
        }

        #check:checked ~ section{
            margin-left: 310px;
        }

        /* ul li a{
            list-style: none;
            text-decoration: none;
        } */

        .row{
            background-color: LightSkyBlue;
            padding: 2%;
            margin: 2% 0;
            color: black;
        }

        
    </style>
</head>

<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn" ></i>
        <i class="fas fa-times" id="cancel"></i>
    </label> 
    <div class="sidebar">
        <header class="bg-primary text-center"><span>Aarogya Adhar</span></header>   
        <ul>
            <li><a href="basicinfo.php">Basic Information</a></li>
            <li><a href="vaccineinfo.php">Vaccine Information</a></li>
            <li><a href="checkup.php"></i>Health Checkup History</a></li>
            <li><a href="allergy.php">Allergy</a></li>
            <li><a href="familyhistory.php">Family Illness History</a></li>
            <li><a href="surgical.php">Surgical History</a></li>
            <li><a href="habbits.php">Habbits</a></li>
            <li><a href="emergancy.php">Emergency Contact</a></li>
            <li><a href="help.php">Help & Support</a></li>
            <!-- <li><a href="help.php">Help</a></li> -->

            
        </ul>
    </div>

    <section></section>




    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    
</body>

</html>