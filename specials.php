<?php

include 'connection.php';

if (isset($_GET['special'])) {
    $id = $_GET['special'];
} else {
    $id = '';
}
//Selects all the products in the menu and some of their details
$all_products_query = "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID ORDER BY ProductID ASC";
$all_products_result = mysqli_query($con, $all_products_query);
//Days query to populate the dropdown menu so user can select what day to view specials for. Also puts the days in day order - Mon to Fri.
$all_days_query = "SELECT DayID FROM specials ORDER BY DayNumber ASC";
$all_days_result = mysqli_query($con, $all_days_query);

//Gets the product info of the lunch on special on the selected day
$this_lunch_query = "SELECT menu.ProductID, menu.ProductName, menu.Price FROM specials INNER JOIN menu ON menu.ProductID=SpecialLunch WHERE DayID='$id'";
$this_lunch_result = mysqli_query($con, $this_lunch_query);
$this_lunch_record = mysqli_fetch_assoc($this_lunch_result);
//Gets the product info of the drink on special on the selected day
$this_drink_query = "SELECT menu.ProductID, menu.ProductName, menu.Price FROM specials INNER JOIN menu ON menu.ProductID=SpecialDrink WHERE DayID='$id'";
$this_drink_result = mysqli_query($con, $this_drink_query);
$this_drink_record = mysqli_fetch_assoc($this_drink_result);
//Gets the product info of the sweet on special on the selected day
$this_sweet_query = "SELECT menu.ProductID, menu.ProductName, menu.Price FROM specials INNER JOIN menu ON menu.ProductID=SpecialSweet WHERE DayID='$id'";
$this_sweet_result = mysqli_query($con, $this_sweet_query);
$this_sweet_record = mysqli_fetch_assoc($this_sweet_result);
//Gets the product info of the snack on special on the selected day
$this_snack_query = "SELECT menu.ProductID, menu.ProductName, menu.Price FROM specials INNER JOIN menu ON menu.ProductID=SpecialSnack WHERE DayID='$id'";
$this_snack_result = mysqli_query($con, $this_snack_query);
$this_snack_record = mysqli_fetch_assoc($this_snack_result);

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
<main>
    <div class="menu_icon_container">
        <form class="menu_icon" action="menu.php" method="post">
            <input class="drinks_icon icon70 category_font" type='submit' name='drinks' value="Drinks">
        </form>
        <?php
        if (isset($_POST['drinks'])) {
            //Selects all products in the drinks category
            $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID WHERE CategoryID = 'DRK' ORDER BY ProductID ASC");
        }
        ?>
        <form class="menu_icon" action="menu.php" method="post">
            <input class="sweets_icon icon70 category_font" type='submit' name='sweets' value="Sweets">
        </form>
        <?php
        if (isset($_POST['sweets'])) {
            //selects all products in the sweets category
            $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID WHERE CategoryID = 'SWT' ORDER BY ProductID ASC");
        }
        ?>
        <form class="menu_icon" action="menu.php" method="post">
            <input class="snacks_icon icon70 category_font" type='submit' name='snacks' value="Snacks">
        </form>
        <?php
        if (isset($_POST['snacks'])) {
            //selects all products in the snacks category
            $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID WHERE CategoryID = 'SNK' ORDER BY ProductID ASC");
        }
        ?>
        <form class="menu_icon" action="menu.php" method="post">
            <input class="lunches_icon icon70 category_font" type='submit' name='lunches' value="Lunches">
        </form>
        <?php
        if (isset($_POST['lunches'])) {
            //selects all products in the lunches category
            $all_products_result = mysqli_query($con, "SELECT ProductID, ProductName, menu.TemperatureID, temperature.TemperatureImage, menu.StockID, stock.StockDescription, Price FROM menu INNER JOIN stock ON stock.StockID = menu.stockID INNER JOIN temperature ON temperature.TemperatureID=menu.TemperatureID WHERE CategoryID = 'LCH' ORDER BY ProductID ASC");
        }
        ?>
        <form class="menu_icon" action="specials.php" method="post">
            <input class="specials_icon icon70 category_font" type='submit' name='specials' value="Specials">
        </form>
    </div>
    <h1 class="center">Daily Specials</h1>
    <p class="specials_text">50% off on selected items</p>
    <div class="container80 margin_bottom">
        <form class="search" name="specials_form" id="specials_form" method="get" action="specials.php">
            <select class="search_text fs30" id="special" name="special">
                <?php
                while ($all_days_record = mysqli_fetch_assoc($all_days_result)) {
                    echo "<option value= '" . $all_days_record['DayID'] . "'>";
                    echo $all_days_record['DayID'];
                    echo "</option>";
                }
                ?>
            </select>
            <input class="search_btn fs30" type="submit" name="specials_button" value="GO">
        </form>
    </div>
    <?php
    echo " <h1 class='center'>".$id."</h1>"?>
    <div class="specials_container">
        <h1 class="search_results_head">Lunch of the Day</h1>
        <?php
        $new_price = $this_lunch_record['Price']/2;
        echo "<p class='product_name'> " . $this_lunch_record['ProductName'] . "</p>";
        echo "<p> <b>Product ID:</b> " . $this_lunch_record['ProductID'] . "</p><br>";
        echo "<p><b>Price:</b> <i class='price_old'>$" . $this_lunch_record['Price'] . " </i><i class='price_new'>$".$new_price."</i></p><br>";
        echo "<form action='product_info.php' method='get'>
            <input class='info_btn' type='submit' id='product' name='product' value='info' onclick='value=" . $this_lunch_record['ProductID'] . "' >
        </form>"
        ?>
    </div>
    <div class="specials_container">
        <h1 class="search_results_head">Drink of the Day</h1>
        <?php
        $new_price = $this_drink_record['Price']/2;
        echo "<p class='product_name'> " . $this_drink_record['ProductName'] . "</p>";
        echo "<p> <b>Product ID:</b> " . $this_drink_record['ProductID'] . "</p><br>";
        echo "<p><b>Price:</b> <i class='price_old'>$" . $this_drink_record['Price'] . " </i><i class='price_new'>$".$new_price."</i></p><br>";
        echo "<form action='product_info.php' method='get'>
            <input class='info_btn' type='submit' id='product' name='product' value='info' onclick='value=" . $this_drink_record['ProductID'] . "' >
        </form>"
        ?>
    </div>
    <div class="specials_container">
        <h1 class="search_results_head">Sweet of the Day</h1>
        <?php
        $new_price = $this_sweet_record['Price']/2;
        echo "<p class='product_name'> " . $this_sweet_record['ProductName'] . "</p>";
        echo "<p> <b>Product ID:</b> " . $this_sweet_record['ProductID'] . "</p><br>";
        echo "<p><b>Price:</b> <i class='price_old'>$" . $this_sweet_record['Price'] . " </i><i class='price_new'>$".$new_price."</i></p><br>";
        echo "<form action='product_info.php' method='get'>
            <input class='info_btn' type='submit' id='product' name='product' value='info' onclick='value=" . $this_sweet_record['ProductID'] . "' >
        </form>"
        ?>
    </div>
    <div class="specials_container">
        <h1 class="search_results_head">Snack of the Day</h1>
        <?php
        $new_price = $this_snack_record['Price']/2;
        echo "<p class='product_name'> " . $this_snack_record['ProductName'] . "</p>";
        echo "<p> <b>Product ID:</b> " . $this_snack_record['ProductID'] . "</p><br>";
        echo "<p><b>Price:</b> <i class='price_old'>$" . $this_snack_record['Price'] . " </i><i class='price_new'>$".$new_price."</i></p><br>";
        echo "<form action='product_info.php' method='get'>
            <input class='info_btn' type='submit' id='product' name='product' value='info' onclick='value=" . $this_snack_record['ProductID'] . "' >
        </form>"
        ?>
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