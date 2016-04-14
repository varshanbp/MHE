<?php
require_once('../db-data.php');
require_once('../db-conn.php');

date_default_timezone_set('Asia/Calcutta');

$csem=date('n');
$year=date('y');

$osem_mon=array("1"=>"06","2"=>"07","3"=>"08","4"=>"09","5"=>"10","6"=>"11");
$esem_mon=array("1"=>"12","2"=>"01","3"=>"02","4"=>"03","5"=>"04","6"=>"05");

if($csem<=11&&$csem>=6) {
  $sem=array("1"=>"1","2"=>"3","3"=>"5");
  for($i=1;$i<=3;$i++) {
    for($j=1;$j<=6;$j++) {

      $tbname3=$osem_mon[$j].date('_y_').$sem[$i];

      $sql_qry1="CREATE TABLE IF NOT EXISTS `$tbname3` ( `regnum` VARCHAR(10) NOT NULL ,
        `dept` CHAR(2) NOT NULL , `sems` INT(1) NOT NULL , filler CHAR(2),
        `01` CHAR(2), `02` CHAR(2), `03` CHAR(2), `04` CHAR(2), `05` CHAR(2), `06` CHAR(2), `07` CHAR(2),
        `08` CHAR(2), `09` CHAR(2), `10` CHAR(2), `11` CHAR(1), `12` CHAR(2), `13` CHAR(2), `14` CHAR(2),
        `15` CHAR(2), `16` CHAR(2), `17` CHAR(2), `18` CHAR(1), `19` CHAR(2), `20` CHAR(2), `21` CHAR(2),
        `22` CHAR(2), `23` CHAR(2), `24` CHAR(2), `25` CHAR(1), `26` CHAR(2), `27` CHAR(2), `28` CHAR(2),
        `29` CHAR(2), `30` CHAR(2), `31` CHAR(2), PRIMARY KEY (`regnum`(10)),
        FOREIGN KEY (regnum) REFERENCES stulist(regno) ON UPDATE CASCADE, FOREIGN KEY (dept) REFERENCES stulist(department) ON UPDATE CASCADE,
        FOREIGN KEY (sems) REFERENCES stulist(sem) ON UPDATE CASCADE) ENGINE = InnoDB;";

      $sql_res=mysqli_query($sql_conn2, $sql_qry1);
      if (!$sql_res) {
          die("Unable to Create DB : " .$i. mysqli_error($sql_conn2)."<br>");
      }
      else {
          echo "Successfully Created Database ".$i."<br>";
      }
    }
  }
} else {
  $sem=array("1"=>"2","2"=>"4","3"=>"6");
  for($i=1;$i<=3;$i++) {
    for($j=1;$j<=6;$j++) {

      if($esem_mon[$j]==12) {
        if($csem==12)
          $tbname3=$esem_mon[$j].date('_y_').$sem[$i];
        else {
          $ryear=$year-1;
          $tbname3=$esem_mon[$j]."_".$ryear."_".$sem[$i];
        }
      } else
        $tbname3=$esem_mon[$j].date('_y_').$sem[$i];

      $sql_qry1="CREATE TABLE IF NOT EXISTS `$tbname3` ( `regnum` VARCHAR(10) NOT NULL ,
        `dept` CHAR(2) NOT NULL , `sems` INT(1) NOT NULL , filler CHAR(2),
        `01` CHAR(2), `02` CHAR(2), `03` CHAR(2), `04` CHAR(2), `05` CHAR(2), `06` CHAR(2), `07` CHAR(2),
        `08` CHAR(2), `09` CHAR(2), `10` CHAR(2), `11` CHAR(2), `12` CHAR(2), `13` CHAR(2), `14` CHAR(2),
        `15` CHAR(2), `16` CHAR(2), `17` CHAR(2), `18` CHAR(2), `19` CHAR(2), `20` CHAR(2), `21` CHAR(2),
        `22` CHAR(2), `23` CHAR(2), `24` CHAR(2), `25` CHAR(2), `26` CHAR(2), `27` CHAR(2), `28` CHAR(2),
        `29` CHAR(2), `30` CHAR(2), `31` CHAR(2), PRIMARY KEY (`regnum`(10)),
        FOREIGN KEY (regnum) REFERENCES stulist(regno) ON UPDATE CASCADE, FOREIGN KEY (dept) REFERENCES stulist(department) ON UPDATE CASCADE,
        FOREIGN KEY (sems) REFERENCES stulist(sem) ON UPDATE CASCADE) ENGINE = InnoDB;";

      $sql_res=mysqli_query($sql_conn2, $sql_qry1);

      if (!$sql_res) {
          die("Unable to Create DB : " .$i. mysqli_error($sql_conn2)."<br>");
      }
      else {
          echo "Successfully Created Database ".$i.".".$j."<br>";
      }
    }
  }
}

?>
