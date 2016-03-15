<?php
require_once('../db-data.php');
require_once('../db-conn.php');

date_default_timezone_set('Asia/Calcutta');

$sql_qry1="CREATE TABLE IF NOT EXISTS `roles` ( `regno` VARCHAR(10) NOT NULL ,
     `dept` CHAR(2) NOT NULL , `sems` INT(1) NOT NULL , `role` VARCHAR(10) ,
     `sub1` VARCHAR(7) , `sub2` VARCHAR(7) ,`sub3` VARCHAR(7) )ENGINE = InnoDB;

?>
