<!--
LICENSED AS OPEN SOURCE UNDER ATTRIBUTION ASSURANCE LICENSE
Made by "Johnson S, Suraj P, Suvith Kumar CV, Varshan BP"
See "LICENSE.MD" file present in Root Folder
CSS Author: W3layouts
CSS Author URL: http://w3layouts.com
License for CSS files: Creative Commons Attribution 3.0 Unported
License URL License for CSS files: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
<title>Login Page :: JSSV Digital Attendance</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/checkform-lf.js"></script>
</head>
<body>
	<!--start member-login-->
		<div class="member-login">
			<!--start form-->
				<form class="login" action="../includes/login-check.php" method="POST" onsubmit="return(fCheck())">

					<div class="formtitle">Member Login</div>
					<div class="input">
						<input type="text" name="uname" id="uname" oninput="nmCheck()" placeholder="Your User Name" style="color: #87aa32;" required />
					  <span><img id="img1" src="images/close.png" alt="wrong/right_button"/> </span>
					</div>
					<div class="input">
						<input type="password" name="pwd" id="pwd" oninput="pwCheck()" placeholder="Your 6 Digit Pin" size="6" maxlength="6" style="color: #e20000;" required />
						<span><img id="img2" src="images/close.png" alt="wrong/right_button"/></span>
					</div>
					<div id="nmerror" class="break"></div>
					<div id="pwerror" class="break"></div>
					<div class="buttons">
						<a href="#">Forgot password?</a>
						<input class="bluebutton" type="submit" value="Login" />
						<div class="clear"> </div>
					</div>

				</form>
				<!--end form-->
		</div>
		<!--end member-login-->
		<!--start copyright-->
			<p class="copy_right">&#169; 2016 JSSV under Attribution Assurance License. All rights reserved | CSS Template by<a href="http://w3layouts.com" target="_blank"> w3layouts</a> and<a href="https://www.hweb.in.net" target="_blank"> Hyperion Web</a></p>
</body>
</html>
