<?php
//include auth.php file on all secure pages
include("auth_sessionNotActiveCheck.php");
?>

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

        <h3 class="centered">Welcome <?php echo $_SESSION['username']; ?> </h3>
        <figure>
            <a href="https://www.pinterest.ca/pin/143693044333698282/?nic_v2=1a2mHYQEW">
                <img src="img/hotel8.jpg" alt="Hotel Image" class="design">
            </a>
        </figure>
    </div>

    <h2 class="view">
        Member View of StayComfortzz
    </h2>


    <?php




    if (isset($_POST["submit"])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "abhishek_taak";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        //-------------------


        $image1 = $_FILES['image']['name'];

        // Get text


        // image file directory
        $target = "img/" . basename($image1);


        $sql = "INSERT INTO membercustom(hotelid, hotel_stars, hotel_name, extra_features, hotelphone_number, email, hotel_Address, City, postal_code, Country, hotel_Image, comments)
       VALUES('" . $_POST["hid"] . "', '" . $_POST["hstar"] . "', '" . $_POST["hname"] . "',
      '" . $_POST["hfeatures"] . "', '" . $_POST["hphone"] . "', '" . $_POST["hemail"] . "', '" . $_POST["haddress"] . "','" . $_POST["hcity"] . "', 
      '" . $_POST["hpostal"] . "', '" . $_POST["hcountry"] . "', '$image1',  '" . $_POST["comm"] . "')";


        if (mysqli_query($conn, $sql)) {
            echo "Successfully added this to your member page";
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }
    }



    ?>

</body>
</html?