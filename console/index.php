<!doctype html>

<?php
require ('sessionCheck.php');
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>B-Board</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <style type="text/css">
    	
   .buttonItem{
   		position: relative;
   		border-radius: 3px;
   		border:1px solid white;
   		width: 50px;
   		height: 50px;
   		background-color: grey;
   		text-align: center;
   		font-family: Consolas;
   		padding-top: auto;
   		padding-bottom: auto;
   } 	
   .buttonItem:hover {
  		box-shadow: 0 1px 10px 1px #cccccc;
    }

    .clickButton{
    	box-shadow: 

}

    </style>
  </head>
<body>
  <header>
    <nav id="header-nav" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="..\index.html" class="pull-left visible-md visible-lg">
            <div id="logo-img"></div>
          </a>

          <div class="navbar-brand">
            <a href="index.html"><h1>B-Board</h1></a>
            <p>
              
              <span>be inspired</span>
            </p>
          </div>

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        
        <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
            <li class="visible-xs active">
              <a href="../index.html">
                <span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
            <li>
              <a href="console.html">
                <span class="glyphicon glyphicon-console"></span><br class="hidden-xs"> Eno's Arduino Console</a>
            </li>
            <li>
              <a href="about.html">
                <span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs"> About</a>
            </li>
            <li>
              <a href="#">
                <span class="glyphicon glyphicon-tasks"></span><br class="hidden-xs"> Repositories</a>
            </li>
            <li id="phone" class="hidden-xs">
              <a href="tel:413-353-2766">
                <span>413-353-2766</span></a><div>* We Deliver</div>
            </li>
          </ul><!-- #nav-list -->
        </div><!-- .collapse .navbar-collapse -->
      </div><!-- .container -->
    </nav><!-- #header-nav -->
  </header>

  <div id="call-btn" class="visible-xs">
    <a class="btn" href="tel:413-353-2766">
    <span class="glyphicon glyphicon-earphone"></span>
    413-353-2766
    </a>
  </div>
  <div id="xs-deliver" class="text-center visible-xs">* We Deliver</div>

  <div id="main-content" class="container">

    <h3>Hi, <?php echo $_SESSION['name'];?>. Enter your command here and the Arduino machine will automatically fetch it from my site.</h3>
<!-- JAVASCRIPT SECTIOn -->
<script type="text/javascript">
  function notify(){
    if(document.getElementById("forceCheck").checked==true){
      alert("Please note that due to transmission complexity, overriding prior request could result in data loss!");
    }
  }
  function logout(){
  	window.location = "logout.php";
  }



</script>
<script src="panel.js"></script>
<!-- END OF JAVASCRIPT SECTIONs -->


<?php 
require ('submitLogic.php');

?>
<div class="container" style="color: black">
<section>
<p id="log"><?php echo $str?></p>
<p id="statusDisplay"  class="prompt" style=<?php echo $style ?> ><span><?php  echo $promptText ?></span> </p>

<form action=<?php echo $_SERVER['PHP_SELF']?> method="post" style="color: black">
<div style="width: 60%" class="container-fluid">
<div class="row">
<input style="width: 100%;" type="text" name="name" placeholder="enter your request...">
</div>
<div class="row">
<!-- <input type="checkbox" id="forceCheck" name="force" value="true" onclick="notify()">Force Overriding <br> -->
<input class="clickButton col-md-4 col-xs-4 col-sm-4" type="submit">
<input class="clickButton col-md-4 col-xs-4 col-sm-4" type="button" name="Logout" value="Logout" onclick="logout()">
<input class="clickButton col-md-4 col-xs-4 col-sm-4" type="button" name="cleas" value="Clear" onclick="clearlog()">
</div>
</div>
</form>

</div>  <!--end of form container-->

<div class="container-fluid">
<div class="row">
<div class="col-xs-12 col-lg-4 col-md-4 col-sm-6" >
<div style="width: 300px;height: 300px;border: 2px white solid;border-radius: 10px;padding: 10px; margin-left: auto;margin-right: auto;">    
<section class="buttonItem" onclick="post('forward')" style=" margin-left: auto;margin-right: auto; ">FORE<br>WARD</section>
<section class="buttonItem" onclick="post('back')" style="margin-left: auto;margin-right: auto; top: 170px;">BACK</section>   
<section class="buttonItem" onclick="post('left')" style="top: 5px;">LEFT</section>      
<section class="buttonItem" onclick="post('right')" style="top: -45px; left:220px;">RIGHT</section>     
<section class="buttonItem" onclick="post('stop')" style="; top: -95px; margin-left: auto;margin-right: auto;background-color: maroon">STOP</section>    
<section class="buttonItem" onclick="post('LED_ON')" style="; top: -45px; margin-left: auto;background-color: green">LED ON</section>  
<section class="buttonItem" onclick="post('LED_OFF')" style="; top: -95px;margin-right: auto;background-color: red">LED OFF</section>  
</div>
 
 </div> <!--col1-->
<div class="col-xs-12 col-lg-8 col-md-8 col-sm-6 " >
<div id="consoleDisplay" style="background-color: black;color: white; border-radius: 10px; border: 2px solid white; box-sizing: border-box;padding: 10px;width:100%;height:300px;font-family:Consolas, serif;overflow: auto;">
<?php
require("consoleDisplay.php");
?>
  
</div><!--end of console display-->
</div><!--end of col2-->
</div><!--end of row-->


  </div><!-- End of #main-content -->

  <footer class="panel-footer">
    <div class="container">
      <div class="row">
        <section id="hours" class="col-sm-4">
          <span>Business Hours:</span><br>
          Monday-Friday: 7:00am - 10:00pm<br>
          Saturday, Sunday: Closed
          <hr class="visible-xs">
        </section>
        <section id="address" class="col-sm-4">
          <span>Address:</span><br>
          18 Shenzhong St<br>
          N Renmin Rd, Shenzhen<br>

          <p>* Delivery area within 3-4 miles, with minimum order of $20 plus $3 charge for all deliveries.</p>
          <hr class="visible-xs">
        </section>
        <section id="testimonials" class="col-sm-4">
          <p>"To be or not to be, that is the question!"</p>
          <p>-- Hamlet</p>
        </section>
      </div>
      <div class="text-center">&copy; Copyright B-Board Studio <?php echo date("Y")?> </div>
    </div>
  </footer>

  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="../js/jquery-2.1.4.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>
