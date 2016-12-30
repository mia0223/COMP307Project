<?php
if($result->num_rows > 0){
   	while($row = $result->fetch_array()){
      	echo '
        <div class="showImg">
     		<figure>
      			<a href="?productID='.$row["productID"].'">
     				<img height="150" width="150" src="'.$row["image"].'">
      			</a>
      			<figcaption><a href="?productID='.$row["productID"].'">'.$row["productName"].' </a></figcaption>
     		</figure>
        </div>
      		';
   	}
}
?>