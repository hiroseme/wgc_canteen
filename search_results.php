<?php

include 'connection.php';
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
                     src="https://wgc.school.nz/wp-content/uploads/2018/09/WGC_Logo_Transparent_RGB.png">
                WGC Canteen
            </h1>
        </div>
        <nav>
            <a class="active" href="index.php">HOME</a>
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
            <th>ProductID</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
    <?php
    if (isset($_POST['search_product'])) {
        $search_product = $_POST['search_product'];
        $query1 = "SELECT * FROM menu WHERE ProductName LIKE '%$search_product%'";
        $query = mysqli_query($con, $query1);
        $count = mysqli_num_rows($query);
        if ($search_product == "") {
            echo "Please enter something!";
        } elseif ($count == 0) {
            echo "No products matched your search...";
        } else {
            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>
                <td>" . $row['ProductID'] . "</td>";
                echo "
                <td>" . $row['ProductName'] . "</td>";
                echo "
                <td>$" . $row['Price'] . "</td>";
                echo "</tr>";
            }
        }
    }
    ?>
    </table>
    </div>
</main>
<div class="footer">
    <div class="footer_container">
        <table class="footer_table">
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
