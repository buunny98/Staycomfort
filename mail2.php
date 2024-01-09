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

    <strong>Your name has been updated</strong> <?php echo $_GET["name"]; ?><br> <br>
    <strong> Your email address has been updated: </strong> <?php echo $_GET["email"]; ?> and you have become StayComfortzz Member. <br> <br>
    <strong> Thank you for being a Member of StayComfortzz </strong>
    <?php

    $name = (!empty($_GET['name']) ? $_GET['name'] : "");
    $email = (!empty($_GET['email']) ? $_GET['email'] : "");
    $message = (!empty($_GET['message']) ? $_GET['message'] : "");

    $file = 'updatedInformation.txt';

    if ($handle = fopen($file, 'a+')) {
        // Write string to the file
        // the function returns the number of bytes interted or false
        fwrite($handle, "$name, $email, $message\n");

        fclose($handle);
    } else {
        echo "Could not open file for writing.";
    }

    ?>

</body>

</html>