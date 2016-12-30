<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <title>Item_template</title>
        <link rel="stylesheet" type="text/css" href="template.css">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <base target="_self">
    </head>
    <body>  
        <?php
        include 'case.php';
        if(($_SERVER["REQUEST_METHOD"] == "GET") && (isset($_GET["productID"]))) {
            //if($_GET['from'] == 'personal'){include 'Project.html';}
            $conn = new mysqli('localhost', 'root', '', 'testdb');
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            $ID = $_GET["productID"];
            $sql = "SELECT * FROM product WHERE productID='$ID' limit 1";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $time = $row["time"];
            $Status = $row["status"];
            $SellerID = $row["userName"];
            $detail = $row["detail"];
            $price = $row["price"];
            $address = $row["address"];
            $img = $row["image"];
            $contact = $row["contact"];
            $detail = $row["detail"];
            $productName = $row["productName"];
            $postcode = $row["postcode"];
            /*if(isset($_GET['from'])){
                include 'Project.html';
            }*/
        }      
        ?>
        <div class="topmost">
            <ul class="middle">
                <li id="seller_profile">Seller Username:
                <?php
                    if (isset($SellerID)){
                        echo '<span class="edit" id="SellerID">'.$SellerID.'</span>';
                    }
                    else{
                        echo '<span class="edit" id="SellerID"> no info</span>';
                    }
                ?>
                </li>
                <li>Created:
                <?php
                    if(isset($time)){
                        echo '<span class="edit" id="CreatedTime">'.$time.'</span>'; 
                    }
                    else{
                        echo '<span class="edit" id="CreatedTime"> no info</span>';
                    }  
                ?> 
                </li>
                <li>Status:
                <span class="edit" id="visited">
                <?php
                    if (isset($Status)) {
                        if($Status == 0){
                            echo "For Sale";
                        }
                        else{
                            echo "Sold";
                        }
                    }
                 ?>
                 </span></li>
            </ul>
        </div>
        <div class="main">
            <div class="w3-display-container" style="width:40%; height:100%; float: left; margin-top: 20%">
                <?php
                    if (isset($img)){
                        echo '<img class="taylorSlides" src="'.$img.'">';
                    }
                    else{
                        echo 'No img proveded';
                    }
                    
                ?>
                <!--
                <a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
                <a class="w3-btn-floating w3-display-right" onclick="plusDivs(1)">&#10095;</a>
                -->
            </div>
            <script src="template.js"></script>
            <div class="right">
                <h1 id="Item name">
                    <?php
                        if(isset($productName)){
                        echo '<span class="edit" id="CreatedTime">'.$productName.'</span>'; 
                    }
                    else{
                        echo '<span class="edit" id="CreatedTime"> no info</span>';
                    } 
                    ?> 
                </h1>
                <p class="border">Price:<span id="price" class="price">
                    <?php
                        if(isset($price)){
                        echo '<span class="edit" id="CreatedTime">'.$price.'</span>'; 
                    }
                    else{
                        echo '<span class="edit" id="CreatedTime"> no info</span>';
                    }  
                    ?>
                </span></p>
                <p>Location:<span id="location">
                    <?php
                        if(isset($address)){
                        echo '<span class="edit" id="CreatedTime">'.$address.'</span>'; 
                    }
                    else{
                        echo '<span class="edit" id="CreatedTime"> no info</span>';
                    }  
                    ?>
                </span></p>
                <p>Contact Information:<span id="contact">
                    <?php
                        if(isset($contact)){
                        echo '<span class="edit" id="CreatedTime">'.$contact.'</span>'; 
                    }
                    else{
                        echo '<span class="edit" id="CreatedTime"> no info</span>';
                    }  
                    ?>
                </span></p>
                <div class="map_canvas_container">
                    <?php
                        echo ' <iframe src="http://maps.google.ca/maps?q='.$postcode.'&output=embed" width="100%" height="100%"></iframe>';
                    ?>
   
                </div>             
                <div id="share-buttons">   
 
                    <!-- Facebook -->
                    
                        <?php
                            echo '<a href="http://www.facebook.com/sharer.php?u=http://zhening.zhang/Item_template.php" target="_blank">
                                <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
                                </a>';
                        ?>
                        
                    </a>
                    
                    <!-- Google+ -->
                    <?php 
                    echo '
                    <a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
                    </a>'
                    ?>
                    
                    
                    <!-- LinkedIn -->
                    <?php echo'
                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://simplesharebuttons.com" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
                    </a>'
                    ?>
                    
                    <!-- Reddit -->
                    <?php echo '
                    <a href="http://reddit.com/submit?url=https://simplesharebuttons.com&amp;title=Simple Share Buttons" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
                    </a>'
                    ?>
                    
                     
                    <!-- Twitter -->
                    <?php echo '
                    <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
                    </a>'
                    ?>

                </div>
            </div>
            <div>
                <p class="detail">Details</p>
                <p id="description" class="description">
                    <?php
                        if(isset($detail)){
                        echo '<span class="edit" id="CreatedTime">'.$detail.'</span>'; 
                    }
                    else{
                        echo '<span class="edit" id="CreatedTime"> no detail provided</span>';
                    }  
                    ?>
                </p>
            </div>
        </div>
    </body>


</html>