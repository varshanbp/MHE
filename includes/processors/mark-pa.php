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

echo "<div class='w3-xxlarge'>STUDENTS OF SEMESTER ".$sem."</div>
<iframe class='w3-container w3-border' name='if2' style='width:100%;height:100%;'></iframe>";
echo "<table class='w3-table w3-striped w3-bordered w3-card-4'>
      <tr class='w3-red'><th>Serial No</th><th>Name</th><th>Register No</th>";
if(date('G')<=11)
  echo "<th colspan='2'>Morning Attendance</th>";
else
  echo "<th colspan='2'>Afternoon Attendance</th>";
echo "<th>Submit/Cancel</th></tr>";

$i=1;
echo "<form action='att-pdb.php' method='POST' target='if2'>";

while($list_res=mysqli_fetch_assoc($res_stu1)) {
  echo "<tr><td>".$i."</td><td>".$list_res['name']."</td><td><input type='text' value=".$list_res['regno']."
   name='regno' style='border:0;' readonly></td>";
  echo "<input type='text' value=".$sem." name='sem' hidden readonly>";

  if(date('G')<=11) {
    echo "<td><input class='w3-radio' type='radio' name='mast' value='P' >
    <label class='w3-validate'>PRESENT</label></td>
    <td><input class='w3-radio' type='radio' name='mast' value='A' >
    <label class='w3-validate'>ABSENT</label></td>";
  } else {
    echo "<td><input class='w3-radio' type='radio' name='aast' value='P' >
    <label class='w3-validate'>PRESENT</label></td>
    <td><input class='w3-radio' type='radio' name='aast' value='A' >
    <label class='w3-validate'>ABSENT</label></td>";
  }

  echo "<td><input class='w3-btn w3-light-green' type='submit' />
  <input class='w3-btn w3-red' type='reset' /></td></tr>";

  $i++;
}
echo "<table><br></form>";


 ?>
