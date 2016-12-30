<?php
//$ID --> username
$db = 'testdb';

$db = new mysqli('localhost', 'root', '', $db) or die("unable to connect");
$sql = "SELECT detail, productName, productID, price, status FROM product WHERE userName='$ID'";
$result = $db->query($sql);


if($result->num_rows > 0){
   echo '<table class="forSale" style="text-align: center;">
         <tr><th>Product Name</th><th>Product Price</th><th>Detail</th></tr>';
   while($row = $result->fetch_array()){
      if($row["status"] == 0){
         echo '
                  <tr><td><a href="?productID='.$row["productID"].'">'.$row["productName"].' </a></td>
                      <td>'.$row["price"].'</td>
                      <td>'.$row["detail"].'</td>
                  </tr>
               ';
      }
   }
   echo '</table>';
}
else{
  echo '<table class="forSale" style="text-align: center;" >
          <tr><td>Product Name</td><td>Product Price</td><td>Details</td></tr>
          <tr><td>NO RESULT</td><td>NO RESULT</td><td>NO RESULT</td></tr>
        </table>';
}

?>

