<html>
<?php
$meldung = "";
if(isset($_POST["submit"])){
	$mail = $_POST["mail"];
	$pw = $_POST["pw"];
	
	if($mail == ""){
		$meldung = "Keine eMail Adresse eingegeben";
	}else{
		if($pw == ""){
			$meldung = "Kein Passwort eingegeben";
		}else{
			//Mail und Kennwort sind gesetzt. Auf Validität prüfen
			
		}
	}
}
?>
<body bgcolor="black">
<h2 align="center"><font color="white">Die Seite befindet sich im Wiederaufbau...</font></h2>

<br>
<form action="./index.php" method="POST">
<table border="0" align="center" bgcolor="darkgray">
<tr>
	<td colspan="2" align="center"><b>Login</b></td>
</tr>
<tr>
	<td>Mail:</td>
	<td><input type="text" name="mail" value="<?=$mail; ?>">
</tr>
	<td>Passwort:</td>
	<td><input type="password" name="pw"></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="submit" name="submit" value="Login"></td>
</tr>
</table>
</form>
<p align="center"><font color="red"><?=$meldung; ?></font></p>
</body>
</html>
