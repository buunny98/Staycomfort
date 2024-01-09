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

        <h3 class="centered">The Home Of Comfort</h3>
        <figure>
            <img src="img/hotel1.jpg" alt="Hotel Image" class="design">
        </figure>
    </div>


    <div class="marginz">
        <section id="welcome">

            <!-- adding grid one entire element -->
            <h4 class="subhead"> Who Are We?</h4>
            <p class="one">

                "StayComfortzz is a webiste on which you can view hotels, and live in your comfort.
                Whether you’re looking for a treehouse for the weekend or an
                entire home for the whole family, a warm welcome awaits.
                Behind every stay is a real person who can give you the
                details you need to check in and feel at home."
                <br>
                <br>
                The safety of our community is a top priority.
                StayComfortzz hosts around the world are committing to
                our updated COVID-19 safety and cleaning processes
                to help give you peace of mind when you need to get
                away. This is a new evolution in Airbnb's safety
                standards, and we've asked all hosts* to commit to
                these new practices by November 20, 2020.
                Hosts and guests are required to maintain a
                social distance of six feet (two metres) or more—as recommended by global health organizations.</p>

            <!-- adding grid one entire element -->
            <h4 class="subhead"> Countries In Which StayComfortzz Is Available</h4>
            <div class="grid grid1 add-gutters">
                <p class="one">
                    Australia, Canada, US, India, China, Russia, Mexico, England and many more to come. <br>
                </p>
            </div>


        </section>

        <hr>

        <section id="designs">


            <h3 class="head">
                Editor's Choice Hotels
            </h3>
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
                    <p class="two"> Located near the beach, Thistle Piccadilly is in London's London City Centre neighbourhood,
                        an area with good shopping. Buckingham Palace and The British Museum are cultural highlights,
                        and some of the area's notable landmarks include Big Ben and London Eye. Looking to enjoy an
                        event or a match? <br> <br>See what's going on at London Stadium or O2 Arena. Guests appreciate
                        the hotel's location for the sightseeing. It's also convenient for
                        public transportation: Leicester Square Underground Station is 3 minutes on
                        foot and Piccadilly Circus Underground Station is 4 minutes.
                        <br>
                        All of Hotel Linda Vista's spacious rooms and suites have views of the Arenal Volcano
                        and/or lake. The hotel restaurant offers international and national cuisine with splendid
                        panoramic views. The Linda Vista del Norte Hotel is located in a privileged area
                        of La Fortuna, near the town "El Castillo" and only 4 kilometers from the Arenal Volcano National Park.
                    </p>

                </div>
            </div>
            <br>
            <div class="grid grid2 add-gutters">
                <div class="grid grid1 add-gutters">


                    <figure>
                        <a href="https://www.pinterest.ca/pin/143693044333698282/?nic_v2=1a2mHYQEW">
                            <img src="img/hotel3.jpg" alt="hotel Design" width="600" height="650">
                        </a>


                    </figure>
                </div>


                <div class="grid grid1 add-gutters">

                    <h4> Massive 5-Star Hotel by StayComfortzz</h4>
                    <p class="two"> Located near the beach, Thistle Piccadilly is in London's London City Centre neighbourhood,
                        an area with good shopping. Buckingham Palace and The British Museum are cultural highlights,
                        and some of the area's notable landmarks include Big Ben and London Eye. Looking to enjoy an
                        event or a match? <br> <br>See what's going on at London Stadium or O2 Arena. Guests appreciate
                        the hotel's location for the sightseeing. It's also convenient for
                        public transportation: Leicester Square Underground Station is 3 minutes on
                        foot and Piccadilly Circus Underground Station is 4 minutes.
                        <br>
                        All of Hotel Linda Vista's spacious rooms and suites have views of the Arenal Volcano
                        and/or lake. The hotel restaurant offers international and national cuisine with splendid
                        panoramic views. The Linda Vista del Norte Hotel is located in a privileged area
                        of La Fortuna, near the town "El Castillo" and only 4 kilometers from the Arenal Volcano National Park.
                    </p>

                </div>
            </div>
            <br>
            <div class="grid grid2 add-gutters">
                <div class="grid grid1 add-gutters">


                    <figure>
                        <a href="https://www.pinterest.ca/pin/143693044333698282/?nic_v2=1a2mHYQEW">
                            <img src="img/hotel4.jpg" alt="hotel Design" width="600" height="650">
                        </a>


                    </figure>
                </div>


                <div class="grid grid1 add-gutters">

                    <h4> Nah-Mate Hotel for Celebrities by StayComfortzz</h4>
                    <p class="two"> "StayComfortzz is a webiste on which you can view hotels, and live in your comfort.
                        Whether you’re looking for a treehouse for the weekend or an
                        entire home for the whole family, a warm welcome awaits.
                        Behind every stay is a real person who can give you the
                        details you need to check in and feel at home."
                        <br>
                        <br>
                        The safety of our community is a top priority.
                        StayComfortzz hosts around the world are committing to
                        our updated COVID-19 safety and cleaning processes
                        to help give you peace of mind when you need to get
                        away. This is a new evolution in Airbnb's safety
                        standards, and we've asked all hosts* to commit to
                        these new practices by November 20, 2020.
                        Hosts and guests are required to maintain a
                        social distance of six feet (two metres) or more—as recommended by global health organizations.
                        All of Hotel Linda Vista's spacious rooms and suites have views of the Arenal Volcano
                        and/or lake. The hotel restaurant offers international and national cuisine with splendid
                        panoramic views. The Linda Vista del Norte Hotel is located in a privileged area
                        of La Fortuna, near the town "El Castillo" and only 4 kilometers from the Arenal Volcano National Park.
                    </p>

                </div>
            </div>
        </section>
    </div>

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

    <body>

</html>