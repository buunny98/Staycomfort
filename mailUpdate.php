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

<br>
<br>
<br>
    <?php
    if (isset($_POST["submit"])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "abhishek_taak";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);



        $firstName = isset($_POST['fname1']) ? $_POST['fname1'] : "";
        $lastName = isset($_POST['lname1']) ? $_POST['lname1'] : "";
        $email = isset($_POST['email1']) ? $_POST['email1'] : "";
        $Address = isset($_POST['address1']) ? $_POST['address1'] : "";
        $city = isset($_POST['city1']) ? $_POST['city1'] : "";
        $code = isset($_POST['postal1']) ? $_POST['postal1'] : "";
        $country = isset($_POST['country1']) ? $_POST['country1'] : "";
        $phone = isset($_POST['phone1']) ? $_POST['phone1'] : "";

        // $sql = "UPDATE users SET firstname = '" . $_POST["fname1"] . "' WHERE userid = '$_SESSION[username]'  ";
        $sql = "UPDATE users SET firstName = '$firstName', lastName = '$lastName', email = '$email', Home_Address = '$Address' 
       
       , City = '$city' , postal_code = '$code', Country = '$country', phone_number = '$phone'
       WHERE username = '$_SESSION[username]'";



        if (empty($firstName)|| empty($lastName) || empty($email)|| empty($Address)||empty($city)||empty($code)||empty($country)||empty($phone) ){

            echo 'fill all the details, even if the some of mentioned details are the same fill them up (PLEASE GO BACK)';
        } else if (mysqli_query($conn, $sql)) {
            echo "Records uploaded Successfully.";
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }

        $conn->close();
    }
    ?>

</body>
</html?