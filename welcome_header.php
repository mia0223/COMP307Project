<?php
	echo'
<link rel="stylesheet" type="text/css" href="template.css">
<header>
    <ul class="top">

        <li><a href=myspace.html target="_self">'.'Welcome  '.$_SESSION['usersession'].'</a></li>
        <li><a href=index.html target="_self">'.'Home'.'</a></li>
        <li><a href=logout.php>Log out</a></li>

    </ul>    
</header>
';
?>