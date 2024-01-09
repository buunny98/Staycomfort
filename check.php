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

<?php

include_once 'db.php';
?>

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
    <h2>
        Featured Hotel's By The Editor
    </h2>

    <!-- Took online help from https://www.w3schools.com/howto/howto_js_filter_elements.asp -->

    <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')"> Show all</button>
        <button class="btn" onclick="filterSelection('swim')">Swimming Pool</button>
        <button class="btn" onclick="filterSelection('park')">Garden</button>
        <button class="btn" onclick="filterSelection('star')">5-Star</button>
    </div>
    <br>
    <a href="test.php" class="c">
        <button class="btn border5 border555"> Click here to view more hotels</button></a>



    <div class="center2">

        <!-- Took online help from https://www.w3schools.com/howto/howto_js_filter_elements.asp -->

        <div class="filterDiv swim">

            <figure>

                <img src="img/hotel2.jpg" alt="hotel Design" width="600" height="650">

            </figure>
            <br>



            <!--  --------- -->
            <div class="grid grid1 add-gutters">

                <h2> Park Plaza Hotel London</h2>

                <h2> &#x2605; 4-Star &#x2605;</h2>

                <h3 class="justify"> Popular Amenities </h3>
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
                    <br>
                    <strong>
                        (Phone Number: 604-789-7415)<br><br>
                        (email: 147852@gmail.com)<br><br>
                        (Address: 90 Hop Street
                        Vancouver, V8S4K1, Canada)
                    </strong>
                    <br>
                </p>
                <hr>

                <p>
                    Free cancellation before: <br>
                    Book before Oct 23. <br>
                    Reserve Now, Pay Later.
                </p>

                <p class="headDescrip">
                    CA $1500 per night<br><br>
                    Total CA $1700 <br> <br>
                    With Taxes.
                </p>

            </div>
            <!--  --------- -->
        </div>

        <?php

        $sql = "INSERT INTO Hotel_Listings(hotelid, hotel_stars, hotel_name, extra_features, hotelphone_number, email,hotel_Address, City, postal_code, Country, hotel_Image)

      
       VALUES('1', '4-star', 'Park Plaza Hotel London',
       ' Swimming Pool, Wifi, Free Breakfast, Laundry, bar, Air Conditioning, Tennis Court ', 
       
       '(Phone Number: 604-789-7415)', '(email: 147852@gmail.com)', '(Address: 90 Hop Street)', 
        'Vancouver', 'V8S4K1', 'Canada', 'hotel2.jpg ');";

        mysqli_query($con, $sql);

        $sql1 = "INSERT INTO rooms_and_extra_features(roomid, hotelid, totalrooms, room_type, extraAnd_special_features, price_per_room)

      
    VALUES('1', '1', '50',
    ' Large Sized', 
    
    'Swimming Pool', '$120/Night');";

        mysqli_query($con, $sql1);


        ?>


        <!-- Took online help from https://www.w3schools.com/howto/howto_js_filter_elements.asp -->
        <div class="filterDiv star">

            <figure>

                <img src="img/hotel3.jpg" alt="hotel Design" width="600" height="650">


            </figure>


            <!----------------->
            <div class="grid grid1 add-gutters">

                <h2> RockStar Hotel</h2>

                <h2> &#x2605; 5-Star &#x2605;</h2>

                <h3 class="justify"> Popular Amenities </h3>
                <p class="two">
                    <ul>
                        <div class="grid grid6 add-gutters">
                            <li> Free Wifi </li>
                            <li> Free Breakfast </li>
                            <li> Laundry </li>
                            <li> bar </li>
                            <li> Air Conditioning </li>
                            <li> Basketball Court </li>
                        </div>
                    </ul>
                </p>
                <br>
                <br>
                <p>
                    Located near the downtown city, beautiful weather can be enjoyed <br> <br>See what's going on at downtown Stadium or O2 Arena. Guests appreciate
                    the hotel's location for the sightseeing. You can also gp to the circus in downtwn city of vancouver also visit the harbour center

                    <br>
                    <br>
                    <strong>
                        (Phone Number: 604-789-7515)<br><br>
                        (email: 14785299@gmail.com)<br><br>
                        (Address: 900 Hop Street
                        Vancouver, V8S4K1, Canada)
                    </strong>
                    <br>
                </p>
                <hr>

                <p>
                    Free cancellation before: <br>
                    Book before Jan 23. <br>
                    Reserve Now, Pay Later.
                </p>

                <p class="headDescrip">
                    CA $2500 per night<br><br>
                    Total CA $2700 <br> <br>
                    With Taxes.
                </p>

            </div>
            <!--  --------- -->
        </div>

        <?php

        $sql1 = "INSERT INTO Hotel_Listings(hotelid, hotel_stars, hotel_name, extra_features, hotelphone_number, email,hotel_Address, City, postal_code, Country, hotel_Image)


VALUES('2', '5-star', 'RockStar Hotel',
'5-Star, Swimming Pool, Wifi, Free Breakfast, Laundry, bar, Air Conditioning, Basketball Court ', 

'(Phone Number: 604-789-7515)', '(email: 14785299@gmail.com)', '(Address: 900 Hop Street)', 
'Vancouver', 'V8S4K1', 'Canada', 'hotel3.jpg ');";

        mysqli_query($con, $sql1);



        ?>




        <div class="filterDiv park">
            <figure>

                <img src="img/hotel4.jpg" alt="hotel Design" width="600" height="650">


            </figure>
            <div class="grid grid1 add-gutters">

                <h2> Comfort-Inn Hotel</h2>

                <h2> &#x2605; 3-Star &#x2605;</h2>

                <h3 class="justify"> Popular Amenities </h3>
                <p class="two">
                    <ul>
                        <div class="grid grid6 add-gutters">
                            <li> Free Wifi </li>
                            <li> Paid Dinner </li>
                            <li> Laundry </li>
                            <li> Graden </li>
                            <li> Air Conditioning </li>

                        </div>
                    </ul>
                </p>
                <br>
                <br>
                <p>
                    Located near Vanouver BC, enjoy the rainy weather and live your life. <br> <br>Want ot live in a hotel which does not cahrge you a lot of money, come live in Comfort-inn

                    <br>
                    <br>
                    <strong>
                        (Phone Number: 778-789-7515)<br><br>
                        (email: xbox@gmail.com)<br><br>
                        (Address: 9977 Avenue Street
                        Vancouver, V0S3K1, Canada)
                    </strong>
                    <br>
                </p>
                <hr>

                <p>
                    Free cancellation before: <br>
                    Book before Dec 23. <br>
                    Reserve Now, Pay Later.
                </p>

                <p class="headDescrip">
                    CA $350 per night<br><br>
                    Total CA $470 <br> <br>
                    With Taxes.
                </p>

            </div>
            <!--  --------- -->
        </div>

        <?php

        $sql2 = "INSERT INTO Hotel_Listings(hotelid, hotel_stars, hotel_name, extra_features, hotelphone_number, email,hotel_Address, City, postal_code, Country, hotel_Image)


VALUES('3', '3-star', 'Comfort-Inn Hotel',
'Added Garden, Pool Table, Wifi, Paid Dinner, Laundry, Air Conditioning', 

'(Phone Number: 778-789-7515)', '(email: xbox@gmail.com)', '(Address: 9977 Avenue Street)', 
'Vancouver', 'V0S3K1', 'Canada', 'hotel4.jpg ');";

        mysqli_query($con, $sql2);


        ?>


        <div class="filterDiv star">

            <figure>

                <img src="img/hotel5.jpg" alt="hotel Design" width="600" height="650">

            </figure>
            <div class="grid grid1 add-gutters">

                <h2>Cellai Hotel</h2>

                <h2> &#x2605; 5-Star &#x2605;</h2>

                <h3 class="justify"> Popular Amenities </h3>
                <p class="two">
                    <ul>
                        <div class="grid grid6 add-gutters">
                            <li> 5-Star </li>
                            <li> Free Wifi </li>
                            <li> Paid Dinner </li>
                            <li> Laundry </li>

                            <li> Air Conditioning </li>
                            <li> Pool table </li>

                        </div>
                    </ul>
                </p>
                <br>
                <br>
                <p>
                    Hotel Cellai is located in the heart of the historic center of
                    Florence in an extremely characteristic, quite and lively area within short
                    walk distance to all sites and is surrounded <br> <br>by the extraordinary beauty of churches, buildings,
                    shops and monuments. Cellai Hotel is part of a lovingly restored 1800 palace.

                    <br>
                    <br>
                    <strong>
                        (Phone Number: 778-604-7785)<br><br>
                        (email: PS5@gmail.com)<br><br>
                        (Address: 99100 Avenue Street
                        Edmonton, V0S3K1, Canada)
                    </strong>
                    <br>
                </p>
                <hr>

                <p>
                    Free cancellation before: <br>
                    Book before Dec 13. <br>
                    Reserve Now, Pay Later.
                </p>

                <p class="headDescrip">
                    CA $3050 per night<br><br>
                    Total CA $4070 <br> <br>
                    With Taxes.
                </p>

            </div>
            <!--  --------- -->
        </div>

        <?php

        $sql3 = "INSERT INTO Hotel_Listings(hotelid, hotel_stars, hotel_name, extra_features, hotelphone_number, email,hotel_Address, City, postal_code, Country, hotel_Image)


VALUES('4', '5-star', 'Cellai Hotel',
'5-Star Luxury, Pool Table, Wifi, Paid Dinner, Laundry, Air Conditioning', 

'(Phone Number: 778-604-7785)', '(email: PS5@gmail.com)', '(Address: 99100 Avenue Street)', 
'Edmonton', 'V0S3K1', 'Canada', 'hotel5.jpg ');";

        mysqli_query($con, $sql3);


        ?>

        <div class="filterDiv star park">
            <figure>

                <img src="img/hotel6.jpg" alt="hotel Design" width="600" height="650">


            </figure>
            <div class="grid grid1 add-gutters">

                <h2>Mr.Fresh Hotel</h2>

                <h2> &#x2605; 5-Star &#x2605;</h2>

                <h3 class="justify"> Popular Amenities </h3>
                <p class="two">
                    <ul>
                        <div class="grid grid6 add-gutters">
                            <li> 2.5-Star </li>
                            <li> Free Wifi </li>
                            <li> Paid Dinner </li>
                            <li> Grarden </li>

                            <li> Air Conditioning </li>
                            <li> Pool table </li>

                        </div>
                    </ul>
                </p>
                <br>
                <br>
                <p>
                    On entering this charming hotel in Florence, you will immediately sense its
                    special intimate atmosphere that makes you feel like being in your own florentine home.
                    Each detail has been passionately chosen and each room deserves a visit. <br> <br>Hotel Cellai style mixes
                    valuable antiques and original artworks with an unexpected eclectic contemporary twist.
                    The entire House recalls the ancient ‘Palazzi’ of times past where young European aristocrats
                    lived while discovering the beauty and the artistic mysteries of Italy.

                    <br>
                    <br>
                    <strong>
                        (Phone Number: 258-604-7785)<br><br>
                        (email: well@gmail.com)<br><br>
                        (Address:7894 Avenue Street
                        Edmonton, V0S3K1, Canada)
                    </strong>
                    <br>
                </p>
                <hr>

                <p>
                    Free cancellation before: <br>
                    Book before Nov 31. <br>
                    Reserve Now, Pay Later.
                </p>

                <p class="headDescrip">
                    CA $120 per night<br><br>
                    Total CA $170 <br> <br>
                    With Taxes.
                </p>

            </div>
            <!--  --------- -->
        </div>

        <?php

        $sql4 = "INSERT INTO Hotel_Listings(hotelid, hotel_stars, hotel_name, extra_features, hotelphone_number, email,hotel_Address, City, postal_code, Country, hotel_Image)


    VALUES('5', '2.5-star', 'Mr. Fresh Hotel',
    'Huge Graden, Pool Table, Wifi, Paid Dinner, Laundry, Air Conditioning', 

    '(Phone Number: 258-604-7785)', '(email: well@gmail.com)', '(Address: 7894 Avenue Street)', 
    'Edmonton', 'V0S3K1', 'Canada', 'hotel6.jpg ');";

        mysqli_query($con, $sql4);


        ?>

        <!------------>

        <div class="filterDiv swim">
            <figure>

                <img src="img/hotel10.jpg" alt="hotel Design" width="600" height="650">


            </figure>
            <div class="grid grid1 add-gutters">

                <h2>Panoramic Hotel</h2>

                <h2> &#x2605; 4-Star &#x2605;</h2>

                <h3 class="justify"> Popular Amenities </h3>
                <p class="two">
                    <ul>
                        <div class="grid grid6 add-gutters">
                            <li> 4-Star </li>
                            <li> Free Wifi </li>
                            <li> Paid Dinner </li>
                            <li> Swimming Pool</li>

                            <li> Air Conditioning </li>
                            <li> Pool table </li>

                        </div>
                    </ul>
                </p>
                <br>
                <br>
                <p>
                    The rooms at the Panoramic Hotel are new, well-lit and inviting. Our reception staff will be
                    happy to help you during your stay in Taormina, suggesting itineraries,
                    guided visits and some good restaurants in the historic centre.

                    <br> <br>While you enjoy a cocktail by the swimming pool on the rooftop terrace, you will be stunned
                    by the breathtaking view of the bay of Isola Bella. Here, during your summer stays,
                    our bar serves traditional Sicilian dishes, snacks and salads.

                    <br>
                    <br>
                    <strong>
                        (Phone Number: 111-604-7777)<br><br>
                        (email: done@gmail.com)<br><br>
                        (Address: 7894 rich Street
                        Toronto, B9H2C4, Canada)
                    </strong>
                    <br>
                </p>
                <hr>

                <p>
                    Free cancellation before: <br>
                    Book before Dec 31. <br>
                    Reserve Now, Pay Later.
                </p>

                <p class="headDescrip">
                    CA $920 per night<br><br>
                    Total CA $1070 <br> <br>
                    With Taxes.
                </p>

            </div>
            <!--  --------- -->
        </div>

        <?php

        $sql5 = "INSERT INTO Hotel_Listings(hotelid, hotel_stars, hotel_name, extra_features, hotelphone_number, email,hotel_Address, City, postal_code, Country, hotel_Image)


    VALUES('6', '4-star', 'Panoramic Hotel',
    'Swimming Pool, Pool Table, Wifi, Paid Dinner, Laundry, Air Conditioning', 

    '(Phone Number: 111-604-7777)', '(email: done@gmail.com)', '(Address: 7894 Rich Street)', 
    'Toronto', 'B9H2C4', 'Canada', 'hotel10.jpg ');";

        mysqli_query($con, $sql5);


        ?>


        <div class="filterDiv swim">
            <figure>

                <img src="img/hotel11.jpg" alt="hotel Design" width="600" height="650">


            </figure>
            <div class="grid grid1 add-gutters">

                <h2>Arenal Hotel</h2>

                <h2> &#x2605; 2-Star &#x2605;</h2>

                <h3 class="justify"> Popular Amenities </h3>
                <p class="two">
                    <ul>
                        <div class="grid grid6 add-gutters">
                            <li> Affordable </li>
                            <li> Free Wifi </li>
                            <li> Paid Dinner </li>
                            <li> Swimming Pool</li>

                            <li> Air Conditioning </li>
                            <li> Pool table </li>

                        </div>
                    </ul>
                </p>
                <br>
                <br>
                <p>
                    All of Hotel Linda Vista's spacious rooms and suites have views of the Arenal Volcano
                    and/or lake. The hotel restaurant offers international and national cuisine with splendid


                    <br> <br> panoramic views. The Linda Vista del Norte Hotel is located in a privileged area
                    of La Fortuna, near the town "El Castillo" and only 4 kilometers from the Arenal Volcano National Park.

                    <br>
                    <br>
                    <strong>
                        (Phone Number: 563-604-7700)<br><br>
                        (email: rock@gmail.com)<br><br>
                        (Address: 7894 hump Street
                        Toronto, B9H2C4, Canada)
                    </strong>
                    <br>
                </p>
                <hr>

                <p>
                    Free cancellation before: <br>
                    Book before Nov 31. <br>
                    Reserve Now, Pay Later.
                </p>

                <p class="headDescrip">
                    CA $70 per night<br><br>
                    Total CA $790 <br> <br>
                    With Taxes.
                </p>

            </div>
            <!--  --------- -->
        </div>

        <?php

        $sql6 = "INSERT INTO Hotel_Listings(hotelid, hotel_stars, hotel_name, extra_features, hotelphone_number, email,hotel_Address, City, postal_code, Country, hotel_Image)


    VALUES('7', '2-star', 'Arenal Hotel',
    'Swimming Pool, Pool Table, Wifi, Paid Dinner, Laundry, Air Conditioning', 

    '(Phone Number: 563-604-7700)', '(email: rock@gmail.com)', '(Address: 7894 hump Street)', 
    'Toronto', 'B9H2C4', 'Canada', 'hotel11.jpg ');";

        mysqli_query($con, $sql6);


        ?>

        <div class="filterDiv swim star">
            <figure>

                <img src="img/hotel12.jpg" alt="hotel Design" width="600" height="650">


            </figure>
            <div class="grid grid1 add-gutters">

                <h2>Ibes Hotel</h2>

                <h2> &#x2605; 5-Star &#x2605;</h2>

                <h3 class="justify"> Popular Amenities </h3>
                <p class="two">
                    <ul>
                        <div class="grid grid6 add-gutters">
                            <li> 5-Star </li>
                            <li> Free Wifi </li>
                            <li> Paid Dinner </li>
                            <li> Swimming Pool</li>

                            <li> Air Conditioning </li>
                            <li> Pool table </li>

                        </div>
                    </ul>
                </p>
                <br>
                <br>
                <p>
                    In London’s West End, less than a 5-minute walk from Tottenham Court Underground
                    Station and Oxford Street shops is the St. Giles. Covent Garden and the British Museum
                    are within a 10-minute walk. The National Gallery is less than a 15-minute walk away.



                    <br> <br>A private bathroom with shower, a TV, and free tea and coffee facilities are provided
                    in each bright room. With classic decor, all rooms at the St. Giles feature a safe and
                    a hairdryer. Internet access is also available for an additional charge.
                    <br>
                    <br>
                    <strong>
                        (Phone Number: 888-604-7100)<br><br>
                        (email: ibes@gmail.com)<br><br>
                        (Address: 147 hwill Street
                        London, B9H2C4, England)
                    </strong>
                    <br>
                </p>
                <hr>

                <p>
                    Free cancellation before: <br>
                    Book before Jan 31. <br>
                    Reserve Now, Pay Later.
                </p>

                <p class="headDescrip">
                    CA $7000 per night<br><br>
                    Total CA $7900 <br> <br>
                    With Taxes.
                </p>

            </div>
            <!--  --------- -->
        </div>

        <?php

        $sql7 = "INSERT INTO Hotel_Listings(hotelid, hotel_stars, hotel_name, extra_features, hotelphone_number, email,hotel_Address, City, postal_code, Country, hotel_Image)


    VALUES('8', '5-star', 'Ibes Hotel',
    'Swimming Pool, Pool Table, 5-Star, Paid Dinner, Laundry, Air Conditioning', 

    '(Phone Number: 888-604-7100)', '(email: ibes@gmail.com)', '(Address: 7894 hwill Street)', 
    'London', 'B9H2C4', 'England','hotel12.jpg');";

        mysqli_query($con, $sql7);


        ?>

        <div class="filterDiv swim">
            <figure>

                <img src="img/hotel13.jpg" alt="hotel Design" width="600" height="650">


            </figure>
            <div class="grid grid1 add-gutters">

                <h2>Sandmal Hotel</h2>

                <h2> &#x2605; 1-Star &#x2605;</h2>

                <h3 class="justify"> Popular Amenities </h3>
                <p class="two">
                    <ul>
                        <div class="grid grid6 add-gutters">
                            <li> Affordable pricing </li>
                            <li> Free Wifi </li>
                            <li> Paid Dinner </li>
                            <li> Swimming Pool</li>

                            <li> Air Conditioning </li>
                            <li> Pool table </li>

                        </div>
                    </ul>
                </p>
                <br>
                <br>
                <p>
                    The Sandman Longueuil hotel has easy access to many of the
                    city’s top attractions, including the Casino, Old Montreal,




                    <br> <br> La Ronde and Montreal’s underground city. Cozy guest rooms with
                    panoramic views allow you to unwind, and an indoor pool and sauna
                    ensure that your stay is filled with ease. Whether you’re on the
                    go, or in town to check out all the charming sights and sounds,
                    Sandman Longueuil is always an impressive treat.
                    <br>
                    <br>
                    <strong>
                        (Phone Number: 888-604-2587)<br><br>
                        (email: sandmal@gmail.com)<br><br>
                        (Address: 1170 bon Street
                        Montreal, T5E2K9, Canada)
                    </strong>
                    <br>
                </p>
                <hr>

                <p>
                    Free cancellation before: <br>
                    Book before Nov 31. <br>
                    Reserve Now, Pay Later.
                </p>

                <p class="headDescrip">
                    CA $70 per night<br><br>
                    Total CA $90 <br> <br>
                    With Taxes.
                </p>

            </div>
            <!--  --------- -->
        </div>

        <?php

        $sql8 = "INSERT INTO Hotel_Listings(hotelid, hotel_stars, hotel_name, extra_features, hotelphone_number, email,hotel_Address, City, postal_code, Country, hotel_Image)


    VALUES('9', '1-star', 'Sandmal Hotel',
    'Swimming Pool, Pool Table, Affordable Pricing, Paid Dinner, Laundry, Air Conditioning', 

    '(Phone Number: 888-604-2587)', '(email: Sandmal@gmail.com)', '(Address: 1170 bon Street)', 
    'montreal', 'T5E2K9', 'Canada', 'hotel13.jpg ');";

        mysqli_query($con, $sql8);


        ?>




        <div class="filterDiv park">
            <figure>

                <img src="img/hotel14.jpg" alt="hotel Design" width="600" height="650">


            </figure>
            <div class="grid grid1 add-gutters">

                <h2>WelcomeINSS Hotel</h2>

                <h2> &#x2605; 4-Star &#x2605;</h2>

                <h3 class="justify"> Popular Amenities </h3>
                <p class="two">
                    <ul>
                        <div class="grid grid6 add-gutters">
                            <li> Huge Garden </li>
                            <li> Free Wifi </li>
                            <li> Paid Dinner </li>
                            <li> 4-Star</li>

                            <li> Air Conditioning </li>
                            <li> Pool table </li>

                        </div>
                    </ul>
                </p>
                <br>
                <br>
                <p>
                    Minutes away from the heart of downtown Ottawa, the
                    109 room WelcomINNS Ottawa offers comfort and convenience
                    at an affordable price. The WelcomINNS Ottawa is perfectly
                    situated off the Trans-Canada Highway, across the street
                    from the St.
                    <br> <br> Laurent Shopping Centre and in close proximity
                    to top tourist destinations, including the Canada Science
                    and Technology Museum, the National Gallery of Canada, and
                    Parliament Hill. As a guest, your comfort and satisfaction
                    are our top priority. For this reason, we provide complimentary
                    parking, Wi-Fi, and continental breakfast. We also offer an
                    onsite fitness facility available 24/7.
                    <br>
                    <br>
                    <strong>
                        (Phone Number: 888-888-2580)<br><br>
                        (email: INSS@gmail.com)<br><br>
                        (Address: 1170 Hirt Street
                        ottwa, L5E2K9, Canada)
                    </strong>
                    <br>
                </p>
                <hr>

                <p>
                    Free cancellation before: <br>
                    Book before Jan 31. <br>
                    Reserve Now, Pay Later.
                </p>

                <p class="headDescrip">
                    CA $730 per night<br><br>
                    Total CA $854 <br> <br>
                    With Taxes.
                </p>

            </div>
            <!--  --------- -->
        </div>

        <?php

        $sql9 = "INSERT INTO Hotel_Listings(hotelid, hotel_stars, hotel_name, extra_features, hotelphone_number, email,hotel_Address, City, postal_code, Country, hotel_Image)


    VALUES('10', '4-star', 'WelcomeINSS Hotel',
    'Garden, Pool Table, 4-star, Paid Dinner, Laundry, Air Conditioning', 

    '(Phone Number: 888-888-2580)', '(email: INSS@gmail.com)', '(Address: 1170 Hirt Street)', 
    'Ottawa', 'L5E2K9', 'Canada', 'hotel14.jpg ');";

        mysqli_query($con, $sql9);


        ?>


        <div class="filterDiv park swim">
            <figure>

                <img src="img/hotel15.jpg" alt="hotel Design" width="600" height="650">


            </figure>
            <div class="grid grid1 add-gutters">

                <h2> Holiday-Inn Hotel</h2>

                <h2> &#x2605; 3-Star &#x2605;</h2>

                <h3 class="justify"> Popular Amenities </h3>
                <p class="two">
                    <ul>
                        <div class="grid grid6 add-gutters">
                            <li> Huge Garden </li>
                            <li> Free Wifi </li>
                            <li> Paid Dinner </li>
                            <li> Swimming Pool</li>

                            <li> Air Conditioning </li>
                            <li> Pool table </li>

                        </div>
                    </ul>
                </p>
                <br>
                <br>
                <p>
                    Nestled in charming Sainte-Foy, the heart of culturally
                    rich Québec City is within easy reach of the Holiday
                    Inn Québec.
                    <br> <br> We’ve got a whole buffet full of offerings
                    ready to help kickstart your day. We also have Wi-Fi,
                    coffee and tea, and all the in-room conveniences that
                    make you feel right at home, even when you’re away.
                    <br>
                    <br>
                    <strong>
                        (Phone Number: 888-147-9852)<br><br>
                        (email: In@gmail.com)<br><br>
                        (Address: 14520 Trap Ave
                        Quebec, I6T3L2, Canada)
                    </strong>
                    <br>
                </p>
                <hr>

                <p>
                    Free cancellation before: <br>
                    Book before Dec 31. <br>
                    Reserve Now, Pay Later.
                </p>

                <p class="headDescrip">
                    CA $370 per night<br><br>
                    Total CA $420 <br> <br>
                    With Taxes.
                </p>

            </div>
            <!--  --------- -->
        </div>

        <?php

        $sql10 = "INSERT INTO Hotel_Listings(hotelid, hotel_stars, hotel_name, extra_features, hotelphone_number, email,hotel_Address, City, postal_code, Country, hotel_Image)


    VALUES('11', '3-star', 'Holiday-In Hotel',
    'Garden, Pool Table, Swimming Pool, Paid Dinner, Laundry, Air Conditioning', 

    '(Phone Number: 888-147-9852)', '(email: in@gmail.com)', '(Address: 14520 Trap Ave)', 
    'Quenbec', 'I6T3L2', 'Canada', 'hotel15.jpg ');";

        mysqli_query($con, $sql10);


        ?>

        <div class="filterDiv park">
            <figure>

                <img src="img/hotel16.jpg" alt="hotel Design" width="600" height="650">


            </figure>
            <div class="grid grid1 add-gutters">

                <h2> Kyriad Hotel</h2>

                <h2> &#x2605; 4-Star &#x2605;</h2>

                <h3 class="justify"> Popular Amenities </h3>
                <p class="two">
                    <ul>
                        <div class="grid grid6 add-gutters">
                            <li> Huge Garden </li>
                            <li> Free Wifi </li>
                            <li> Paid Dinner </li>
                            <li> 4-Star</li>

                            <li> Air Conditioning </li>
                            <li> Pool table </li>

                        </div>
                    </ul>
                </p>
                <br>
                <br>
                <p>
                    This hotel sits in central Nice, just 1,150 feet from the
                    ferry port and a 20-minute walk from the Promenade des Anglais.
                    Its rooms are air-conditioned with free Wi-Fi access.
                    <br> <br>The guest
                    rooms at the Kyriad Nice Port are equipped with flat-screen
                    TVs with satellite channels and a private bathroom. Each is
                    serviced by a lift. The Kyriad Hotel Nice Port has a 24-hour
                    reception, which is hosted by a multilingual team.
                    The hotel serves a buffet breakfast every morning.
                    <br>
                    <br>
                    <strong>
                        (Phone Number: 888-789-9852)<br><br>
                        (email: ky@gmail.com)<br><br>
                        (Address: 145 apon Ave
                        Quebec, I6T3L2, Canada)
                    </strong>
                    <br>
                </p>
                <hr>

                <p>
                    Free cancellation before: <br>
                    Book before Jan 31. <br>
                    Reserve Now, Pay Later.
                </p>

                <p class="headDescrip">
                    CA $3700 per night<br><br>
                    Total CA $4200 <br> <br>
                    With Taxes.
                </p>

            </div>
            <!--  --------- -->
        </div>

        <?php

        $sql11 = "INSERT INTO Hotel_Listings(hotelid, hotel_stars, hotel_name, extra_features, hotelphone_number, email,hotel_Address, City, postal_code, Country, hotel_Image)


    VALUES('12', '4-star', 'Kyriad Hotel',
    'Garden, Pool Table, 4-star, Paid Dinner, Laundry, Air Conditioning', 

    '(Phone Number: 888-789-9852)', '(email: ky@gmail.com)', '(Address: 145 apon Ave)', 
    'Quenbec', 'I6T3L2', 'Canada', 'hotel16.jpg ');";

        mysqli_query($con, $sql11);


        ?>


        <div class="filterDiv star">
            <figure>

                <img src="img/hotel17.jpg" alt="hotel Design" width="600" height="650">


            </figure>
            <div class="grid grid1 add-gutters">

                <h2> Munich Hotel</h2>

                <h2> &#x2605; 5-Star &#x2605;</h2>

                <h3 class="justify"> Popular Amenities </h3>
                <p class="two">
                    <ul>
                        <div class="grid grid6 add-gutters">
                            <li> 5-Star </li>
                            <li> Free Wifi </li>
                            <li> Paid Dinner </li>
                            <li> Comfortable</li>

                            <li> Air Conditioning </li>
                            <li> Pool table </li>

                        </div>
                    </ul>
                </p>
                <br>
                <br>
                <p>
                    Enjoy the peace and quiet of the rural
                    environment and benefit from the close
                    proximity to Munich: At our 3-star Superior
                    Mercure
                    <br> <br>Hotel München Airport Aufkirchen you
                    can relax in one of our 72 comfortable and
                    luxurious rooms. All our accommodations have satellite
                    TV, a safe, as well as complimentary tea and coffee facilities.
                    <br>
                    <br>
                    <strong>
                        (Phone Number: 111-111-1587)<br><br>
                        (email: munich@gmail.com)<br><br>
                        (Address: 5847 req Street
                        Munich, H8R2K0, Munich)
                    </strong>
                    <br>
                </p>
                <hr>

                <p>
                    Free cancellation before: <br>
                    Book before MAR 31. <br>
                    Reserve Now, Pay Later.
                </p>

                <p class="headDescrip">
                    CA $7000 per night<br><br>
                    Total CA $7200 <br> <br>
                    With Taxes.
                </p>

            </div>
            <!--  --------- -->
        </div>

        <?php

        $sql12 = "INSERT INTO Hotel_Listings(hotelid, hotel_stars, hotel_name, extra_features, hotelphone_number, email,hotel_Address, City, postal_code, Country, hotel_Image)


    VALUES('13', '5-star', 'Munich Hotel',
    '5-Star Pool Table, Paid Dinner, Laundry, Air Conditioning', 

    '(Phone Number: 111-111-1587)', '(email: munich@gmail.com)', '(Address: 5847 req Street)', 
    'munich', 'H8R2K0', 'Munich', 'hotel17.jpg ');";

        mysqli_query($con, $sql12);


        ?>

        <div class="filterDiv star pool">
            <figure>

                <img src="img/hotel18.jpg" alt="hotel Design" width="600" height="650">


            </figure>
            <div class="grid grid1 add-gutters">

                <h2> berlin Hotel</h2>

                <h2> &#x2605; 5-Star &#x2605;</h2>

                <h3 class="justify"> Popular Amenities </h3>
                <p class="two">
                    <ul>
                        <div class="grid grid6 add-gutters">
                            <li> 5-Star </li>
                            <li> Free Wifi </li>
                            <li> Paid Dinner </li>
                            <li> swimming Pool</li>

                            <li> Air Conditioning </li>
                            <li> Pool table </li>

                        </div>
                    </ul>
                </p>
                <br>
                <br>
                <p>
                    The Comfort Hotel Lichtenberg is located in the northeast part of Berlin,
                    opposite the Die Pyramide building, featuring the highest clock in Europe.
                    The hotel offers 120 comfortably furnished guest rooms. All rooms have cable

                    <br> <br>TV and wireless internet access. All standard guest rooms are
                    equipped with private bathrooms, hair dryers, spacious work
                    desks, direct-dial telephones and satellite television.
                    This is a non-smoking hotel. The distinguishing mark of
                    the Comfort Hotel Lichtenberg is to be able to stay
                    overnight at reasonable rates. For an excellent
                    lodging experience, we cordially invite you to stay
                    with us the next time you are in Berlin.
                    <br>
                    <br>
                    <strong>
                        (Phone Number: 799-999-9999)<br><br>
                        (email:berlin@gmail.com)<br><br>
                        (Address: 587 bert Street
                        Berlin, H8R2K5, berlin)
                    </strong>
                    <br>
                </p>
                <hr>

                <p>
                    Free cancellation before: <br>
                    Book before MAY 31. <br>
                    Reserve Now, Pay Later.
                </p>

                <p class="headDescrip">
                    CA $7500 per night<br><br>
                    Total CA $8200 <br> <br>
                    With Taxes.
                </p>

            </div>
            <!--  --------- -->
        </div>

        <?php

        $sql13 = "INSERT INTO Hotel_Listings(hotelid, hotel_stars, hotel_name, extra_features, hotelphone_number, email,hotel_Address, City, postal_code, Country, hotel_Image)


    VALUES('14', '5-star', 'Berlin Hotel',
    '5-Star, Pool, Paid Dinner, Laundry, Air Conditioning', 

    '(Phone Number: 799-999-9999)', '(email: berlin@gmail.com)', '(Address: 587 bert Street)', 
    'berlin', 'H8R2K5', 'berlin', 'hotel18.jpg ');";

        mysqli_query($con, $sql13);


        ?>

        <div class="filterDiv star pool park">
            <figure>

                <img src="img/hotel19.jpg" alt="hotel Design" width="600" height="650">


            </figure>
            <div class="grid grid1 add-gutters">

                <h2> Candia Hotel</h2>

                <h2> &#x2605; 5-Star &#x2605;</h2>

                <h3 class="justify"> Popular Amenities </h3>
                <p class="two">
                    <ul>
                        <div class="grid grid6 add-gutters">
                            <li> 5-Star </li>
                            <li> Free Wifi </li>
                            <li> Paid Dinner </li>
                            <li> swimming Pool</li>

                            <li> Air Conditioning </li>
                            <li> Huge Garden</li>

                        </div>
                    </ul>
                </p>
                <br>
                <br>
                <p>
                    Candia Hotel is in the center of Athens,
                    5 minutes walking distance from Larissa railway
                    station and Metaxourghio Metro station. All rooms
                    in the hotel are air-conditioned and have private
                    amenities.

                    <br> <br>The hotel boasts a roof garden from which
                    you can relax and enjoy a splendid view of the city
                    and the Acropolis. The roof garden is open from May
                    to the end of September. Free Wi-Fi is also included.
                    <br>
                    <br>
                    <strong>
                        (Phone Number: 147-852-3697)<br><br>
                        (email:candie@gmail.com)<br><br>
                        (Address: 1458 Grde Street
                        Berlin, H8R2K4, berlin)
                    </strong>
                    <br>
                </p>
                <hr>

                <p>
                    Free cancellation before: <br>
                    Book before Jan 31. <br>
                    Reserve Now, Pay Later.
                </p>

                <p class="headDescrip">
                    CA $9500 per night<br><br>
                    Total CA $10200 <br> <br>
                    With Taxes.
                </p>

            </div>
            <!--  --------- -->
        </div>

        <?php

        $sql14 = "INSERT INTO Hotel_Listings(hotelid, hotel_stars, hotel_name, extra_features, hotelphone_number, email,hotel_Address, City, postal_code, Country, hotel_Image)


    VALUES('15', '5-star', 'Candie Hotel',
    '5-Star, Pool, Paid Dinner, Huge Garden, Air Conditioning', 

    '(Phone Number: 147-852-3697)', '(email:candie@gmail.com)', '(Address: 1458 Grde Street)', 
    'berlin', 'H8R2K4', 'berlin', 'hotel19.jpg ');";

        mysqli_query($con, $sql14);


        ?>

        <br>
        <br>
        <br>
        <br>
        <a href="test.php" class="c">
            <button class="btn border5 border555"> Click here to view more hotels</button></a>

        <style>
            .border555 {
                border-radius: 3px;
                background-color: #555555;
                color: black;
            }

            .border5 {
                border-radius: 3px;
                background-color: white;
                color: black;
                border: 2px solid #555555;
            }

            .btn {

                padding: 15px 32px;
                text-align: center;
                color: black;
                transition-duration: 0.4s;
                margin: 16px 0 !important;
                text-decoration: none;
                font-size: 16px;
                cursor: pointer;
            }

            .c {
                color: black;
            }

            a.c:hover,
            a.c:focus {
                color: black;
            }
        </style>
        <br>
        <br>
        <br>
        <br>










    </div>



    <style>
        .center2 {

            text-align: center;
            margin: 4rem;

        }

        .pic {
            width: 900px;
            height: auto;
        }

        .pic2 {
            width: 100%;
            height: 100%
        }
    </style>

    </div>

    <!-- Took online help from https://www.w3schools.com/howto/howto_js_filter_elements.asp -->
    <script>
        filterSelection("all")
        // Took online help from https://www.w3schools.com/howto/howto_js_filter_elements.asp -->
        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }
        // Took online help from https://www.w3schools.com/howto/howto_js_filter_elements.asp -->
        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }
        // Took online help from https://www.w3schools.com/howto/howto_js_filter_elements.asp -->
        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
    <!-- Took online help from https://www.w3schools.com/howto/howto_js_filter_elements.asp -->
    <br>
    <br>
    <br>

    <!-- trying pagination -->


    <!-- trying pagination -->

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