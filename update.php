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
            <a href="https://www.google.com/search?q=nature+camping&tbm=isch&ved=2ahUKEwjYr_77iqzsAhUFhp4KHZsdA0sQ2-cCegQIABAA&oq=nature+camping&gs_lcp=CgNpbWcQAzICCAAyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADICCABQtRxY3SBgriFoAHAAeACAAUOIAfABkgEBNJgBAKABAaoBC2d3cy13aXotaW1nwAEB&sclient=img&ei=dr2CX9icN4WM-gSbu4zYBA&bih=1093&biw=2179&rlz=1C1CHBF_enCA916CA916&tbs=isz%3Al&hl=en#imgrc=eQ4mOGEHyHb3RM">
                <img src="img/hotel8.jpg" alt="Hotel Image" class="design">
            </a>
        </figure>
    </div>

    <div class="marginz justify">

        <h2 class="head">
            Update Your Account Information
        </h2>

        <form action="mailUpdate.php" method="POST">


            Update First Name: <input type="text" name="fname1"><br>
            Update Last Name: <input type="text" name="lname1"><br>
            Update E-mail: <input type="text" name="email1"><br>
            Update Street Address: <input type="text" name="address1"><br>
            Update City: <input type="text" name="city1"><br>
            Update Postal Code: <input type="text" name="postal1"><br>
            Update Country <input type="text" name="country1"><br>
            Update Phone Number: <input type="text" name="phone1"><br>

            <br>
            <input class="wr" type="submit" value="Submit" name="submit">

        </form>

    </div>

    <section id="aboutus">
        <nav>
            <div class="grid grid4 add-gutters">
                <!-- adding grid for fire navigation elements -->
                <a href="index.php" class="pad nav-item">StayComfortzz</a>
                <a href="https://www.instagram.com/buunny98/" class="nav-item pad">Instagram</a> <!-- tag for an embedded link -->
                <a href="https://www.instagram.com/buunny98/" class="nav-item pad">Facebook</a>
                <!-- tag for an embedded link -->
                <a href="https://www.instagram.com/buunny98/" class="nav-item pad">Twitter</a> <!-- tag for an embedded link -->
                <a href="https://www.instagram.com/buunny98/" class="nav-item pad">Snapchat</a> <!-- tag for an embedded link -->
                <a href="member.php" class="nav-item pad">Email</a>

            </div>
        </nav>
    </section>

</body>

</html>