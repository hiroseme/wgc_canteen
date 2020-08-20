<?php

include 'connection.php';
// Query to get product info to display on the menu table
$all_products_query = "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID ORDER BY ProductID ASC";
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
        <a href="index.php">
        <div class="w50">
            <h1>
                <img class="wgc_logo"
                     src="https://wgc.school.nz/wp-content/uploads/2018/09/WGC_Logo_Transparent_RGB.png" alt="Teal and white Wellington Girls' College logo">
                WGC Canteen
            </h1>
        </div>
        </a>
        <nav>
            <a href="index.php">HOME</a>
            <a class="active" href="menu.php">MENU</a>
            <a href="about.php">ABOUT</a>
            <form class="search" action="search_results.php" method="post">
                <input class="search_text" type="text" value="Search for a product..." name='search_product'
                       onclick="value=''">
                <input class="search_btn" type="submit" name="submit" value="Search">
            </form>
        </nav>
    </div>
</header>
<main class="main_menu">
    <div class="menu_icon_container">
        <form class="menu_icon" action="menu.php" method="post">
            <input class="drinks_icon icon70 category_font" type='submit' name='drinks' value="Drinks">
        </form>
        <?php
        if (isset($_POST['drinks'])) {
            //Query to get all products in the drinks category
            $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID WHERE CategoryID = 'DRK' ORDER BY ProductID ASC");
        }
        ?>
        <form class="menu_icon" action="menu.php" method="post">
            <input class="sweets_icon icon70 category_font" type='submit' name='sweets' value="Sweets">
        </form>
        <?php
        //Query to select all products in the sweets category
        if (isset($_POST['sweets'])) {
            $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID WHERE CategoryID = 'SWT' ORDER BY ProductID ASC");
        }
        ?>
        <form class="menu_icon" action="menu.php" method="post">
            <input class="snacks_icon icon70 category_font" type='submit' name='snacks' value="Snacks">
        </form>
        <?php
        //Query to select all products in the snacks category
        if (isset($_POST['snacks'])) {
            $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID WHERE CategoryID = 'SNK' ORDER BY ProductID ASC");
        }
        ?>
        <form class="menu_icon" action="menu.php" method="post">
            <input class="lunches_icon icon70 category_font" type='submit' name='lunches' value="Lunches">
        </form>
        <?php
        //Query to select all products in the lunches category
        if (isset($_POST['lunches'])) {
            $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID WHERE CategoryID = 'LCH' ORDER BY ProductID ASC");
        }
        ?>
        <form class="menu_icon" action="specials.php" method="post">
            <input class="specials_icon icon70 category_font" type='submit' name='specials' value="Specials">
        </form>
    </div>
    <div class="sidebar">
        <table class="menu_button_table">
            <tr>
                <th>Filter:</th>
            </tr>
            <tr>
                <td>
                    <form action="menu.php" method="post">
                        <input type='submit' name='cold' value="Cold">
                    </form>
                    <?php
                    if (isset($_POST['cold'])) {
                        //Selects only cold products
                        $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID WHERE menu.TemperatureID='CLD'");
                    }
                    ?>
                    <form action="menu.php" method="post">
                        <input type='submit' name='hot' value="Hot">
                    </form>
                    <?php
                    //Selects only hot products
                    if (isset($_POST['hot'])) {
                        $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID WHERE menu.TemperatureID='HOT'");
                    }
                    ?>
                    <form action="menu.php" method="post">
                        <input type='submit' name='room_temp' value="Room Temperature">
                    </form>
                    <?php
                    //Selects only room temperature products
                    if (isset($_POST['room_temp'])) {
                        $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID WHERE menu.TemperatureID='RMT'");
                    }
                    ?>
                    <form action="menu.php" method="post">
                        <input type='submit' name='in_stock' value="In Stock">
                    </form>
                    <?php
                    if (isset($_POST['in_stock'])) {
                        //Selects products that are in stock
                        $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID WHERE menu.StockID='INS'");
                    }
                    ?>
                    <form action="menu.php" method="post">
                        <input type='submit' name='out_of_stock' value="Out of Stock">
                    </form>
                    <?php
                    //Selects products that are out of stock
                    if (isset($_POST['out_of_stock'])) {
                        $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID WHERE menu.StockID='OOS'");
                    }
                    ?></td>
            </tr>
        </table>
        <table class="menu_button_table">
            <tr>
                <th>Order By:</th>
            </tr>
            <tr>
                <td>
                    <form action="menu.php" method="post">
                        <input type='submit' name='high_to_lowID' value="ID high to low">
                    </form>
                    <?php

                    if (isset($_POST['high_to_lowID'])) {
                        //Orders products in the menu table so they are in descending ProductID order
                        $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID ORDER BY ProductID DESC");
                    }
                    ?>
                    <form action="menu.php" method="post">
                        <input type='submit' name='low_to_highID' value="ID low to high">
                    </form>
                    <?php
                    if (isset($_POST['low_to_highID'])) {
                        //Orders products in the menu table so they are in ascending ProductID order
                        $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID ORDER BY ProductID ASC");
                    }
                    ?>
                    <form action="menu.php" method="post">
                        <input type='submit' name='a_z' value="Name A-Z">
                    </form>
                    <?php
                    if (isset($_POST['a_z'])) {
                        //Orders products in the menu table so they are in alphabetical order
                        $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID ORDER BY ProductName ASC");
                    }
                    ?>
                    <form action="menu.php" method="post">
                        <input type='submit' name='z_a' value="Name Z-A">
                    </form>
                    <?php
                    if (isset($_POST['z_a'])) {
                        //Orders products in the menu table so they are in upside down alphabetical order
                        $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID ORDER BY ProductName DESC");
                    }
                    ?>
                    <form action="menu.php" method="post">
                        <input type='submit' name='low_to_highPrice' value="Price low to high">
                    </form>
                    <?php
                    if (isset($_POST['low_to_highPrice'])) {
                        //Orders products in the menu table so they are in ascending Price order
                        $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID ORDER BY Price ASC");
                    }
                    ?>
                    <form action="menu.php" method="post">
                        <input type='submit' name='high_to_lowPrice' value="Price high to low">
                    </form>
                    <?php
                    if (isset($_POST['high_to_lowPrice'])) {
                        //Orders products in the menu table so they are in descending Price order
                        $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID ORDER BY Price DESC");
                    }
                    ?>
                </td>
            </tr>
        </table>

        <form action="menu.php" method="post">
            <input class="reset_button" type='submit' name='reset' value="Reset">
        </form>
        <?php
        if (isset($_POST['reset'])) {
            //Resets the products selected to the original value
            $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID ORDER BY ProductID ASC");
        }
        ?>
    </div>
    <div class="menu_display">
        <h4 class="menu_header"><?php if (isset($_POST['drinks'])) {
                echo "Drinks";
            } elseif (isset($_POST['sweets'])) {
                echo "Sweets";
            } elseif (isset($_POST['snacks'])) {
                echo "Snacks";
            } elseif (isset($_POST['lunches'])) {
                echo "Lunches";
            } else {
                echo "Menu";
            }
            ?>
        </h4>

        <table class="menu_table">
            <tr class="menu_table_header">
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Warmth</th>
                <th>Stock</th>
                <th></th>
            <tr>
                <?php
                while ($all_products_record = mysqli_fetch_assoc($all_products_result)) {
                    echo "<tr>
                <td>" . $all_products_record['ProductID'] . "</td>";
                    echo "
                <td>" . $all_products_record['ProductName'] . "</td>";
                    echo "
                <td>$" . $all_products_record['Price'] . "</td>";
                    echo "<td><img class='temp_icon' src=" . $all_products_record['TemperatureImage'] . " alt='temperature icon. fire if hot, snowflake if cold.'></td>";
                    echo "<td><red>" . $all_products_record['StockDescription'] . "</red>";
                    echo "<td><form action='product_info.php' method='get'>
                        <input class='info_btn' type='submit' id='product' name='product' value='info' onclick='value=" . $all_products_record['ProductID'] . "' >
                    </form></td>";
                    echo "</tr>";
                }
                ?>
        </table>
        <form action="menu.php">
            <input style="margin-top:1rem;" type='submit' value="Back to top">
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