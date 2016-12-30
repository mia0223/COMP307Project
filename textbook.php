<?php
// database connection info
$user = 'root';
$password = '';
$db = 'testdb';

$db = new mysqli('localhost', $user, $password, $db) or die("unable to connect");

// find out how many rows are in the table 
$sql = "SELECT COUNT(category) FROM product WHERE category='$page' ";
$result = $db->query($sql);

//$row = mysql_fetch_row($result);
$row = $result->fetch_row();
$numrows = $row[0];

// number of rows to show per page
$rowsperpage = 3;
// find out total pages
$totalpages = ceil($numrows / $rowsperpage);

// get the current page or set a default
if (isset($_GET['currentPage']) && is_numeric($_GET['currentPage'])) {
   // cast var as int
   $currentPage = (int) $_GET['currentPage'];
} else {
   // default page num
   $currentPage = 1;
} // end if

// if current page is greater than total pages...
if ($currentPage > $totalpages) {
   // set current page to last page
   $currentPage = $totalpages;
} // end if
// if current page is less than first page...
if ($currentPage < 1) {
   // set current page to first page
   $currentPage = 1;
} // end if

// the offset of the list, based on current page 
$offset = ($currentPage - 1) * $rowsperpage;

// get the info from the db
$sql = "SELECT image, productName, productID FROM product WHERE category='$page' LIMIT $offset, $rowsperpage";
$result = $db->query($sql);

if($result->num_rows > 0){
   echo '<div class="TextBookContainer">';
   while($row = $result->fetch_array()){
      //echo "<p style=\"font-size: 20px\">first name:". $row["firstname"]. "<br>";
      echo '
      <div class="book">
      <figure>
      <a href="?productID='.$row["productID"].'">
      <img height="150" width="150" src="'.$row["image"].'">
      </a>
      <figcaption><a href="?productID='.$row["productID"].'">'.$row["productName"].' </a></figcaption>
      </figure>
      </div>
      ';
      echo '<link rel="stylesheet" type="text/css" href="textbook.css">';
   }
   echo '</div>';
}
else{
   echo "no result";
}

include 'pageNum.php';
?>