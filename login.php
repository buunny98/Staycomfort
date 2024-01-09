<!DOCTYPE html>
<html lang="en">
<!-- giving the attributes -->

<!-- <head>
    <title>Project One: basic Website</title> <!-- Title for the web browser search bar -->

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

    <?php
    require('db.php'); //connection to db code

    include("auth_sessionActiveCheck.php");

    // Note: arrive at this page only if there is no active session
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])) {
        // removes backslashes
        $username = stripslashes($_POST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);

        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);

        //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
    and password_ofUser='".md5($password)."'";
        $result = mysqli_query($con, $query) or die(mysqli_connect_error());
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect user to index.php
            header("Location: membersOne.php");
        } else {
            echo "<h3>Username/password is incorrect.</h3>
      <br/>Click here to <a href='login.php'>Login</a>";
            echo "<p>Not registered yet? <a href='member.php'>Register Here</a></p>";
        }
    } else {
    ?>
        <h1>Log In</h1>
        <form action="" method="post" name="login">
            <input type="text" name="username" placeholder="Username" required />
            <input type="password" name="password" placeholder="Password" required />
            <input class="wr" name="submit" type="submit" value="Login" />


        </form>

        <div class="marginz">
            <p>Not registered yet? <a href='member.php'>Register Here</a></p>

        </div>
    <?php } ?>



</body>

</html>