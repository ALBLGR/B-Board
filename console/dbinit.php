<?php
$con = new mysqli("localhost:3306", "iDatabaseUser", "MLGB23", "db2") or die ("errConn");
$sql = "create table acommand (
sequence TINYINT UNSIGNED not null auto_increment,
textData	tinytext,
parameter	tinytext,
time 		datetime,
primary key (sequence))";

$con -> query($sql1) or die ("errQ2".$con->error);
echo "Submitted to database.<br>";

$con->close();
?>
