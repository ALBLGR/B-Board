<html>
<body>

Welcome. Your command is <br>
 <?php echo $_POST["name"]; ?><br>

<?php
$myfile = fopen("ArduinoCommand.txt", "w") or die("Unable to open file!");
$txt = $_POST["name"];
fwrite($myfile, $txt);
fclose($myfile);
header('HTTP/1.1 302 Found');
header('Location:index.php');
?>

</body>
</html>