<!doctype html>
<?php 
	$nameValue="";
if(isset($_POST['name']) ){ //处理POST数据

	$nameValue=$_POST["name"];
	$pwdValue=$_POST["pin"];
	require('dbuser.php');
	// if($_POST['name']=="ABC" && $_POST['pin']=="ABC"){
	// session_start();
	// $_SESSION['name']=$_POST['name'] or die ("Cannot create session!!!");
	// }
	// else{
	// echo("bad request");	
	// }	

}

if(isset($_SESSION['name'])){     //如果有session活动，302到主页
	session_write_close();
	header("HTTP/1.1 302 Found");
	header("Location:index.php");
}
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <style type="text/css">
    	.form{
    		color: black;	
    	}
    </style>
</head>
<body>
<h2>ENO's Arduino Control Panel</h2><br>
<h3>You have to log in to continue.</h3><br>
<form class="form" method="POST" action="login.php">
Name:<input type="text" name="name" value=<?php echo $nameValue ?> ><br>
PIN:<input type="password" name="pin"><br>
<input type="submit">
</form>
<br>
Copyright © Eno Studio 2015-<?php echo date("Y")?> 

</body>
</html>
