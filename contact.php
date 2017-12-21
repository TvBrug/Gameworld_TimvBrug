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
    <title>Gameworld Contact</title>
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
                <div id="banner-text"><h2>Welcome to our contact page!</h2></div>
                <div id="banner-text2"><h2>Here you can find our contact information.</h2></div>
            </div>
            <ul id="contact-text">
                <li>
                    E-mail:  <input type="text" name="email" placeholder="Your E-mail">
                </li><br>
                <li>
                    Reason: <textarea placeholder="Reason for contact"></textarea>
                </li>
            </ul>
            <div id="submit-button">Submit now!</div>
        </div>
        <?php
        include("inc/footer.php");
        ?>
    </div>
</body>
</html>