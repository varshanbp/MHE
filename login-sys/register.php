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
<script src="js/checkform-rf.js"></script>
</head>
<body>
		<!--start sign_up-->
		<div class="sign_up">
			<!--start form-->
			<form class="sign" action="../includes/register-db.php" method="POST" onsubmit="return(fCheck())">
				<div class="formtitle">Register Now.</div>
				<!--start top_section-->
				<div class="top_section">
					<div class="section">
						<div class="input username">
							<input type="text" name="uname" id="uname" oninput="nmCheck()" placeholder="User Name" style="color: #87aa32;" required /><span><img id="img1" src="images/close.png" /></span>
						</div>
						<div class="input password">
							<input type="password" name="pwd" id="pwd" oninput="pwCheck()" placeholder="6 Digit Pin" size="6" maxlength="6" style="color: #e20000;" required /><span><img id="img2" src="images/close.png" /></span>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="section">
						<div class="input email">
							<input type="email" name="email" id="email" placeholder="Enter your Email"  required /><span><img id="img3" src="images/close.png" /></span>
						</div>
						<div class="input email">
							<input type="email" name="remail" id="remail" placeholder="Re-enter Your Email" required oninput="emailVerify()" /><span><img id="img4" src="images/close.png" /></span>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
        <br>
				<div class="input username">
					<label class="break">Date of Birth</label>
					<input type="date" name="dob" id="dob" required oninput="dobVerify()" /><span><img id="img5" src="images/close.png"/></span>
				</div>
				<div id="nmerror" class="break"></div><br>
				<div id="pwerror" class="break"></div><br>
				<div id="emerror" class="break"></div>
				<!--end top_section-->
				<!--start personal Details-->
				<!--start bottom-section-->
				<br>
				<div class="bottom-section">
					<div class="title">Personal Details</div>
					<!--start name section-->
					<div class="section">
						<div class="input-sign details">
							<input type="text" name="fname" id="fname" oninput="fnVerify()" placeholder="First Name" required/>
							<span><img id="img6" style="float: right;" src="images/close.png"/></span><div id="fnerror" class="break"></div>
						</div>
						<div class="input-sign details1">
							<input type="text" name="lname" id="lname" oninput="lnVerify()" placeholder="Last Name" required/>
							<span><img id="img7" style="float: right;" src="images/close.png"/></span><div id="lnerror" class="break"></div>
						</div>
						<div class="clear"> </div>
					</div>
					<!--start security section-->
					<div class="section">
						<div class="input-sign details">
							<input type="text" name="sq" id="sq" oninput="sqVerify()" placeholder="Security Question" required/>
							<span><img id="img8" style="float: right;" src="images/close.png"/></span><div id="sqerror" class="break"></div>
						</div>
						<div class="input-sign details1">
							<input type="text" name="sa" id="sa" oninput="saVerify()" placeholder="Security Answer" required/>
							<span><img id="img9" style="float: right;" src="images/close.png"/></span><div id="saerror" class="break"></div>
						</div>
						<div class="clear"> </div>
					</div>
					<!--start country section-->
					<div class="section-country">
						<select  name="dept" id="dept" onchange="change_country(this.value)" oninput="dpVerify()" class="frm-field required">
		            <option value="">Select your Department</option>
		            <option value="CE">CE - Civil Engineering</option>
		            <option value="CS">CS - Computer Science and Engineering</option>
		            <option value="EC">EC - Electronics and Communication Engineering</option>
		            <option value="EE">EE - Electrical and Electronics Engineering</option>
		            <option value="IS">IS - Information Science and Engineering</option>
		            <option value="ME">ME - Mechanical Engineering</option>
		         </select>
						 <span><img id="img10" style="float: right;" src="images/close.png"/></span><div id="dperror" class="break"></div>
					</div>
					<div class="submit">
						<input class="bluebutton submitbotton" type="submit" value="Sign up" />
					</div>
				</div>
				<!--end bottom-section-->
			</form>
			<!--end form-->
		</div>
		<!--start copyright-->
			<p class="copy_right">&#169; 2016 JSSV under Attribution Assurance License. All rights reserved | CSS Template by<a href="http://w3layouts.com" target="_blank"> w3layouts</a> and<a href="https://www.hweb.in.net" target="_blank"> Hyperion Web</a></p>
</body>
</html>
