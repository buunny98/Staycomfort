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



    <div class="marginz justify">

        <h2 class="head">
            Fill out The Details To Be a Member:
        </h2>

        <form action="mail.php" method="post">

            First Name: <input type="text" name="fname"><br>
            Last Name: <input type="text" name="lname"><br>
            E-mail: <input type="text" name="email"><br>
            username: <input type="text" name="id"><br>
            Password: <input type="password" name="pass"><br>
            Street Address: <input type="text" name="address"><br>
            City: <input type="text" name="city"><br>
            Postal Code: <input type="text" name="postal"><br>
            Country <input type="text" name="country"><br>
            Phone Number: <input type="text" name="phone"><br>
            <br>
            <input class="wr" type="submit" value="Submit" name="submit">

        </form>
    </div>



    <section id="aboutus">
        <br>
        <br>
        <br>
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