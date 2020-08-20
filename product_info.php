<?php

include 'connection.php';
if (isset($_GET['product'])) {
    $id = $_GET['product'];
} else {
    $id = 1;
}
//Query to get all the details of the selected product
$this_product_query = "SELECT ProductID, ProductName, ProductDescription, Calories, HealthStar, diets.DietName, categories.CategoryName, stock.StockDescription, TemperatureID, Price FROM menu INNER JOIN diets ON diets.DietID=menu.DietID INNER JOIN categories ON categories.CategoryID=menu.CategoryID INNER JOIN stock ON stock.StockID=menu.StockID WHERE ProductID= '" . $id . "'";
$this_product_result = mysqli_query($con, $this_product_query);
$this_product_record = mysqli_fetch_assoc($this_product_result);

//Query to get all productIDs and ProductNames
$all_products_query = "SELECT ProductID, ProductName FROM menu";
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
            <a class="active" href="index.php">HOME</a>
            <a href="menu.php">MENU</a>
            <a href="about.php">ABOUT</a>
            <form class="search" action="search_results.php" method="post">
                <input class="search_text" type="text" value="Search for a product..." name='search_product'
                       onclick="value=''">
                <input class="search_btn" type="submit" name="submit" value="Search">
            </form>
        </nav>
    </div>
</header>
<main>
    <div class="product_info_container">
        <h4 class="menu_header">Product Information</h4>
        <?php
        echo "<p class='product_name'> " . $this_product_record['ProductName'] . "</p>";
        echo "<p> <b>Product ID:</b> " . $this_product_record['ProductID'] . "</p><br>";
        echo "<p> <b>Price:</b> $" . $this_product_record['Price'] . "</p><br>";
        echo "<p> <b>Description:</b> " . $this_product_record['ProductDescription'] . "</p><br>";
        echo "<p> <b>Calories:</b> " . $this_product_record['Calories'] . "</p><br>";
        echo "<p> <b>Health Star:</b> " . $this_product_record['HealthStar'] . "/5.0</p><br>";
        echo "<p> <b>Diets:</b> " . $this_product_record['DietName'] . "</p><br>";
        echo "<p> <b>Category:</b> " . $this_product_record['CategoryName'] . "</p><br>";
            echo "<p> <b>Availability:</b> " . $this_product_record['StockDescription'] . "</p><br>";
        ?>
    </div>
<div class="select_container">
    <div class="next_container">
        <form action='product_info.php' method='get'>
            <?php
            $productID = $this_product_record['ProductID'] + 1;
            if ($productID < 52) {
                echo "<input class='next_up' type='submit' id='product' name='product' value='&#8594;' onclick='value=$productID'>";
            }
            ?>
        </form>
        <form action='product_info.php' method='get'>
            <?php
            $productID = $this_product_record['ProductID'] - 1;
            if ($productID > 0) {
                echo "<input class='next_down' type='submit' id='product' name='product' value='&#8592;' onclick='value=$productID'>";
            }
            ?>
        </form>
    </div>
    </div>
    <div class="select_container">
        <h1 class="search_results_head margin0">Select another product</h1>
        <form name="products_form" id="products_form" method="get" action="product_info.php">
            <select class="search_text fs25 w50" id="product" name="product">
                <?php
                while ($all_products_record = mysqli_fetch_assoc($all_products_result)) {
                    echo "<option value= '" . $all_products_record['ProductID'] . "'>";
                    echo $all_products_record['ProductName'];
                    echo "</option>";
                }
                ?>
            </select>
            <input class="search_btn fs25" type="submit" name="products_button" value="Go">
        </form>
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

