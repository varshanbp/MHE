<?php
require_once('../includes/db-data.php');
?>

<!DOCTYPE html>
<html>
<title>DA Installer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../digi-attend/css/w3.css">
<body>

<nav class="w3-sidenav w3-white w3-card-2" style="display:none">
  <a href="javascript:void(0)" onclick="menu_close()" class="w3-closenav w3-large">Close &times;</a>
  <a href="#">Home</a>
  <a href="#">Portal</a>
  <a href="#" onclick="document.getElementById('id01').style.display='block'">Log Out</a>
</nav>

<header class="w3-container w3-teal w3-padding-16">
  <!--<span class="w3-opennav w3-xlarge" onclick="menu_open()"></span>-->
  <i class="w3-opennav w3-xxxlarge material-icons" onclick="menu_open()">menu</i>
  <h1>Digital Attendance Step by Step Installer</h1>
</header>

<div class="w3-padding">
  <form action="db-install.php" target="if3">
    <input type="submit" class="w3-btn" value="STEP 1 : Database Installation" />
    <br><i class="material-icons">arrow_downward</i>
  </form>
  <form action="../includes/auto-script/auto-script1.php" target="if3">
    <input type="submit" class="w3-btn" value="STEP 2 : Tables Initialization" />
    <br><i class="material-icons">arrow_downward</i>
  </form>
  <form action="">
    <input type="submit" class="w3-btn" value="Button" />
    <br><br><br>
  </form>

  <iframe class="w3-container w3-border" name="if3" style="width:100%;height:250vh;"></iframe>
</div>

<footer class="w3-container w3-teal">
  <p style="text-align:center;">&copy; 2016 JSSV under Attribution Assurance License. All rights reserved</p>
</footer>

<script>
function menu_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
}
function menu_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
}
</script>

</body>
</html>
