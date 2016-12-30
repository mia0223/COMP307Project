<html>
<head>
	<meta charset="UTF-8">
	<title>LOG IN</title>
	<link rel="stylesheet" type="text/css" href="login_welcome.css">
</head>
<body>
	<header>
		<!--navigation bar-->
		<ul class="top">
			<li><a href=http://www.bilibili.com/ target="_blank">HOME</a></li>
			<li><a href=http://www.bilibili.com/ target="_blank">Welcome</a></li>
			<li><a href=http://www.bilibili.com/ target="_blank">link</a></li>
			<li><a href=http://www.bilibili.com/ target="_blank">link</a></li>
		</ul>	
		<ul class="top">
			<li style="float: right"><a href=http://www.bilibili.com/ target="_blank">HOME</a></li>
			<li style="float: right"><a href=http://www.bilibili.com/ target="_blank">link</a></li>
			<li style="float: right"><a href=http://www.bilibili.com/ target="_blank">link</a></li>
		</ul>	
	</header>

	<section>
		<div class="form">	
		<form class="fill" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
		    <p class="big">LOG IN</p>
			<input type="text" name="username" placeholder="username (eg.Julie)"><br>
			<input type="text" name="password" placeholder="password (6-16 letters)"><br>
			<input type="submit" name="submit" value="submit"><br>
			<p>Do not have an account? <br><a href=sign_up.html target="_blank" style="text-decoration: none;text-align: right;"><b>register</b></a></p>
		</form>
		</div>
	</section>

	<footer>
		<ul class="bottom">
			<li><a href=http://www.bilibili.com/ target="_blank">link1</a>
			<a href=http://www.bilibili.com/ target="_blank">link2</a>
			<a href=http://www.bilibili.com/ target="_blank">link3</a>
			</li>
			<li><a href=http://www.bilibili.com/ target="_blank">link1</a>
			<a href=http://www.bilibili.com/ target="_blank">link2</a>
			<a href=http://www.bilibili.com/ target="_blank">link3</a>
			</li>
			<li><a href=http://www.bilibili.com/ target="_blank">link1</a>
			<a href=http://www.bilibili.com/ target="_blank">link2</a>
			<a href=http://www.bilibili.com/ target="_blank">link3</a>
			</li>
		</ul>
		<p class="cr">copyright @2016.<br>All rights reserved.</p>	
	</footer>
</body>
</html>