<!DOCTYPE html>
<html lang="en">
<!-- giving the attributes -->

<head>
    <title>Project One Process</title> <!-- Title for the web browser search bar -->

    <link rel="stylesheet" href="css/normalize.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style.css">
</head>


<body>

    <style>
        .grid {
            display: grid;
        }

        @media (min-width: 50rem) {
            .grid.add-gutters {
                /*
    took the help from IAT 235 Notes
    */
                /* adding gutters to the columns */
                grid-column-gap: 0rem;
                grid-row-gap: 0rem;
            }
        }

        @media (min-width: 50rem) {
            .grid.gridz1 {
                /*
    took the help from IAT 235 Notes
    */
                grid-template-columns: 4fr 1fr 1fr 1fr 1fr;
                grid-template-rows: auto;
                grid-auto-flow: row;
            }
        }
    </style>
    <nav>
        <div class="grid gridz1 add-gutters">
            <!-- adding grid for fire navigation elements -->
            <a href="index.php" class="nav-item hotel">StayComfortzz.com</a>
            <a href="index.php" class="nav-item">Home</a> <!-- tag for an embedded link -->
            <a href="check.php" class="nav-item">Browse Hotels</a>
            <!-- tag for an embedded link -->

            <a href="member.php" class="nav-item">Membership</a> <!-- tag for an embedded link -->

            <a href="login.php" class="nav-item">Member Access</a>


        </div>
    </nav>
    <br>
    <div class="container">

        <h3 class="centered">The Home Of Comfort</h3>
        <figure>
            <a href="https://www.pinterest.ca/pin/143693044333698282/?nic_v2=1a2mHYQEW">
                <img src="img/hotel1.jpg" alt="Hotel Image" class="design">
            </a>

        </figure>
    </div>


    <strong>Congratulation & Welcome</strong> <?php echo $_POST["fname"]; ?><br> <br>
    <strong> Your email address is: </strong> <?php echo $_POST["email"]; ?> and you have become StayComfortzz Member. <br> <br>

    <?php

    $name = (!empty($_POST['fname']) ? $_POST['fname'] : "");
    $email = (!empty($_POST['email']) ? $_POST['email'] : "");


    $file = 'information.txt';

    if ($handle = fopen($file, 'a+')) {
        // Write string to the file
        // the function returns the number of bytes interted or false
        fwrite($handle, "$name, $email\n");

        fclose($handle);
    } else {
        echo "Could not open file for writing.";
    }

    ?>



    <?php
    if (isset($_POST["submit"])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "abhishek_taak";




        //



        //

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        //$YUP = $_POST["pass"];


        //$hash = password_hash($YUP, PASSWORD_DEFAULT);
        $password = stripslashes($_POST['pass']);
        $password = mysqli_real_escape_string($conn,$password);

        $sql = "INSERT INTO users(firstname, lastname, email, username, password_ofUser, Home_Address, City, postal_code, Country, phone_number)
VALUES('" . $_POST["fname"] . "', '" . $_POST["lname"] . "', '" . $_POST["email"] . "',
'" . $_POST["id"] . "','".md5($password)."', '" . $_POST["address"] . "', '" . $_POST["city"] . "', 
'" . $_POST["postal"] . "', '" . $_POST["country"] . "', '" . $_POST["country"] . "')";



        if (mysqli_query($conn, $sql)) {
            echo "You Are registered as a memebre now. You can login Now.";
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }

        $conn->close();
    }


    ?>

</body>

</html>