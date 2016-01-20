<?php
require_once('../db-conn.php');
require_once('../authenticator.php');

echo "<!DOCTYPE html>
<html>
<title>DA Data Processing :: Digtal Attendance by JSSV</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='../../digi-attend/css/w3.css'>";

if(isset($_POST["sem"])) {
  $sem=$_POST["sem"];
  $usem=explode("-",$sem);
  $csem=date('n');
  if($csem<=11&&$csem>=6)
    $sem=$usem[0];
  else
    $sem=$usem[1];
} else {
  include('../header.php');
  echo "<p class='w3-xxxlarge' style='text-align: center;'>FATAL ERROR CONTACT DBA</p>";
  include('../footer.php');
  exit();
}

$stu_qry1="SELECT * FROM `$tbname2` WHERE sem='$sem' ORDER BY regno ASC";
$res_stu1=mysqli_query($sql_conn2,$stu_qry1);

$res_cnt=mysqli_num_rows($res_stu1);

echo "<div class='w3-xxlarge'>STUDENTS OF SEMESTER ".$sem."</div>";
echo "<table class='w3-table w3-striped w3-border'>
      <tr class='w3-red'><th>Serial No</th><th>Name</th><th>Register No</th>
      <th>Department/Semester</th><th>DOB</th><th>Sex</th><th>Email ID</th><th>Phone</th></tr>";

$i=1;

while($list_res=mysqli_fetch_assoc($res_stu1)) {
  echo "<tr><td>".$i."</td><td>".$list_res['name']."</td><td>".$list_res['regno']."</td>
  <td>".$list_res['department']." / ".$list_res['sem']."</td><td>".$list_res['dob']."</td>
  <td>".$list_res['sex']."</td><td>".$list_res['emailid']."</td><td>".$list_res['phone']."</td></tr>";
  $i++;
}
echo "<table>";


 ?>
