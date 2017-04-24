<?php 
$myfile = fopen("ArduinoCommand.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo htmlspecialchars(fgets($myfile)) . "<br>";
}
fclose($myfile);
?>