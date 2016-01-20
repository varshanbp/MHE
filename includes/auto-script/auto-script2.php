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

      $sql_qry1=" ENGINE = InnoDB;";

      mysqli_query($sql_conn2, $sql_qry1);
      if (!$sql_qry1) {
          die("Unable to Create DB : " .$i. mysqli_error($sql_conn2)."<br>");
      }
      else {
          echo "SUCCESSFULLY CREATED TO DATABASE ".$i."<br>";
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
        `dept` CHAR(2) NOT NULL , `sems` INT(1) NOT NULL , filler DATETIME,
        `01` CHAR(1), `02` CHAR(1), `03` CHAR(1), `04` CHAR(1), `05` CHAR(1), `06` CHAR(1), `07` CHAR(1),
        `08` CHAR(1), `09` CHAR(1), `10` CHAR(1), `11` CHAR(1), `12` CHAR(1), `13` CHAR(1), `14` CHAR(1),
        `15` CHAR(1), `16` CHAR(1), `17` CHAR(1), `18` CHAR(1), `19` CHAR(1), `20` CHAR(1), `21` CHAR(1),
        `22` CHAR(1), `23` CHAR(1), `24` CHAR(1), `25` CHAR(1), `26` CHAR(1), `27` CHAR(1), `28` CHAR(1),
        `29` CHAR(1), `30` CHAR(1), `31` CHAR(1), PRIMARY KEY (`regnum`(10)),
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
