<?php

include 'connection.php';

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
    <div class="notices_header">
        Notice Board
    </div>
    <div class="notices_container">
        <div class="notices border_right">
            <p><b class="red">No Microwave heating due to COVID-19</b>.To reduce waiting times we no longer offer the option of microwave heating. Don't worry, our food is still
            tasty cold.</p><br>
            <p class="date">12/07/20</p>
        </div>
        <div class="notices border_right">
            <p><b class="red">-50c with BYO Cofee Cups</b>
                . Bring your own coffee cup and get 50cents off hot drinks. Save the planet, save your wallet.</p><br>
            <p class="date">9/07/20</p>
        </div>
        <div class="notices">
            <p> <b class="red">Part-time jobs available</b>
            . Looking for 2 reliable students in year 12 or year 13 to be cashiers for the canteen during lunch times on
                Mon, Thu and Fri. Minimum wage. Contact Maggie at wgc_canteen@wgc.school.nz for more info.</p><br>
            <p class="date">28/06/20</p>
        </div>
    </div><br>
    <div class="index_top">
        Welcome to WGC Canteen.<p class="fs30">Discover healthy and unhealthy lunches, drinks, snacks and treats.</p>
    </div>
    <div class="icon_container">
        <div class="icon_container2">
        <form class="no_margin" action="menu.php" method="post">
            <input class="drinks_icon icon100 category_font" type='submit' name='drinks' value="">
        </form>
            <h3>Drinks</h3>
        </div>
        <div class="icon_container2">
            <form class="no_margin" action="menu.php" method="post">
                <input class="sweets_icon icon100 category_font" type='submit' name='sweets' value="">
            </form>
            <h3>Sweets</h3>
        </div>
        <div class="icon_container2">
            <form class="no_margin" action="menu.php" method="post">
                <input class="snacks_icon icon100 category_font" type='submit' name='snacks' value="">
            </form>
            <h3>Snacks</h3>
        </div>
        <div class="icon_container2">
            <form class="no_margin" action="menu.php" method="post">
                <input class="lunches_icon icon100 category_font" type='submit' name='lunches' value="">
            </form>
            <h3>Lunches</h3>
        </div>
        <div class="icon_container2">
            <form class="no_margin" action="specials.php" method="post">
                <input class="specials_icon icon100 category_font" type='submit' name='specials' value="">
            </form>
            <h3>Specials</h3>
        </div>
        <a href="menu.php">
            <div class="full_menu_button">
                Full Menu
            </div>
        </a>
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