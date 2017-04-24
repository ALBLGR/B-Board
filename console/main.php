<!doctype html>
<?php
require ('sessionCheck.php');
?>
<html>
<head>
<meta charset="utf-8">
<title>Eno's Arduino Control</title>
<link rel="stylesheet" href="style.css">

<style type="text/css">	
	margin:10px;
</style>

</head>
<body>
<h2>Eno's Site written by PHP! </h2>
<h3>Enter your command here and the Arduino machine will automatically fetch it from my site.</h3>
<script type="text/javascript">
	function notify(){
		if(document.getElementById("forceCheck").checked==true){
			alert("Please note that due to transmission complexity, overriding prior request could result in data loss!");
		}
	}
</script>

<?php
$stylePara="";
$promptText="";

if($_POST["name"]!=""){	
    $myfile = fopen("ArduinoCommand.txt", "r") or die("Unable to open file!1");
	
	if(fgets($myfile) == "0" || $_POST['force']=="true"){	
	$myfile = fopen("ArduinoCommand.txt", "w") or die("Unable to open file!");
	$txt = $_POST["name"];
	fwrite($myfile, $txt);
	fclose($myfile);
	$str="REQUEST {$txt} write OK!";
	echo($str);
	$style="background-color:green;color:white";
	if(fgets($myfile) == "0"){
	$promptText="SUCCESS";
	}
	else{
	$promptText="OVERRIDING";
	}

	}
	else{
	echo("Failed. - The prior request was not acknowledged by the device yet!");
	$style="background-color:red;color:white";
	$promptText="ERROR";
	fclose($myfile);
	}
}
?>

<p id="statusDisplay" class="prompt" style=<?php echo $style ?> ><?php  echo $promptText ?> </p>

<form action="index.php" method="post">
Request: <input type="text" name="name"><br>
<input type="checkbox" id="forceCheck" name="force" value="true" onclick="notify()">Force Overriding <br>
<input type="submit">
</form>
<a href="logout.php"  style="font-size: 30px">Logout</a>
<br>
Copyright © Eno Studio 2015-<?php echo date("Y")?> 

</body>
</html>