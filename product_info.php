<?php

include 'connection.php';
if (isset($_GET['product'])) {
    $id = $_GET['product'];
} else {
    $id = 1;
}

$this_product_query = "SELECT ProductID, ProductName, ProductDescription, Calories, HealthStar, diets.DietName, categories.CategoryName, stock.StockDescription, TemperatureID, Price FROM menu INNER JOIN diets ON diets.DietID=menu.DietID INNER JOIN categories ON categories.CategoryID=menu.CategoryID INNER JOIN stock ON stock.StockID=menu.StockID WHERE ProductID= '". $id . "'";
$this_product_result = mysqli_query($con, $this_product_query);
$this_product_record= mysqli_fetch_assoc($this_product_result);
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
                     src="https://wgc.school.nz/wp-content/uploads/2018/09/WGC_Logo_Transparent_RGB.png">
                WGC Canteen
            </h1>
        </div>
        <nav>
            <a class="active" href="index.php">HOME</a>
            <a href="menu.php">MENU</a>
            <a href="about.php">ABOUT</a>

            <form class="search" action="search_results.php" method="post">
                <input class="search_text" type="text" onclick="value=''" value="Search for a product..." name='search_customer'>
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
    echo "<p> <b>Product ID:</b> " . $this_product_record['ProductID'] . "<br>";
    echo "<p> <b>Price:</b> $" . $this_product_record['Price'] . "<br>";
    echo "<p> <b>Description:</b> " . $this_product_record['ProductDescription'] . "<br>";
    echo "<p> <b>Calories:</b> " . $this_product_record['Calories'] . "<br>";
    echo "<p> <b>Health Star:</b> " . $this_product_record['HealthStar'] . "/5.0<br>";
    echo "<p> <b>Diets:</b> " . $this_product_record['DietName'] . "<br>";
    echo "<p> <b>Category:</b> " . $this_product_record['CategoryName'] . "<br>";
    echo "<p> <b>Availability:</b> " . $this_product_record['StockDescription'] . "<br>";
    ?>
    </div>
    <div class="next_container">

        <form action='product_info.php' method='get'>
            <?php
            $productID = $this_product_record['ProductID']-1;
            if($productID>0){
                echo "<input class='next' type='submit' id='product' name='product' value='$productID'>";}
            ?>
        </form>
        <form action='product_info.php' method='get'>
            <?php
            $productID = $this_product_record['ProductID']+1;
            if($productID<52){
                echo "<input class='next' type='submit' id='product' name='product' value='$productID'>";}
            ?>
        </form>

    </div>



</main>
</body>
</html>
