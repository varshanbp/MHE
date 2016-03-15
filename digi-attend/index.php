<?php
require_once('../includes/db-conn.php');
require_once('../includes/authenticator.php');
include('../includes/modals/logout.php');
include('../includes/modals/student.php');
?>

<!DOCTYPE html>
<html>
<title>DA Main Page :: Digtal Attendance by JSSV</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
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
  <div class="w3-dropdown-hover">
    <i class="w3-opennav w3-xxxlarge material-icons">settings</i>
    <div class="w3-dropdown-content w3-border">
      <a href="#" style="color:black;">Update Profile Information</a>
      <a href="#" style="color:black;">Request Department Access</a>
      <!--<a href="#" style="color:black;"></a>-->
    </div>
  </div>
  <i class="w3-opennav w3-xxxlarge material-icons">help_outline</i>
  <h1>Digital Attendance Portal</h1>
</header>

<div class="w3-container w3-padding-32">

<!-- SUB MENU 1 - START -->
  <nav class="w3-topnav w3-green">
    <a class="w3-xlarge">Options</a>
    <a href="#" onclick="document.getElementById('id02').style.display='block'">List Students</a>
    <div class="w3-dropdown-hover">
      <a href="#">Today's Main Attendance</a>
      <div class="w3-dropdown-content w3-card-4">
        <a href="#" style="color:black;" onclick="document.getElementById('id03').style.display='block'">Mark</a>
        <a href="#" style="color:black;">Edit</a>
        <a href="#" style="color:black;" onclick="document.getElementById('id05').style.display='block'">Review</a>
      </div>
    </div>
    <div class="w3-dropdown-hover">
      <a href="#">Main Attendance Records</a>
      <div class="w3-dropdown-content w3-card-4">
        <a href="#" style="color:black;">Edit</a>
        <a href="#" style="color:black;" onclick="document.getElementById('id04').style.display='block'">Review</a>
      </div>
    </div>
    <div class="w3-dropdown-hover">
      <a href="#">Subject Wise Attendance</a>
      <div class="w3-dropdown-content w3-card-4">
        <a href="#" style="color:black;">Mark</a>
        <a href="#" style="color:black;">Edit</a>
        <a href="#" style="color:black;">Review</a>
      </div>
    </div>
    <div class="w3-dropdown-hover">
      <a href="#">IA Marks Related</a>
      <div class="w3-dropdown-content w3-card-4">
        <a href="#" style="color:black;">Add IA Marks</a>
        <a href="#" style="color:black;">Edit IA Marks</a>
        <a href="#" style="color:black;">Review IA Marks</a>
      </div>
    </div>
    <a href="#">Report Generation</a>
  </nav>
<!-- SUB MENU 1 - END -->
</div>

<div class="w3-padding">
<iframe class="w3-container w3-border" onclick="iframeLoaded()" name="if1" style="width:100%;height:250vh;"></iframe>
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
