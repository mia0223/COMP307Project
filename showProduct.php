<?php
global $total2;	global $total1;
global $total3; global $total4;
global $total5; global $total6;
global $total7; global $total8;

$sql = "SELECT COUNT(category) FROM product WHERE category='textbook' ";
			$result = $db->query($sql);
			$row = $result->fetch_row();
			$total = $row[0];
			$total1 = $total-4;
			$total2 = $total-8;
$sql = "SELECT COUNT(category) FROM product WHERE category='cloth' ";
			$result = $db->query($sql);
			$row = $result->fetch_row();
			$total = $row[0];
			$total3 = $total-4;
			$total4 = $total-8;
$sql = "SELECT COUNT(category) FROM product WHERE category='furniture' ";
			$result = $db->query($sql);
			$row = $result->fetch_row();
			$total = $row[0];
			$total5 = $total-4;
			$total6 = $total-8;
$sql = "SELECT COUNT(category) FROM product WHERE category='3c' ";
			$result = $db->query($sql);
			$row = $result->fetch_row();
			$total = $row[0];
			$total7 = $total-4;
     		$total8 = $total-8;


?>