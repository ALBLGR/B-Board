<?php
	// $myfile = fopen("submitData.txt", "r+") or die("Unable to open file!");
	$ledStatus = $_GET['ledStat'];	
	$ultraSonic = $_GET['ultraSonic'];

	$txt = $ledStatus."\n".$ultraSonic."\n";
	$time=date("Y/m/d l h:i:s a")."\n";

    $con = file_get_contents(".\submitData.txt") or die ("Fail to read");
    $new_str = $time.$txt.$con;
    file_put_contents(".\submitData.txt",$new_str) or die ("Fail!!!");
    // fclose($myfile);


?>