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

        <h3 class="centered">Welcome Member!</h3>
        <figure>
            <a href="https://www.google.com/search?q=nature+camping&tbm=isch&ved=2ahUKEwjYr_77iqzsAhUFhp4KHZsdA0sQ2-cCegQIABAA&oq=nature+camping&gs_lcp=CgNpbWcQAzICCAAyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADICCABQtRxY3SBgriFoAHAAeACAAUOIAfABkgEBNJgBAKABAaoBC2d3cy13aXotaW1nwAEB&sclient=img&ei=dr2CX9icN4WM-gSbu4zYBA&bih=1093&biw=2179&rlz=1C1CHBF_enCA916CA916&tbs=isz%3Al&hl=en#imgrc=eQ4mOGEHyHb3RM">
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

            <form action="index.php">
                <input class="wr" type="submit" value="Add A New Hotel Listing to the Website" />
            </form>

            <form action="index.php">
                <input class="wr" type="submit" value="Add Editor's Choice Hotels to the Home Page" />
            </form>
        </div>

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

                    <figcaption> Image Retrieved from <a href="https://www.pinterest.ca/pin/143693044333698282/?nic_v2=1a2mHYQEW" class="select">Pinterest.
                        </a> <br>
                    </figcaption>
                </figure>
            </div>


            <div class="grid grid1 add-gutters">

                <h4> Rocket Hotel by StayComfortzz</h4>
                <p class="two"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum <br>
                    <br>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
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

                    <figcaption> Image Retrieved from <a href="https://www.pinterest.ca/pin/143693044333698282/?nic_v2=1a2mHYQEW" class="select">Pinterest.
                        </a> <br>
                    </figcaption>
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
                    <form action="https://www.expedia.ca/London-Hotels-Apex-City-Of-London-Hotel.h1217618.Hotel-Information?chkin=2020-10-25&chkout=2020-10-26&x_pwa=1&rfrr=HSR&pwa_ts=1602400954151&referrerUrl=aHR0cHM6Ly93d3cuZXhwZWRpYS5jYS9Ib3RlbC1TZWFyY2g%3D&useRewards=false&rm1=a2&regionId=178279&destination=London+%28and+vicinity%29%2C+England%2C+United+Kingdom&destType=MARKET&neighborhoodId=6144911&sort=RECOMMENDED&top_dp=90&top_cur=CAD&semdtl=&selectedRoomType=200354496&selectedRatePlan=202164160">
                        <input class="wr" type="submit" value="More Price Details" />
                    </form>

                    <form action="index.php">
                        <input class="wr" type="submit" value="Book the Hotel" />
                    </form>
                </div>

            </div>
        </div>
        <hr>
    </div>
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

</body>

</html>