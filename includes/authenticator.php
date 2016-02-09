<?php
include('db-conn.php');
error_reporting(0);

$dept=$_COOKIE["dept"];
$ckname=$_COOKIE["ckname"];

function ck_ss_kill() {
  setcookie("dept", $cookie_value, time() - (5), "/");
  setcookie("ckname", $cookie_value, time() - (5), "/");
  setcookie("eh_ssid", $cookie_value, time() - (5), "/");
  setcookie("PHPSESSID", $cookie_value, time() - (5), "/");
}

if($_GET["action"]=="lout") {
  $cookie_name = "sid_hash";
  $cookie_value = "";
  setcookie($cookie_name, $cookie_value, time() - (5), "/");
  ck_ss_kill();
  echo "<script>url1=window.location.href;url2=url1.replace('action=lout','action=loutscc');
        window.location.assign(url2)</script>";
}

if(isset($_COOKIE["PHPSESSID"])) {
  $ssid=$_COOKIE["PHPSESSID"];
}
else {
  $ssid="";
}

if(!isset($_COOKIE[$ckname])) {
  session_write_close();
  session_unset();
  ck_ss_kill();
  unset($_COOKIE[$ckname]);
  # trigger_error("408 Timeout, Please Login Again");
  include('header.php');
  echo "<p class='w3-xxxlarge' style='text-align: center;'>408 TIMEOUT</p>
  <p class='w3-xlarge' style='text-align: center;'>You have been Logged Out. Please Login Again. Please allow cookies for this website in your browser always.</p>";
  include('footer.php');
  exit();
} elseif(!password_verify($ssid, $_COOKIE[$ckname])||!password_verify($_COOKIE[$ckname], $_COOKIE["eh_ssid"])) {
  session_write_close();
  session_unset();
  ck_ss_kill();
  unset($_COOKIE[$ckname]);
  # trigger_error("401 Unauthorized, Please Login Again");
  include('header.php');
  echo "<p class='w3-xxxlarge' style='text-align: center;'>401 UNAUTHORIZED</p>
  <p class='w3-xlarge' style='text-align: center;'>You have been Logged Out/Unauthorized. Please Login Again. Please allow cookies for this website in your browser always.</p>";
  include('footer.php');
  exit();
} else {
  session_start();
}
 ?>
