<?php
require("connection.php");
//VARIABLES//
$conn = connectToDB();
$idcat = 0;

if (isset($_GET["gameCategoryID"])) {
    $idcat = $_GET["gameCategoryID"];
    $selectedGamesQuery = "SELECT * FROM gameworld_game_data WHERE gameCategoryID = ".$idcat;
}
    else {
      $selectedGamesQuery = "SELECT * FROM gameworld_game_data";
  }
  //die($selectedGamesQuery);
    $result = $conn->query($selectedGamesQuery) or die($conn->error);
    $conn->close();
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
    <title>Gameworld Games</title>
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
                <div id="banner-logo1"><img src="img/GWPrimaryLogo.gif" height="150" width="225" a href="index.php"></a></div>
                <div id="banner-text"><h2>Welcome to our games page!</h2></div>
                <div id="banner-text2"><h2>The biggest game selection on the web.</h2></div>
            </div>
            <div id="idcat_name">
                 <?php 
                 if ($idcat == 1) {
                 echo "<h2>Playstation</h2>";
                 }
                 else if ($idcat == 2) {
                 echo "<h2>Xbox</h2>";
                 }
                 else if ($idcat == 3) {
                 echo "<h2>PC</h2>";
                 }
                 else if ("") {
                 }

                 if ($result->num_rows > 0) {
                    //Output data of each row
                 while($row = $result->fetch_assoc()) {
                ?>
                       <div class="product-item">
                       <img img src="img/<?php echo $row["gameImage"]; ?>">
                       <div class="price">€<?php echo $row["gamePrice"]; ?></div>
                       <div class="name"><?php echo $row["gameTitle"]; ?></div>
                       <div class="product-description"><?php echo $row["gameDescription"]; ?></div>
                       <div class="order-button">
                       <h5>Order here <input type="checkbox" name="gameOrderID[]" value="<?php echo $row["gameID"]; ?>"></h5>
                     </div>
                    </div>
                             <?php

                                 }

                                 }
                                 else {
                                     echo "No results";
                                 }

                             ?>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php
        include("inc/footer.php");
        ?>
    </div>
</body>
</html>