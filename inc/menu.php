<?php 
//Navigation bar

//array of pages

//array pages have the same name as the menu names

$pages = array("navigation" => array(
								array("navigationName" => "Home", 
										"navigationPath" => "index.php"),
								array("navigationName" => "Games", 
										"navigationPath" => "games.php"),
								array("navigationName" => "Checkout", 
										"navigationPath" => "checkout.php"),
								array("navigationName" => "About us", 
										"navigationPath" => "about.php"),
								array("navigationName" => "Contact", 
										"navigationPath" => "contact.php")
			));
?>


<!DOCTYPE html>
<html>
<head>
	<title>Gameworld menu</title>
</head>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<body>

<ul>
	<?php
	foreach ($pages["navigation"] as $page) {
	?>
	<div class="menu">
	<li><a href="<?php echo $page["navigationPath"] ?>"><?php echo $page["navigationName"] ?></a></li>
	</div>
	<?php
	}
	?>
</ul>

</body>
</html>