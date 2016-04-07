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
<iframe class="w3-container w3-border" name="if1" style="width:100%;height:250vh;"></iframe>
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
