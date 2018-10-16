<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>Google Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <div class="banner">
            <span id="mail"><a href="#">Gmail</a></span>
            <span id="images"><a href="#">Images</a></span>
            <span id="apps"><!-- App Icon --></span>
            <span id="login">
				<button id="signin">Sign In</button>
			</span>
        </div>
        <div class="logo">
            <span id="google">
				<img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" />
			</span>
        </div>
	<form action="index.php" method="post">
        <div class="search">
            <input name="url" type="text" autocomplete="off"/>
        </div>
        <div class="buttons">
            <input type="submit" id="google-search">Google Search</input>
            <button id="lucky">I'm Feeling Lucky</button>
        </div>
	    </form>
	<?php if(isset($error_msg)){ ?>
	
	<div id="error">
		<div class="message"><?php echo $error_msg; ?></div>
	</div>
	
	<?php } ?>
    </div>
    <div class="footer">
        <span class="left">
			<span id="ads"><a href="#">Advertising</a></span>
	        <span id="business"><a href="#">Business</a></span>
	        <span id="about"><a href="#">About</a></span>
        </span>
        <span class="right">
        	<span id="ads"><a href="#">Privacy</a></span>
	        <span id="business"><a href="#">Terms</a></span>
	        <span id="about"><a href="#">Settings</a></span>
        </span>
    </div>
</body>

</html>
