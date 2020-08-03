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
                <input class="search_text" type="text" value="Search for a product..." name='search_customer'>
                <input class="search_btn" type="submit" name="submit" value="Search">
            </form>

        </nav>
    </div>
</header>
<main class="main_index">
    <div class="icon_container">
        <a href="drinks.php">
            <div class="icon_container2">
                <div class="drinks_icon icon100">
                </div>
                <h3>Drinks</h3>
            </div>
        </a>
        <a href="">
            <div class="icon_container2">
                <div class="snacks_icon icon100"></div>
                <h3>Snacks</h3>
            </div>
        </a>
        <a href="">
            <div class="icon_container2">
                <div class="sweets_icon icon100"></div>
                <h3>Sweets</h3>
            </div>
        </a>
        <a href="">
            <div class="icon_container2">
                <div class="lunches_icon icon100"></div>
                <h3>Lunches</h3>
            </div>
        </a>
        <a href="">
            <div class="icon_container2">
                <div class="specials_icon icon100"></div>
                <h3>Specials</h3>
            </div>
        </a>
        <a href="menu.php">
            <div class="full_menu_button">
                Full Menu
            </div>
        </a>
    </div>
    <div class="notices_header">
        Notice Board
    </div>
    <div class="notices_container">
        <div class="notices border_right">
            <red>No Microwave heating due to COVID-19</red>
            .To reduce waiting times we no longer offer the option of microwave heating. Don't worry, our food is still
            tasty cold.<br>
            <date>12/07/20</date>
        </div>
        <div class="notices border_right">
            <red>-50c with BYO Cofee Cups</red>
            . Bring your own coffee cup and get 50cents off hot drinks. Save the planet, save your wallet.<br>
            <date>9/07/20</date>
        </div>
        <div class="notices">
            <red>Part-time jobs available</red>
            . Looking for 2 reliable students in year 12 or year 13 to be cashiers for the canteen during lunch times on
            Mon, Thu and Fri. Minimum wage. Contact Maggie at wgc_canteen@wgc.school.nz for more info.<br>
            <date>28/06/20</date>
        </div>
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
