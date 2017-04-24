<?php
session_start();
if(isset($_SESSION['name'])){

}
else{
	header("HTTP/1.1 302 Found");	
	header("Location:login.php");
}
?>