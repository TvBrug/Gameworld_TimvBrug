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
    <title>Gameworld Welcome</title>
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
                <div id="banner-text"><h2>Welcome to Gameworld!</h2></div>
                <div id="banner-text2"><h2>The most complete gaming webshop.</h2></div>
            </div>

            <div class="consoles"><a href="games.php?gameCategoryID=2"><img src="img/xbox.png" height="200" width="200"></div>
            <div class="consoles"><a href="games.php?gameCategoryID=1"><img src="img/playstation.png" height="200" width="200"></div>
            <div id="consoles1"><a href="games.php?gameCategoryID=3"><img src="img/pc.png" height="200" width="200"></div>
            <div class="clearfix"></div>
        </div>
        <?php
        include("inc/footer.php");
        ?>
    </div>
</body>
</html>