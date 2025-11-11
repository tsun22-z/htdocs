<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutUs.php">About Us</a></li>
        <li><a href="contactUs.php">Contact Us</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
        <li><a href="dataTypes.php">Data Types</a></li>
    </ul>
</nav>
<?php
    include_once("./includes/var.php");
    echo date('Y-m-d')."<br>";
    echo date('H:i:s');
?>