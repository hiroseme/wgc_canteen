<?php

include 'connection.php';

// Query to get product info to display on the search results table
$all_products_query = "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, Price FROM menu INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID ORDER BY ProductID ASC";
$all_products_result = mysqli_query($con, $all_products_query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Home | WGC Canteen </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="wgc_canteen.css">
</head>

<body>
<header>
    <div class="heading_container">
        <div class="w50">
            <h1>
                <img class="wgc_logo"
                     src="https://wgc.school.nz/wp-content/uploads/2018/09/WGC_Logo_Transparent_RGB.png" alt="Teal and white Wellington Girls' College logo">
                WGC Canteen
            </h1>
        </div>
        <nav>
            <a href="index.php">HOME</a>
            <a href="menu.php">MENU</a>
            <a href="about.php">ABOUT</a>

            <form class="search" action="search_results.php" method="post">
                <input class="search_text" type="text" value="Search for a product..." name='search_product' onclick="value=''">
                <input class="search_btn" type="submit" name="submit" value="Search">
            </form>
        </nav>
    </div>
</header>
<main>
    <div class="search_results_container">
        <h1 class="search_results_head">Search Results</h1>
    <table class="menu_table">
        <tr class="menu_table_header">
    <?php
    if (isset($_POST['search_product'])) {
        $search_product = $_POST['search_product'];

        //Query to select all products that are like the user input
        $query1 = "SELECT * FROM menu WHERE ProductName LIKE '%$search_product%'";
        $query = mysqli_query($con, $query1);
        $count = mysqli_num_rows($query);
        if ($search_product == "") {
            echo "</tr><br><h2 class='search_error'>Please enter something!</h2>";
        } elseif ($count == 0) {
            echo "</tr><br><h2 class='search_error'>No products matched your search...</h2>";
        } else {
            echo " <th>ProductID</th>
            <th>Name</th>
            <th>Price</th>
            <th></th>
        </tr>";
            while ($row = mysqli_fetch_array($query)) {
                echo " <tr>
                <td>" . $row['ProductID'] . "</td>";
                echo "
                <td>" . $row['ProductName'] . "</td>";
                echo "
                <td>$" . $row['Price'] . "</td>";
                echo "<td><form action='product_info.php' method='get'>
                        <input class='info_btn' type='submit' id='product' name='product' value='info' onclick='value=" . $row['ProductID'] . "' >
                    </form></td>";
                echo "</tr>";
            }
        }
    }
    ?>
    </table>
        <h1 class="search_results_head">Search for another product</h1>
     <div class="container80">
        <form class="search" action="search_results.php" method="post">
            <input class="search_text fs30" type="text" value="Search for a product..." name='search_product' onclick="value=''">
            <input class="search_btn fs30" type="submit" name="submit" value="Search">
        </form>
     </div>
    </div>
</main>
<div class="footer">
    <div class="footer_container">
        <table class="footer_table">
            <tr>
                <th>Opening Hours:</th>
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
        <div class="location_container2"><b>Location:</b> <br>Pipitea Street, Thorndon, Wellington 6011<br><br><b>Contact Us:</b><br>Email: wgc_canteen@wgc.school.nz<br>Phone:022 123 0980</div>
    </div>
</div>
<p class="connected_msg">By Megumi Hirose 2020</p>
</body>
</html>