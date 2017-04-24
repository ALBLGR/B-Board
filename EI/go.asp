
<body>
<% Sub setCookies()
Response.Cookies("userInfo")=request.form("TxtUserName")
Response.Cookies("userInfo")("name")=request.form("TxtUserName")
Response.Cookies("userInfo")("password")=request.form("TxtPassword")
Response.Cookies("userInfo").Expires=DateAdd("d","3",Date)

End Sub
%>
<div style="font-size:50">
<%
response.write("Hey Man! "+ request.form("TxtUserName"))
%>
<br>
<%
response.write(". Your password is "+request.form("TxtPassword"))
call setCookies()
%>
</div>
<p style="color:blue;font-family:Times New Roman;font-size:40">Enjoy April Fool's Day!</p>
<a href="http://202.96.165.8/ei"> Return to Real Longchuang.</a>
<p><%Response.write(Date)%></p>

<!--#include file="display.asp"-->
</body>