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
                <div id="banner-text"><h2>Welcome to our about page!</h2></div>
                <div id="banner-text2"><h2>Here you can find information about us.</h2></div>
            </div>
            <div class="header-about"><h1>About Us</h1></div>
            <div id="text-about">Pellentesque consequat vitae tortor sed rhoncus. Aenean odio augue, convallis in risus sed, ultricies imperdiet lectus. Integer efficitur magna at tortor volutpat bibendum. Nam eros massa, molestie molestie erat vitae, cursus accumsan lacus. Pellentesque sollicitudin ex ut purus aliquet aliquam. Vestibulum ac varius eros. Curabitur congue laoreet eros at vulputate. Sed ullamcorper maximus ex non euismod. Duis tempor, lacus ornare ornare volutpat, erat augue elementum nulla, quis ultrices mauris augue eu orci. Proin vel ipsum placerat, consectetur augue in, aliquet arcu. Fusce elementum ante eros, eu consequat urna suscipit eget. Donec eleifend, turpis quis pulvinar congue, diam enim auctor purus, eget imperdiet sem nibh ut mi. Suspendisse in consequat velit, vitae posuere mauris. Pellentesque vitae euismod odio, et congue augue. Vivamus id pellentesque enim.<br>

            Phasellus quis ligula et dolor tempus commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id purus semper, elementum neque a, dapibus mauris. Nullam tempor metus et lacus ullamcorper interdum. Sed metus metus, luctus ut suscipit at, gravida ultrices lacus. Integer et risus in purus convallis elementum. Vivamus tincidunt aliquam congue. Sed condimentum felis ut mi iaculis, vel euismod arcu tincidunt. In malesuada nec ligula id facilisis. Maecenas at imperdiet est. Duis suscipit tortor id lorem tempor, ac elementum dolor consequat. Aliquam id odio a orci volutpat ultrices. Maecenas vitae accumsan quam. Donec vestibulum venenatis odio. Ut efficitur iaculis sem at rutrum.
            </div>
            <h1 class="header-about">Location:</h1>
            <!-- Embedded code for google maps -->
            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="EGM.com">https://embedgooglemaps.com/nl/</a></small></div><div><small><a href="https://www.zorgverzekeringvergelijken2018.nl/zorgverzekeringen-vergelijken-2018/">https://www.zorgverzekeringvergelijken2018.nl/zorgverzekeringen-vergelijken-2018/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(51.4863979,5.657469900000024),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(51.4863979,5.657469900000024)});infowindow = new google.maps.InfoWindow({content:'<strong>Locatie</strong><br>keizerin marialaan 2<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script> 
            
        </div>
        <?php
        include("inc/footer.php");
        ?>
    </div>
</body>
</html>