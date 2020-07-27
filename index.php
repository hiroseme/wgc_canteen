<!-- To do: - zebra striped tables -->
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
<div class="loader"></div>
<header>
    <div class="heading_container">
        <img class="wgc_logo" src="https://wgc.school.nz/wp-content/uploads/2018/09/WGC_Logo_Transparent_RGB.png">
        <div class="social_media">
            <p>Insta: #WGC_Canteen<br>Fbook: WGC Foodies</p>
        </div>
        <h1>
            <red class="fs70">W</red>
            <purple class="fs70">G</purple>
            <green class="fs70">C </green>
            <blue class="fs70">C</blue>
            <yellow class="fs70">a</yellow>
            <green class="fs70">n</green>
            <purple class="fs70">t</purple>
            <red class="fs70">e</red>
            <blue class="fs70">e</blue>
            <yellow class="fs70">n</yellow>
        </h1>
        <p class="sub_heading">est. 2020</p>
    </div>
    <nav class="top_nav">
        <a class="active" href="index.php"> HOME </a>
        <a href="menu.php"> MENU </a>
        <!-- Make drop down menu - Lunch, Snacks, Sweets, Weekly Specials -->
        <a href="about.php"> ABOUT </a>
        <a href="contact_us.php"> CONTACT US </a>
    </nav>
</header>
<main>
    <div class="welcome_msg">
        <h2>Welcome to WGC Canteen.<br><i>Providers of healthy, affordable and homemade lunches for students.</i></h2>
    </div>

    <!--<div class="topic_title" style="background-image: url(https://www.weightwatchers.com/nz/sites/nz/files/styles/wwvs_default_image/public/article_masthead/heart-healthy-lunch-recipes-chicken-roasted-capsicum-walnut-salad.jpg?itok=zhzJLXwF)"></div>-->
    <div class="notices">
        !!! Notices !!!
    </div>
    <div class="text_box">
        <red>No Microwave heating due to COVID-19</red>.To reduce waiting times we no longer offer the option of microwave heating. Don't worry, our food is still tasty cold.<br>
        <date>12/07/20</date>
    </div>
    <div class="text_box">
        <red>-50c with BYO Cofee Cups</red>. Bring your own coffee cup and get 50cents off hot drinks. Save the planet, save your wallet.<br>
        <date>9/07/20</date>
    </div>
    <div class="text_box">
        <red>Part-time jobs available</red>. Looking for 2 reliable students in year 12 or year 13 to be cashiers for the canteen during lunch times on Mon, Thu and Fri. Minimum wage. Contact Maggie at wgc_canteen@wgc.school.nz for more info.<br>
        <date>28/06/20</date>
    </div>
    <!-- <div class="topic_title" style="background-image: url(https://blog.sigmaphoto.com/wp-content/uploads/2019/07/cropped-pancakes.jpg">
        <h2>Menu</h2>
    </div>-->
    <div class="index_heading">
        Menu
    </div>
    <div class="icon_container">
        <a href="">
            <div class="icon_container2">
                <div class="drinks_icon">
                </div>
                <h3>Drinks</h3>
            </div>
        </a>
        <a href="">
            <div class="icon_container2">
                <div class="snacks_icon"></div>
                <h3>Snacks</h3>
            </div>
        </a>
        <a href="">
            <div class="icon_container2">
                <div class="sweets_icon"></div>
                <h3>Sweets</h3>
            </div>
        </a>
        <a href="">
            <div class="icon_container2">
                <div class="lunches_icon"></div>
                <h3>Lunches</h3>
            </div>
        </a>
        <a href="">
            <div class="icon_container2">
                <div class="specials_icon"></div>
                <h3>Specials</h3>
            </div>
        </a>
        <div class="full_menu_button">
            Full Menu
        </div>
    </div>
    <div class="index_heading">
        Where our ingredients are from</div>
    <div class="text_box">
        Our ingredients are delivered weekly from Old World or Countup. Fresh produce such as eggs, fruit, veggies and dairy are delivered daily from local farms. Our food is prepared every morning by Maggie and our specialty drinks are made on the spot by Charlie.
    </div>

</main>
<footer>
    <div class="footer_container">
        <p>Open: </p>
        <table>
            <tr>
                <th>Day:</th>
                <th>Time:</th>
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
    </div>
    <p>Megumi Hirose 12DT 2020</p>
</footer>
</body>

</html>
