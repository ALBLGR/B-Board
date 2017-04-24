<?php
$con = new mysqli("localhost:3306", "iDatabaseUser", "MLGB23", "db2") or die ("errConn");
$validUser;
	// $sql = "select * from acommand";
	// $result = $con -> query($sql) or die ("errQ1".$con->error.$con->errno); 
	// while ($row = $result -> fetch_row()){
	// 	print_r($row);
	// 	echo ("<br>");
	// }	
 $sql2 = "SELECT * FROM users";
$queryResult2 = $con -> query($sql2) or ("errQ3"); 
// echo $nameValue.$pwdValue;
// foreach ($queryResult2 ->fetch_array() as $row){
// echo($row['username']."   ".$row['passw;ord']);
	while ($row = $queryResult2 -> fetch_row()){
		// print_r($row);
		if($nameValue==$row[1] && $pwdValue==$row[2]){
			// echo "valid user".$row[1];
			$validUser = $nameValue;
			session_start();
			$_SESSION['name']=$nameValue or die ("Cannot create session!!!");
			break;
		}
		// echo ("<br>");
	}

	if(!isset($validUser)){
	echo('bad request!');
	}
$con->close();
?>


