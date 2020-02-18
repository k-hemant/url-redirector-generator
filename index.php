<html>
<title>Url Redirect</title>

<center>
<fieldset style="width:100px;border-color:black;">
<P>
<font face="Arial" size="3">
<strong>
Create Redirection
</strong>
</font>
<P>
<form method="post">
<input style="height:2em;" type="url" name="url" placeholder=" Enter Link" required ><P>
<input style="height:2em;"  type="text" name="page" placeholder=" Enter Custom Page Name" required><P>
<input style="height:2em;background-color:#0055FF;color:white;border:none;border-radius:5px;"  type="submit" value="Create">
</form> 
</fieldset>

<P>

<?php
if(isset($_POST["url"])){
$url=$_POST["url"];
$page=$_POST["page"];

$fp=fopen("$page.html","a+");
fwrite($fp,"<html><title>$page</title> <meta http-equiv='Refresh' content='0; url=$url' /> </html>");
echo "<fieldset style='width:170px;border-color:black;'><font size='2' face='verdana'>Your Url :<a href='$page.html' target='_blank'>$page.html</a></font></fieldset>";
fclose($fp);
}
?>
</center>



</html>
