<!--HomePage Content-->
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="homepage.css">
</head>

<body>

<div class="container1">
	<div class="div4">
		<nav class="vertical"><ul>
		</ul></nav>
	</div>

	<div class="div3">
		<img class="mySlides" src="textbook.jpg" width="620" height="360" />
		<img class="mySlides" src="furniture.jpg" width="620" height="360" />
	</div>
</div>

<div class="container2" id="container2a">
	<div class="productList1">
		<p class="category" id="categoryA">New Textbooks</p>
		<a class="leftArrow" onclick="plusDivs(-1, 1)">&#10094;</a><!--change page arrow-->

		<?php
			$db = new mysqli('localhost', 'root', '', 'testdb') or die("unable to connect");
			include 'showProduct.php';
			$sql = "SELECT image, productName, productID FROM product WHERE category='textbook' LIMIT $total1, 4";
			$result = $db->query($sql);
			include 'showProduct2.php';
		?>

		<a class="rightArrow" onclick="plusDivs(1, 1)">&#10095;</a><!--change page arrow-->
	</div>

	<div class="productList1">
		<p class="category" id="categoryA">New Textbooks</p>
		<a class="leftArrow" onclick="plusDivs(-1, 1)">&#10094;</a><!--change page arrow-->
		
		<?php
			$db = new mysqli('localhost', 'root', '', 'testdb') or die("unable to connect");
			$sql = "SELECT image, productName, productID FROM product WHERE category='textbook' LIMIT $total2, 4";
			$result = $db->query($sql);
			include 'showProduct2.php';
		?>

		<a class="rightArrow" onclick="plusDivs(1, 1)">&#10095;</a><!--change page arrow-->
	</div>	
</div>


<div class="container2">
	<div class="productList2">
		<p class="category">New Clothes</p>
		<a class="leftArrow" onclick="plusDivs(-1, 2)">&#10094;</a><!--change page arrow-->
		<?php
			$db = new mysqli('localhost', 'root', '', 'testdb') or die("unable to connect");
			$sql = "SELECT image, productName, productID FROM product WHERE category='cloth' LIMIT $total3, 4";
			$result = $db->query($sql);
			include 'showProduct2.php';
		?>
		<a class="rightArrow" onclick="plusDivs(1, 2)">&#10095;</a><!--change page arrow-->
	</div>

	<div class="productList2">
		<p class="category">New Clothes</p>
		<a class="leftArrow" onclick="plusDivs(-1, 2)">&#10094;</a><!--change page arrow-->
		<?php
			$db = new mysqli('localhost', 'root', '', 'testdb') or die("unable to connect");
			$sql = "SELECT image, productName, productID FROM product WHERE category='cloth' LIMIT $total4, 4";
			$result = $db->query($sql);
			include 'showProduct2.php';
		?>
		<a class="rightArrow" onclick="plusDivs(1, 2)">&#10095;</a><!--change page arrow-->
	</div>	
</div>


<div class="container2">
	<div class="productList3">
		<p class="category">New Furnitures</p>
		<a class="leftArrow" onclick="plusDivs(-1, 3)">&#10094;</a><!--change page arrow-->
		<?php
			$db = new mysqli('localhost', 'root', '', 'testdb') or die("unable to connect");
			$sql = "SELECT image, productName, productID FROM product WHERE category='furniture' LIMIT $total5, 4";
			$result = $db->query($sql);
			include 'showProduct2.php';
		?>
		<a class="rightArrow" onclick="plusDivs(1, 3)">&#10095;</a><!--change page arrow-->
	</div>

	<div class="productList3">
		<p class="category">New Furnitures</p>
		<a class="leftArrow" onclick="plusDivs(-1, 3)">&#10094;</a><!--change page arrow-->
		<?php
			$db = new mysqli('localhost', 'root', '', 'testdb') or die("unable to connect");
			$sql = "SELECT image, productName, productID FROM product WHERE category='furniture' LIMIT $total6, 4";
			$result = $db->query($sql);
			include 'showProduct2.php';
		?>
		<a class="rightArrow" onclick="plusDivs(1, 3)">&#10095;</a><!--change page arrow-->
	</div>	
</div>


<div class="container2">
	<div class="productList4">
		<p class="category">New 3C Products</p>
		<a class="leftArrow" onclick="plusDivs(-1, 4)">&#10094;</a><!--change page arrow-->
		<?php
			$db = new mysqli('localhost', 'root', '', 'testdb') or die("unable to connect");
			$sql = "SELECT image, productName, productID FROM product WHERE category='3c' LIMIT $total7, 4";
			$result = $db->query($sql);
			include 'showProduct2.php';
		?>
		<a class="rightArrow" onclick="plusDivs(1, 4)">&#10095;</a><!--change page arrow-->
	</div>

	<div class="productList4">
		<p class="category">New 3C Products</p>
		<a class="leftArrow" onclick="plusDivs(-1, 4)">&#10094;</a><!--change page arrow-->
		<?php
			$db = new mysqli('localhost', 'root', '', 'testdb') or die("unable to connect");
			$sql = "SELECT image, productName, productID FROM product WHERE category='3c' LIMIT $total8, 4";
			$result = $db->query($sql);
			include 'showProduct2.php';
		?>
		<a class="rightArrow" onclick="plusDivs(1, 4)">&#10095;</a><!--change page arrow-->
	</div>	
</div>
</body>
</html>
