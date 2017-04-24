<?php
$con = new mysqli("localhost:3306", "iDatabaseUser", "MLGB23", "db2") or die ("errConn");

if(isset($_GET['textData']) && isset($_GET['para'])){
	$textData = $_GET['textData'];
	$para = $_GET['para'];
	$sql1 = "INSERT INTO acommand 
	(textData, parameter,time)
	VALUES 
	('{$textData}','{$para}',DATE_FORMAT(NOW(),'%Y-%m-%d %h:%i:%S'))";
	$con -> query($sql1) or die ("errQ2".$con->error); 
	echo "Submitted to database.<br>";
}

	$sql = "select * from acommand";
	$result = $con -> query($sql) or die ("errQ1".$con->error.$con->errno); 
	while ($row = $result -> fetch_row()){
		print_r($row);
		echo ("<br>");
	}	

 $sql2 = "SELECT * FROM ACommand";


$queryResult2 = $con -> query($sql2) or ("errQ3"); 

print_r($queryResult2 ->fetch_array());

$con->close();
?>



