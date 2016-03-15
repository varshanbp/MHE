<?php
require_once('../db-conn.php');
require_once('../authenticator.php');

date_default_timezone_set('Asia/Calcutta');

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

$day=date('d');
$month=date('m_');
$year=date('y_');
$q_tbnm=$month.$year.$sem;

$stu_qry1="SELECT * FROM `$tbname2` WHERE sem='$sem' ORDER BY regno ASC";
$res_stu1=mysqli_query($sql_conn2,$stu_qry1);

$res_cnt=mysqli_num_rows($res_stu1);

if($res_cnt==0) {
  echo "<div class='w3-xlarge'>NO STUDENTS/STUDENTS DATA FOUND ON DATABASE. CONTACT DBA/HOD.</div>";
  endOfPage();
}


# LIST ONLY TODAY ATTENDANCE - START

if(isset($_POST["td-param"])=="1"){
  echo "<div class='w3-xxlarge'>STUDENTS OF SEMESTER ".$sem."</div>";
  echo "<table class='w3-table w3-striped w3-border'>
        <tr class='w3-red'><th>Sl No.</th><th>Name</th><th>Register No</th>";
  echo "<th>".date('d F Y')."</th>";

  $i=1;

  while($list_res1=mysqli_fetch_row($res_stu1)) {
    echo "<tr><td>".$i."</td><td>".$list_res1[0]."</td><td>".$list_res1[1]."</td>";
    $stu_qry3="SELECT `".date('d')."` FROM `$q_tbnm` WHERE regnum='$list_res1[1]'";
    $res_stu3=mysqli_query($sql_conn2,$stu_qry3);
    $list_res3=mysqli_fetch_row($res_stu3);

    echo "<td>".$list_res3[0]."</td>";

    echo "</tr>";$i++;
  }
  echo "</table><div style='text-align:center;' class='w3-xxxlarge'>--------------- END OF LIST ---------------</div>";

# LIST ONLY TODAY ATTENDANCE - END

} else {

  # CODE FOR FULL ATTENDANCE - START

  echo "<div class='w3-xxlarge'>STUDENTS OF SEMESTER ".$sem."</div>";
  echo "<table class='w3-table w3-striped w3-border'>
        <tr class='w3-red'><th>Sl No.</th><th>Name</th><th>Register No</th>";

        for($i=1;$i<=31;$i++) {
          echo "<th>$i</th>";
        }
        echo "</tr>";

  $i=1;

  while($list_res1=mysqli_fetch_row($res_stu1)) {
    echo "<tr><td>".$i."</td><td>".$list_res1[0]."</td><td>".$list_res1[1]."</td>";
    $stu_qry2="SELECT * FROM `$q_tbnm` WHERE regnum='$list_res1[1]'";
    $res_stu2=mysqli_query($sql_conn2,$stu_qry2);
    $list_res2=mysqli_fetch_assoc($res_stu2);
    for($j=1;$j<=31;$j++) {
      if($j<=9)
        $j="0".$j;
      echo "<td>".$list_res2[$j]."</td>";
    }
    echo "</tr>";$i++;
  }
  echo "</table><div style='text-align:center;' class='w3-xxxlarge'>--------------- END OF LIST ---------------</div>";
  # CODE FOR FULL ATTENDANCE - END
}

function endOfPage() {
  exit();
}

 ?>
