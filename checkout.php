<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <header class="header">
        <div id="logo">
            <li><a href="index.php">Gameworld! - The most complete gaming webshop</a></li>
        </div>
    </header>
    <meta charset="UTF-8">
    <meta name="description" content="Positionering">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <title>Gameworld Checkout</title>
</head>

<body>
    <div id="main-container">
        <nav>
            <?php
                include("inc/menu.php");
            ?>
        </nav>

        <div id="container-image">
            <div id="banner">
                <img src="img/banner.jpg" width="980">
                <div id="banner-logo"><img src="img/GWPrimaryLogo.gif" height="150" width="225"></div>
                <div id="banner-text"><h2>Welcome to our checkout page!</h2></div>
                <div id="banner-text2"><h2>All the products you want to order together.</h2></div>
            </div>
            <table id="container-table">
            <thead>
                <tr>
                    <th>
                        Image
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Price
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="img/overwatch-ps4.jpg" width="75" height="125"></td>
                    <td>Overwatch</td>
                    <td>Lorem Ipsum</td>
                    <td>&euro; 55,00</td>
                </tr>
                <tr>
                    <td><img src="img/ww2-ps4.jpg" width="75" height="125"></td>
                    <td>WWII</td>
                    <td>Lorem Ipsum</td>
                    <td>&euro; 60,00</td>
                </tr>
                <tr>
                    <td><img src="img/fifa18-ps4.jpg" width="75" height="125"></td>
                    <td>Fifa 18</td>
                    <td>Lorem Ipsum</td>
                    <td>&euro; 60,00</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">Total: &euro;175,00</td>
                </tr>
            </tfoot>
        <table>
            <div id="order-button">Order now!</div>
        </div>
    </div>
    <?php
        include("inc/footer1.php");
    ?>
</body>
</html>