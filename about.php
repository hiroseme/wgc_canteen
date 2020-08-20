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
                     src="https://wgc.school.nz/wp-content/uploads/2018/09/WGC_Logo_Transparent_RGB.png" alt="Teal and white Wellington Girls' College logo">
                WGC Canteen
            </h1>
        </div>
        <nav>
            <a href="index.php">HOME</a>
            <a href="menu.php">MENU</a>
            <a class="active" href="about.php">ABOUT</a>

            <form class="search" action="search_results.php" method="post">
                <input class="search_text" type="text" value="Search for a product..." name='search_product'
                       onclick="value=''">
                <input class="search_btn" type="submit" name="submit" value="Search">
            </form>
        </nav>
    </div>
</header>
<main>
    <div class="about_container">
        <h4 class="about_header"> About Us</h4>
        <div class="about_us_img"></div>
        <div class="about_us_text">WGC Canteen has been feeding affordable, healthy lunches to hungry students since
            2003. Our chef, Anna Appleton has over 30 years of experience in the food industry and makes all of our
            lunches. Our barista, Bailey Brown makes all our hot drinks, juices and smoothies fresh on the spot.
        </div>
    </div>
    <h4 class="about_header">Contact Us</h4>
    <div class="contact_us_text">Email: wgc_canteen@wgc.school.nz<br>Phone:022 123 0980<br>Instagram: @wgc_canteen<br>
        <br>Join the 'WGC Foodies' Facebook group run by WGC Canteen to get delicious recipes and notices of special
        deals.
    </div>
    <div class="location_container">
        <h4 class="about_header">Location</h4>
        <p>Pipitea Street, Thorndon, Wellington 6011</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2998.5363311184515!2d174.77800201542235!3d-41.275
    430479274625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38ae2f27710d0d%3A
    0x2d0763d38f00974b!2sWellington%20Girls&#39;%20College!5e0!3m2!1sen!2snz!4v1597395867019!5m2!1sen!2snz" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
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
