<?php

include 'connection.php';

$all_drinks_query = "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, Price FROM menu INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID WHERE CategoryID='DRK' ORDER BY ProductID ASC";
$all_drinks_result = mysqli_query($con, $all_drinks_query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Menu | WGC Canteen </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="wgc_canteen.css">
</head>

<body>
<header>
    <div class="heading_container">
        <div class="w50">
            <h1>
                <img class="wgc_logo"
                     src="https://wgc.school.nz/wp-content/uploads/2018/09/WGC_Logo_Transparent_RGB.png">
                WGC Canteen
            </h1>
        </div>
        <nav>
            <a href="index.php">HOME</a>
            <a class="active" href="menu.php">MENU</a>
            <a href="contact_us.php">CONTACT US</a>
            <a href="about.php">ABOUT</a>
        </nav>

    </div>
</header>
<main>
    <div class="category_column">
        <a href="drinks.php">
            <div class="category_row category_border_top"><div class="drinks_icon icon70" ></div>
                <h1 class="category_font">Drinks</h1>
            </div>
        </a>
        <div class="category_row category_border_top"><div class="sweets_icon icon70"></div>
            <h1 class="category_font">Sweets</h1>
        </div>
        <div class="category_row category_border_top"><div class="snacks_icon icon70"></div>
            <h1 class="category_font">Snacks</h1>
        </div>
        <div class="category_row category_border_top"><div class="lunches_icon icon70"></div>
            <h1 class="category_font">Lunches</h1>
        </div>
        <div class="category_row category_border_top"><div class="specials_icon icon70"></div>
            <h1 class="category_font">Specials</h1>
        </div>
        <div class="category_row category_border_top">
        </div>
    </div>
    <div class="menu_display">
        <h4 class="menu_header">Drinks</h4>
        <table class="menu_table">
            <tr class="menu_table_header">
                <th>ProductID</th>
                <th>Name</th>
                <th>Price</th>
                <th></th>
            </tr>
            <?php
            while ($all_drinks_record = mysqli_fetch_assoc($all_drinks_result)) {
                echo "<tr>
                <td>" . $all_drinks_record['ProductID'] . "</td>";
                echo "
                <td>" . $all_drinks_record['ProductName'] . "</td>";
                echo "
                <td>$" . $all_drinks_record['Price'] . "</td>";

                echo "<td><img class='temp_icon' src=" . $all_drinks_record['TemperatureImage'] . "></td>";

                echo "</tr>";
            }
            ?>
        </table>
    </div>


</main>
<div class="footer">
    <div class="footer_container">
        <table>
            <tr>
                <th>Open:</th>
            </tr>
            <tr>
                <td>Monday</td>
                <td>10:30am - 2:00pm</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>10:30am - 2:00pm</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>11:00am - 2:30pm</td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td>10:30am - 2:00pm</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td>10:30am - 1:30pm</td>
            </tr>
        </table>
        <div class="location_container">Location: <br>Pipitea Street, Thorndon, Wellington 6011<br></div>
    </div>
</div>
</body>
</html>
