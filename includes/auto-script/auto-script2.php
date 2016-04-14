<?php
require_once('../db-data.php');
require_once('../db-conn.php');

date_default_timezone_set('Asia/Calcutta');

$csem=date('n');

if($csem<=11&&$csem>=6) {
  $tbname1="IA_1";
  $tbname2="IA_3";
  $tbname3="IA_5";
} else {
  $tbname1="IA_2";
  $tbname2="IA_4";
  $tbname3="IA_6";
}

  $sql_qry1="CREATE TABLE IF NOT EXISTS `$tbname1` ( `regnum` VARCHAR(10) NOT NULL ,
    `dept` CHAR(2) NOT NULL , `sems` INT(1) NOT NULL , filler CHAR(2), `ia1` INT(2),
    `ia2` INT(2),  `ia3` INT(2),  `att` INT(2),  `avg` INT(2), PRIMARY KEY (`regnum`(10)),
    FOREIGN KEY (regnum) REFERENCES stulist(regno) ON UPDATE CASCADE, FOREIGN KEY (dept) REFERENCES stulist(department) ON UPDATE CASCADE,
    FOREIGN KEY (sems) REFERENCES stulist(sem) ON UPDATE CASCADE) ENGINE = InnoDB;"

  $sql_qry2="CREATE TABLE IF NOT EXISTS `$tbname2` ( `regnum` VARCHAR(10) NOT NULL ,
    `dept` CHAR(2) NOT NULL , `sems` INT(1) NOT NULL , filler CHAR(2), `ia1` INT(2),
    `ia2` INT(2),  `ia3` INT(2),  `att` INT(2),  `avg` INT(2), PRIMARY KEY (`regnum`(10)),
    FOREIGN KEY (regnum) REFERENCES stulist(regno) ON UPDATE CASCADE, FOREIGN KEY (dept) REFERENCES stulist(department) ON UPDATE CASCADE,
    FOREIGN KEY (sems) REFERENCES stulist(sem) ON UPDATE CASCADE) ENGINE = InnoDB;"

  $sql_qry3="CREATE TABLE IF NOT EXISTS `$tbname3` ( `regnum` VARCHAR(10) NOT NULL ,
    `dept` CHAR(2) NOT NULL , `sems` INT(1) NOT NULL , filler CHAR(2), `ia1` INT(2),
    `ia2` INT(2),  `ia3` INT(2),  `att` INT(2),  `avg` INT(2), PRIMARY KEY (`regnum`(10)),
    FOREIGN KEY (regnum) REFERENCES stulist(regno) ON UPDATE CASCADE, FOREIGN KEY (dept) REFERENCES stulist(department) ON UPDATE CASCADE,
    FOREIGN KEY (sems) REFERENCES stulist(sem) ON UPDATE CASCADE) ENGINE = InnoDB;"

    $sql_res=mysqli_query($sql_conn2, $sql_qry1); function query();
    $sql_res=mysqli_query($sql_conn2, $sql_qry2); function query();
    $sql_res=mysqli_query($sql_conn2, $sql_qry3); function query();

    function query() {
      if (!$sql_res) {
          die("Unable to Create DB : ".mysqli_error($sql_conn2)."<br>");
      }
      else {
          echo "Successfully Created Database <br>";
      }
    }

?>
