<?php
include('db2.php');

$limit = 2;
if (isset($_GET["page"])) {
    $page  = $_GET["page"];
} else {
    $page = 1;
};
$start_from = ($page - 1) * $limit;

$sql = "SELECT * FROM hotel_listings LIMIT $start_from, $limit";
$rs_result = mysqli_query($con, $sql);
?>


<div class=" pic grid grid1">

    <?php
    while ($row = mysqli_fetch_array($rs_result)) {
        echo "<div class='filterDiv'>";

        //echo '<div class="pic grid grid1 filterDiv star pool park">';
        echo "<img src='img/" . $row['hotel_Image'] . "'>";
        //echo '</div>';

        // echo '<div class="pic2 grid grid1 filterDiv star pool park">';

        echo "<h2>" . $row['hotel_name'] . "</h2>";

        echo "<h2>", "&#x2605;" . $row['hotel_stars'] . '-Stars', "&#x2605;", "</h2>";

        echo "<p>", "<strong>", 'Extra Features And Description: ', "</strong>" . $row['extra_features'] . "<p>";

        echo "<br>";

        echo "<p>", "<strong>" , '(Phone Number: '. $row['hotelphone_number'] .  ')', "</strong>","<p>";
        echo "<p>", "<strong>" , '(Email: ' . $row['email'] .  ')', "</strong>", "<p>";
        echo "<p>", "<strong>", '(Address: ' . $row['hotel_Address'] . ')', "</strong>", "<p>";
        echo "<hr>";
        echo "<p>", 'City: ' . $row['City'] . "<p>";
        echo "<p>", 'Postal Code: ' . $row['postal_code'] . "<p>";
        echo "<p>" . $row['Country'] . "<p>";
        echo "<hr>";
        //echo '</div>';
        //echo '</div>';

        //	echo "<p>".$row['image_text']."</p>";
        echo "</div>";
    }
    ?>
</div>

<style>
    .grid {
        display: grid;
    }

    @media (min-width: 90rem) {
        .grid.grid1 {
            /*
      took the help from IAT 235 Notes
      */
            display: inline-block;
            grid-template-columns: 1fr;
            grid-template-rows: 2rem;
            grid-auto-flow: row;
        }
    }

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