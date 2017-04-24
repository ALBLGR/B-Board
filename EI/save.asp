<%
dim fs,f
%>
<script>

</script>
<%
set fs=Server.CreateObject("Scripting.FileSystemObject")
%>
<script>

</script>
<%
on error resume next
set f=fs.OpenTextFile("c:\inetpub\wwwroot\EI\data.txt",8,false)
Response.write(Err.Description)
%>
<script>

</script>
<%
f.WriteLine(Request.form("name") & " " & Request.form("gender")) 
f.close
set f=nothing
set fs=nothing
%>

<script>
alert("Complete")

</script>



