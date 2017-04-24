var xmlhttp;
var responseContent;
var strContent;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  responseContent=new XMLHttpRequest(); 
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  responseContent=new ActiveXObject("Microsoft.XMLHTTP");
	  }


  function post(str){
  	xmlhttp.open("POST", "index.php", true);
  	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  	xmlhttp.send("name=" + str);
  	strContent=str;
  }

  function get(){
  	responseContent.open("GET", "consoleDisplay.php", true);
   	responseContent.send();
  }

  xmlhttp.onreadystatechange=function()
  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("statusDisplay").style="background-color:green;color:white";
    document.getElementById("statusDisplay").innerHTML="REQUEST "+ strContent +" sent!";
    get();
    }
  }

  responseContent.onreadystatechange=function()
  {

  if (responseContent.readyState==4 && responseContent.status==200)
    {
    	
    document.getElementById("consoleDisplay").innerHTML=responseContent.responseText;;
    }
  }