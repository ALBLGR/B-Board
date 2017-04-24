<?php
date_default_timezone_set("Asia/Shanghai");
$promptText="";
$style="";
$str="";
if(isset($_POST["name"])){ 
    // $myfile = fopen("ArduinoCommand.txt", "r") or die("Unable to open file!");
  
  if(true){ 
  $myfile = fopen("ArduinoCommand.txt", "r+") or die("Unable to open file!");
  $txt = $_POST["name"]."\n";
  $time=date("Y/m/d l h:i:s a")."\n";


    $con = file_get_contents("ArduinoCommand.txt") or die ("Fail to read");
    $new_str = $time.$txt.$con;
    file_put_contents("ArduinoCommand.txt",$new_str) or die ("Fail!!!");
    fclose($myfile);


  // fwrite($myfile,$time);
  // fwrite($myfile, $txt);
  // fclose($myfile);
  $str="REQUEST {$txt} write OK!";
  $style="background-color:green;color:white";
  // if(fgets($myfile) == "0"){
  if (true){
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
 
  }
}

?>