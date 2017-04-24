<?php
	date_default_timezone_set("Asia/Shanghai");
    $myfile = fopen("ArduinoCommand.txt", "r") or die("Unable to open file!1");
	$content = fgets($myfile);
	$content = fgets($myfile);

	include("dataLog.php");

	header("Content-Type:text/plain");
	header("Connection: keep-alive");
	header("Keep-Alive: timeout=30");
	header("Eno-Response:".date("h:i:sa").$content);
	// echo $content;
// if($_GET['ACK']=='true'){
// 	header('HTTP/1.1 202 Accepted');  
// 	echo 'Server: Reception Acknowledged.';
// 	$myfile1 = fopen("ArduinoCommand.txt", "w") or die("Unable to open file!2");
// 	fwrite($myfile1, "0");
// 	fclose($myfile1);
// }

// else if ($content != "0"){

// 	header("response:{$content}");
// 	echo $content;
// 	fclose($myfile);
	
// }
// else{
// 	header('HTTP/1.1 204 No Content');  
// 	echo ("Server: No Update.");
// 	fclose($myfile);
// }


?>
