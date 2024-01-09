<?php
//include auth.php file on all secure pages
include("auth_sessionNotActiveCheck.php");
?>

<!DOCTYPE html>
<html lang="en">
<!-- giving the attributes -->

<head>
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


    <div class="marginz">

        <div class="grid grid3 add-gutters">
            <form action="update.php">
                <input class="wr" type="submit" value="Update Your Account" />
            </form>

            <form action="hotelData.php">
                <input class="wr" type="submit" value="Add Hotel Listing To The Website & Database" />
            </form>

            <form action="customize.php">
                <input class="wr" type="submit" value="Customize The member Page and Add Hotel's" />
            </form>


        </div>
        <br>
        <br>
        <form action="logout.php">
            <input class="wr" type="submit" value="Logout" />
        </form>


        <br>
        <br>

        <hr>

        <h3 class="head">
            Editor's Choice (Hotels)
        </h3>

        <h4>(These Hotels can be added and edited by the Member on the Home page and on the Browse Hotel page) </h4>
        <hr>
        <div class="grid grid2 add-gutters">
            <div class="grid grid1 add-gutters">


                <figure>
                    <a href="https://www.pinterest.ca/pin/143693044333698282/?nic_v2=1a2mHYQEW">
                        <img src="img/hotel2.jpg" alt="hotel Design" width="600" height="650">
                    </a>

                </figure>
            </div>


            <div class="grid grid1 add-gutters">

                <h4> Rocket Hotel by StayComfortzz</h4>
                <p class="two">
                    The Panoramic Hotel is a modern,
                    elegant 4-star hotel overlooking
                    the sea, perfect for a romantic,
                    charming vacation, in the enchanting
                    setting of Taormina and the Ionian Sea.

                    The rooms at the Panoramic Hotel are new,
                    well-lit and inviting. Our reception staff will
                    be happy to help you during your stay in Taormina,
                    suggesting itineraries, guided visits and some good
                    restaurants in the historic centre.
                    While you enjoy a cocktail by
                    the swimming pool on the rooftop terrace,
                    you will be stunned by the breathtaking
                    view of the bay of Isola Bella. Here, during
                    your summer stays, our bar serves traditional
                    Sicilian dishes, snacks and salads.

                    At the end of a stairway across from the
                    hotel, the white pebbles on the beach of
                    Isola Bella await you as well as beach
                    facilities with lounge chairs and umbrellas
                    and areas with free access to the pristine
                    clear sea that becomes deep just a few metres
                    from the shore. <br>
                    <br>
                    The Panoramic Hotel is a modern,
                    elegant 4-star hotel overlooking
                    the sea, perfect for a romantic,
                    charming vacation, in the enchanting
                    setting of Taormina and the Ionian Sea.

                    The rooms at the Panoramic Hotel are new,
                    well-lit and inviting. Our reception staff will
                    be happy to help you during your stay in Taormina,
                    suggesting itineraries, guided visits and some good
                    restaurants in the historic centre.
                    While you enjoy a cocktail by
                    the swimming pool on the rooftop terrace,
                    you will be stunned by the breathtaking
                    view of the bay of Isola Bella. Here, during
                    your summer stays, our bar serves traditional
                    Sicilian dishes, snacks and salads.

                    At the end of a stairway across from the
                    hotel, the white pebbles on the beach of
                    Isola Bella await you as well as beach
                    facilities with lounge chairs and umbrellas
                    and areas with free access to the pristine
                    clear sea that becomes deep just a few metres
                    from the shore.
                </p>

            </div>
        </div>
        <hr>
        <h3 class="headDescrip"> Best value Hotel </h3>
        <h4>(These Hotels can be added and edited by the Member on the Home page and on the Browse Hotel page) </h4>
        <hr>



        <div class="grid grid2 add-gutters">
            <div class="grid grid1 add-gutters">


                <figure>
                    <a href="https://www.pinterest.ca/pin/143693044333698282/?nic_v2=1a2mHYQEW">
                        <img src="img/hotel7.jpg" alt="hotel Design" width="600" height="650">
                    </a>


                </figure>
            </div>


            <div class="grid grid1 add-gutters">

                <h4> Park Plaza Hotel London</h4>

                <h5 class="justify"> Popular Amenities </h5>
                <p class="two">
                    <ul>
                        <div class="grid grid6 add-gutters">
                            <li> Free Wifi </li>
                            <li> Free Breakfast </li>
                            <li> Laundry </li>
                            <li> bar </li>
                            <li> Air Conditioning </li>
                            <li> Tennis Court </li>
                        </div>
                    </ul>
                </p>
                <br>
                <br>
                <p>
                    Located near the beach, Thistle Piccadilly is in London's London City Centre neighbourhood,
                    an area with good shopping. Buckingham Palace and The British Museum are cultural highlights,
                    and some of the area's notable landmarks include Big Ben and London Eye. Looking to enjoy an
                    event or a match? <br> <br>See what's going on at London Stadium or O2 Arena. Guests appreciate
                    the hotel's location for the sightseeing. It's also convenient for
                    public transportation: Leicester Square Underground Station is 3 minutes on
                    foot and Piccadilly Circus Underground Station is 4 minutes.
                    <br>
                </p>
                <hr>

                <p>
                    Free cancellation before: <br>
                    Book before Oct 23. <br>
                    Reserve Now, Pay Later.
                </p>

                <p class="headDescrip">
                    <strong>CA $900 per/night </strong><br>
                    <strong>Total CA $1100 </strong><br>
                    <strong>With Taxes. </strong>
                </p>

                <div class="grid grid2 add-gutters">
                    <form action="index.php">
                        <input class="wr" type="submit" value="More Price Details" />

                    </form>
                    <br>
                    <br>
                    <br>
                    <form action="index.php">
                        <input class="wr" type="submit" value="Book the Hotel" />
                    </form>
                </div>

            </div>
        </div>
        <br>
        <hr>

        <h3 class="head"> <?php echo $_SESSION['username']; ?>'s Custom Page </h3>

        <hr>
        <br>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "abhishek_taak";
        $db = new mysqli($servername, $username, $password, $dbname);
        $result = mysqli_query($db, "SELECT * FROM memberCustom");
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {


                //echo '<div class="pic grid grid1 filterDiv star pool park">';

                echo '<div class="grid grid2 add-gutters">';

                echo '<div class="pic2">';
                echo "<img src='img/" . $row['hotel_Image'] . "'>";
                echo '</div>';

                echo '<div class="grid grid1 add-gutters">';

                echo "<h2>" . $row['hotel_name'] . "</h2>";

                echo "<h2>", "&#x2605;" . $row['hotel_stars'] . '-Stars', "&#x2605;", "</h2>";

                echo "<p>", "<strong>", 'Extra Features And Description: ', "</strong>" . $row['extra_features'] . "<p>";

                echo "<p>", "<strong>", '(Phone Number: ' . $row['hotelphone_number'] .  ')', "</strong>", "<p>";
                echo "<p>", "<strong>", '(Email: ' . $row['email'] .  ')', "</strong>", "<p>";
                echo "<p>", "<strong>", '(Address: ' . $row['hotel_Address'] . ')', "</strong>", "<p>";
                echo "<hr>";
                echo "<p>", 'City: ' . $row['City'] . "<p>";
                echo "<p>", 'Postal Code: ' . $row['postal_code'] . "<p>";
                echo "<p>", 'Country: ' . $row['Country'] . "<p>";
                echo "<p>", "<strong>", 'Additional Comments: ', "</strong>" . $row['comments'] .  "<p>";
                echo "<hr>";

                echo '</div>';


                echo '</div>';
            }
        }
        ?>

        <style>
            .center2 {

                text-align: center;
                margin: 4rem;

            }

            .pic {
                width: auto;
                height: auto;

            }

            .pic2 {
                width: 600px;
                height: 650px;

            }
        </style>



    </div>

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


</body>

</html>