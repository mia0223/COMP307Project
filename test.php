<?php
	if(isset($page)){
		if(empty($page) == 1){
			if(empty($productID) == 1){
				include 'homepage.php';
			}
			else{
				//if(isset($from)){ echo 'nothing!!!!!!!!!!!';}
				//else{include 'Item_template.php';}
				include 'Item_template.php';
				}
		}

		else{
			include 'textbook.php';
		}
	}
	else{
		echo 'page does not exist!';
	}

?>























