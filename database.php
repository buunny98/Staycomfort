<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<head>
    <title>making a database </title>
</head>

<body>

    <?php
    // 2. Create a database connection
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connection Successful";
    }


    // Create database
    $sql = "CREATE DATABASE abhishek_taak";
    if ($conn->query($sql) === TRUE) {
        echo "   Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    $db = mysqli_select_db($conn, "abhishek_taak");

    $sql1 = "CREATE TABLE Users (
        userid INT(20) AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50),
        password_ofUser VARCHAR(50),
        firstname VARCHAR(50) NOT NULL,
        lastname VARCHAR(50) NOT NULL,
        phone_number VARCHAR(50),
        email VARCHAR(50),
        Home_Address VARCHAR(50),
        City VARCHAR(50),
        postal_code VARCHAR(50),
        Country VARCHAR(50),
        
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

    if (mysqli_query($conn, $sql1)) {
        echo "        Table Users created successfully";
    } else {
        echo "        Error creating table: " . mysqli_error($conn);
    }


    $sql2 = "CREATE TABLE Hotel_Listings (
        hotelid INT(20)  PRIMARY KEY,
        hotel_stars INT(7),
        hotel_name VARCHAR(50) NOT NULL,
        extra_features VARCHAR(50) NOT NULL,
        hotelphone_number VARCHAR(50),
        email VARCHAR(50),
        hotel_Address VARCHAR(50),
        City VARCHAR(50),
        postal_code VARCHAR(50),
        Country VARCHAR(50),
        hotel_Image VARCHAR(255)

        )";

    if (mysqli_query($conn, $sql2)) {
        echo "       Table Hotel Listings created successfully";
    } else {
        echo "        Error creating table: " . mysqli_error($conn);
    }


    $sql5 = "CREATE TABLE memberCustom (
        hotelid INT(20)  PRIMARY KEY,
        hotel_stars INT(7),
        hotel_name VARCHAR(50) NOT NULL,
        extra_features VARCHAR(50) NOT NULL,
        hotelphone_number VARCHAR(50),
        email VARCHAR(50),
        hotel_Address VARCHAR(50),
        City VARCHAR(50),
        postal_code VARCHAR(50),
        Country VARCHAR(50),
        hotel_Image VARCHAR(255),
        comments VARCHAR(255)

        )";

    if (mysqli_query($conn, $sql5)) {
        echo "       Table memberCustom created successfully";
    } else {
        echo "        Error creating table: " . mysqli_error($conn);
    }
    //-----------

    $sql3 = "CREATE TABLE Rooms_And_Extra_Features (
        room_id INT(20)  AUTO_INCREMENT PRIMARY KEY,
        hotelid INT(20),        
        total_rooms INT(20),
        room_type INT(20),
        extraAnd_special_features VARCHAR(255),
        price_per_room VARCHAR(255),
        FOREIGN KEY (hotelid) REFERENCES Hotel_Listings (hotelid)
        )";

    "ALTER TABLE Rooms_And_Extra_Features (
    ADD FOREIGN KEY (hotelid) REFERENCES Hotel_Listings (hotelid))";

    if (mysqli_query($conn, $sql3)) {
        echo "       Table Room and extra Features for Hotels created successfully";
    } else {
        echo "        Error creating table: " . mysqli_error($conn);
    }

    $sql4 = "CREATE TABLE bookings (
        booking_id INT(20)  AUTO_INCREMENT PRIMARY KEY,
        arrival_date INT(20)  NOT NULL,        
        departure_date INT(20),
        userid INT(20),
        FOREIGN KEY (userid) REFERENCES Users (userid)
        )";

    "ALTER TABLE bookings (
    ADD FOREIGN KEY (userid) REFERENCES Users (userid))";

    if (mysqli_query($conn, $sql4)) {
        echo "       Table Booking ID created successfully";
    } else {
        echo "        Error creating table: " . mysqli_error($conn);
    }

    $conn->close();
    ?>
</body>

</html>