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
        <a href="index.php"> HOME </a>
        <a href="menu.php"> MENU </a>
        <!-- Make drop down menu - Lunch, Snacks, Sweets, Weekly Specials -->
        <a href="about.php"> ABOUT </a>
        <a class="active"  href="contact_us.php"> CONTACT US </a>
    </nav>
</header>
</body>
</html>