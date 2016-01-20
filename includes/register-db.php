 <!DOCTYPE html>
 <html>
 <title>Registration Flow :: Digtal Attendance by JSSV</title>
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
 require_once('db-conn.php');
 error_reporting(0);

 $fname=$_POST["fname"];
 $lname=$_POST["lname"];

 $dob=$_POST["dob"];

 $femail=$_POST["email"];
 $remail=$_POST["remail"];
 if($femail==$remail)
   $email=$remail;
 $name=$fname." ".$lname;

 $sq=$_POST["sq"];
 $sa=$_POST["sa"];
 $dp=$_POST["dept"];

 $uid=$_POST["uname"];
 $pin=$_POST["pwd"];

 if(!isset($_POST["uname"]) || !isset($_POST["pwd"])) {
   echo "<p class='w3-xlarge' style='text-align: center;'>You have Visited Wrong Page. You are forbidden to visit this page.</p>
   <p class='w3-large' style='text-align: center;'>You will be redirected soon.</p>";
 }

 $pin_hash=password_hash($pin, PASSWORD_DEFAULT);
 $sa_hash=password_hash($sa, PASSWORD_DEFAULT);

 $sql_qry1="INSERT INTO `auth` (`uid`, `name`, `emailid`, `department`, `dob`, `pin_hash`, `bk_qs`, `bk_ans`, `validate`) VALUES ('$uid', '$name', '$email', '$dp', '$dob', '$pin_hash', '$sq', '$sa_hash', 'N')";
 $sql_rgst=mysqli_query($sql_conn1, $sql_qry1);

 if(!$sql_rgst) {
   if(mysqli_error($sql_conn1)=="Duplicate entry 'test1' for key 'PRIMARY'") {
     echo "<p class='w3-xlarge' style='text-align: center;'>ERROR : Username already exist. Please Retry with other Username.</p>
     <p style=\"text-align: center;\"><button class='w3-btn w3-green w3-large' onclick=window.location=\"javascript:history.go(-1)\";>
     CLICK HERE TO GO BACK TO REGISTRATION PAGE</button></p><br>";
   }
 } else {
   echo "<p class='w3-xlarge' style='text-align: center;'>You have Registered Successfully.</p>
   <p class='w3-large' style='text-align: center;'>Please Contact HM/HOD/Administrator/Data Base Administrator to activate/verify your Account.</p>";
 }

  ?>
<!--PHP CODE - END-->

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
