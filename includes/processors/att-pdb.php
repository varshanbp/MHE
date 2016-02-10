 <?php
require_once('../db-conn.php');
require_once('../authenticator.php');

date_default_timezone_set('Asia/Calcutta');

echo "<!DOCTYPE html>
<html>
<title>DA Data Processing :: Digtal Attendance by JSSV</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='../../digi-attend/css/w3.css'>
<script src='../js/onsubmit.js'></script>";

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

echo $res_cnt."<br>";

if($res_cnt==0) {
  $sql_qry1="SELECT regno,department,sem FROM `$tbname2` WHERE sem='$sem' ORDER BY regno ASC";
  $sql_res2=mysqli_query($sql_conn2, $sql_qry1);
  while($list_res1=mysqli_fetch_row($sql_res2)) {
    $filler="FL";
    $sql_qry2="INSERT INTO `$q_tbnm` (regnum,dept,sems,filler) VALUES
    ('$list_res1[0]','$list_res1[1]','$list_res1[2]','$filler')";
    mysqli_query($sql_conn2, $sql_qry2) or die(mysqli_error($sql_conn2));
  }
}

echo $q_tbnm."<br>".$day."<br>".$uid_reg."<br>".$att_val;

$sql_qry="SELECT `$day` FROM `$q_tbnm` WHERE `regnum`='$uid_reg'";
$sql_res1=mysqli_fetch_row(mysqli_query($sql_conn2, $sql_qry));

if(strlen($sql_res1[0])==2){
  echo "ALREADY MARKED ATTENDANACE FOR ROLL NUMBER : ".$uid_reg.".
  TODAY, PLESASE SELECT EDIT OPTION <br> STATUS : ".$sql_res1[0];
} elseif($att_val=="P") {
  if(date('G')<=11)
    $sql_qry3="UPDATE `$q_tbnm` SET `$day`='P' WHERE `regnum`='$uid_reg'";
  else {
    $sql_res2=$sql_res1[0]."P";
    $sql_qry3="UPDATE `$q_tbnm` SET `$day`='$sql_res2' WHERE `regnum`='$uid_reg'";
  }
  mysqli_query($sql_conn2, $sql_qry3) or die("ERROR IN MARKING".mysqli_error($sql_conn2));
  echo "SUCCESS";
} else {
  if(date('G')<=11)
    $sql_qry3="UPDATE `$q_tbnm` SET `$day`='A' WHERE `regnum`='$uid_reg'";
  else {
    $sql_res2=$sql_res1[0]."A";
    $sql_qry3="UPDATE `$q_tbnm` SET `$day`='$sql_res2' WHERE `regnum`='$uid_reg'";
  }
  mysqli_query($sql_conn2, $sql_qry3) or die("ERROR IN MARKING".mysqli_error($sql_conn2));
  echo "SUCCESS";
}


 ?>
