<?php
require_once('../db-conn.php');
#require_once('../authenticator.php');

echo "<!DOCTYPE html>
<html>
<title>DA Data Processing :: Digtal Attendance by JSSV</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='../../digi-attend/css/w3.css'>";

echo "<div class='w3-large'>w3-xlarge</div>";

$day=date('d');
$month=date('m_');
$year=date('y_');
$sem=$_POST["sem"];
$q_tbnm=$month.$year.$sem;

$uid_reg=$_POST["regno"];
if(date('G')<=11)
  $att_val=$_POST["mast"];
else
  $att_val=$_POST["aast"];

$sql_res1=mysqli_query($sql_conn2, "SELECT * FROM `$q_tbnm`");
$res_cnt=mysqli_num_rows($sql_res1);

if($res_cnt==0) {
  $sql_qry1="SELECT regno,department,sem FROM `$tbname2` WHERE sem='$sem' ORDER BY regno ASC";
  $sql_res2=mysqli_query($sql_conn2, $sql_qry1);
  while($list_res1=mysqli_fetch_row($sql_res2)) {
    $filler="FL";
    $sql_qry2="INSERT INTO `$q_tbnm` (regnum,dept,sems,filler) VALUES
    ('$list_res1[0]','$list_res1[1]','$list_res1[2]','$filler')";
    mysqli_query($sql_conn2, $sql_qry2);
  }
}

if($att_val=="P") {
  $sql_qry3="UPDATE `$q_tbnm` SET '$day'='P' WHERE `regnum`='$uid_reg'";
  mysqli_query($sql_conn2, $sql_qry3);
} else {
  $sql_qry3="UPDATE `$q_tbnm` SET '$day'='A' WHERE `regnum`='$uid_reg'";
  mysqli_query($sql_conn2, $sql_qry3);
}



 ?>
