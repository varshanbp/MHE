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
  <a href="#">Attendance</a>
  <a href="#">Reports</a>
  <a href="#">Status</a>
  <a href="#">Marks</a>
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
    <div class="w3-dropdown-hover">
      <a href="#">Students Related</a>
      <div class="w3-dropdown-content w3-card-4">
        <a href="#" style="color:black;" onclick="document.getElementById('id02').style.display='block'">List Students</a>
      </div>
    </div>
    <div class="w3-dropdown-hover">
      <a href="#">IA Marks Related</a>
      <div class="w3-dropdown-content w3-card-4">
        <a href="#" style="color:black;">Add Student IA Marks</a>
        <a href="#" style="color:black;">Edit Student IA Marks</a>
        <a href="#" style="color:black;">Review Student IA Marks</a>
        <a href="#" style="color:black;">Finalize Student IA Marks</a>
      </div>
    </div>
    <div class="w3-dropdown-hover">
      <a href="#">Today's Attendance</a>
      <div class="w3-dropdown-content w3-card-4">
        <a href="#" style="color:black;" onclick="document.getElementById('id03').style.display='block'">Mark Today's Attendance</a>
        <a href="#" style="color:black;">Edit Today's Attendance</a>
        <a href="#" style="color:black;">Review Today's Attendance</a>
        <a href="#" style="color:black;">Finalize Todays's Attendance</a>
      </div>
    </div>
    <div class="w3-dropdown-hover">
      <a href="#">Attendance Records</a>
      <div class="w3-dropdown-content w3-card-4">
        <a href="#" style="color:black;">Review Previous Attendance</a>
        <a href="#" style="color:black;">Edit Previous Attendance</a>
        <a href="#" style="color:black;">Review Previous Attendance</a>
        <a href="#" style="color:black;">Finalize Monthly Attendance</a>
      </div>
    </div>
    <a href="#">Report Generation</a>
    <a href="#">Sort</a>
  </nav>
<!-- SUB MENU 1 - END -->
</div>

<div class="w3-padding">
<iframe class="w3-container w3-border" name="if1" style="width:100%;height:100vh;"></iframe>
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
