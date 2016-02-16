<html>
<?php
$mail = "";
$meldung = "";
if isset($_POST["submit"]){
	$mail = $_POST["mail"];
	//if (in_array("@",$mail) == false){
		//Falsches Format
	//	$meldung = "Bitte eine gültige Mail Adresse angeben";
	//}
	if ($meldung == ""){
		$p1 = $_POST["password1"];
		$p2 = $_POST["password2"];
		if ($p1 != $p2){
			$meldung == "Die Kennwörter stimmen nicht überein";
		}
	}
}
?>
<body bgcolor="black">
<h2 align="center"><font color="white">Registrieren</font></h2>
<p align="center"><font color="white">Hier kannst du ein Konto erstellen um diese Seite zu benutzen</font></p>
<br>
<form action="./register.php" method="POST">
<table border="0" align="center" bgcolor="darkgray">
<tr>
	<td>E-Mail:</td>
	<td><input type="text" name="mail" value="<?=$mail; ?>"></td>
</tr>
<tr>
	<td>Passwort:</td>
	<td><input type="password" name="password1"></td>
</tr>
<tr>
	<td>Passwort best&auml;tigen:</td>
	<td><input type="password" name="password2"></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="submit" name="submit" value="Registrieren"></td>
</tr>
</table>
</form>

</body>
</html>