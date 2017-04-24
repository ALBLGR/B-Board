
<?php
$connect=new mysqli("localhost","iDatabaseUser","MLGB23","EnoQSL");
if(!$connect) {
	echo "Mysql Connect Error!";
}
	else{ 
	echo "mysql success";
	}
$connect->close();
?>