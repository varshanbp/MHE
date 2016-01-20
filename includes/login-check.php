<!DOCTYPE html>
<html>
<title>Login Flow :: Digtal Attendance by JSSV</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../digi-attend/css/w3.css">
<body>

<nav class="w3-sidenav w3-white w3-card-2" style="display:none">
  <a href="javascript:void(0)" onclick="menu_close()" class="w3-closenav w3-large">Close &times;</a>
  <a href="#">Home</a>
  <a href="#">Attendance</a>
  <a href="#">Reports</a>
  <a href="#">Status</a>
  <a href="#">Marks</a>
  <a href="#">Log Out</a>
</nav>

<header class="w3-container w3-teal">
  <span class="w3-opennav w3-xlarge" onclick="menu_open()">&#9776;</span>
  <h1>Digital Attendance Portal</h1>
</header>
<div class="w3-container">

<!--PHP CODE - START-->
  <?php
  include('db-conn.php');
  error_reporting(0);

  $uid=$_POST['uname'];
  $pwd=$_POST['pwd'];

  $sql_arr1=mysqli_query($sql_conn1, "SELECT pin_hash FROM auth WHERE uid='$uid'");
  $phash=mysqli_fetch_assoc($sql_arr1);

  if(!$phash) {
    echo "<p class='w3-xlarge' style='text-align: center;'>You have not registered or is due to Internal Error.</p>
    <p class='w3-xlarge' style='text-align: center;'>If have not yet Registered, please register at Register page.</p>
    <p class='w3-xlarge' style='text-align: center;'>Else Contact Administrator/Data Base Administrator.</p>";
    # <!--FOOTER - START-->
    include('footer.php');
    # <!--FOOTER - END-->
    exit();
  }

  if(password_verify($pwd, $phash['pin_hash'])) {
    $sql_arr2=mysqli_query($sql_conn1, "SELECT validate, department FROM auth WHERE uid='$uid'");
    $res_arr1=mysqli_fetch_assoc($sql_arr2);
    $dept=$res_arr1["department"];
    $vstr=$res_arr1["validate"];
    # CLOSING ALREADY EXISTING SESSION - START
    if(isset($_COOKIE['PHPSESSID']))
      unset($_COOKIE['PHPSESSID']);
    if(isset($_COOKIE['sid_hash']))
      unset($_COOKIE['sid_hash']);
    # CLOSING ALREADY EXISTING SESSION - END
    if($vstr=="N") {
      echo "<p class='w3-xlarge' style='text-align: center;'>Your account has not yet validated.</p>
      <p class='w3-xlarge' style='text-align: center;'>Please Contact HM/HOD/Administrator/Data Base Administrator.</p>";
      # <!--FOOTER - START-->
      include('footer.php');
      # <!--FOOTER - END-->
      exit();
    }
    echo "<p class='w3-xlarge' style='text-align: center;'>Successfully Authenticated. Please wait while we redirect you to portal .....</p>
    <div style='text-align: center;'><i class='material-icons w3-spin w3-jumbo'>refresh</i></div>";
    session_start();
    $_SESSION["uid"] = $uid;
    $_SESSION["dept"] = $dept;

    $ssid=session_id();
    $ssid_hash=password_hash($ssid, PASSWORD_DEFAULT);
    setcookie("sid_hash", $ssid_hash, time() + (1800), "/");
    setcookie("ckname", "sid_hash", time() + (1800), "/");
    setcookie("dept", $dept, time() + (1800), "/");
    $url='http://jssv.gq/digi-attend/index.php';
    echo "<meta http-equiv='refresh' content='9;URL=".$url."' />";
  } else {
    echo "<p class='w3-xlarge' style='text-align: center;'>Invalid Username/Password. If have forgotten your password, please reset it in Login/Register page.</p>";
    echo "<p class='w3-large' style='text-align: center;'>Please Wait while we redirect you to Login Page .....</p>";
  }
   ?>
   <!--PHP CODE - END-->

</div>

<footer class="w3-container w3-teal">
  <p style="text-align:center">&copy; 2016 JSSV under Attribution Assurance License. All rights reserved</p>
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
