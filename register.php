<html>
<?php
$mail = "";
$meldung = "";
if (isset($_POST["submit"])){
	$mail = $_POST["mail"];
	if($mail != ""){
		if (strpos($mail,"@") == false or strpos($mail,".") == false){
			//Falsches Format
			$meldung = "Bitte eine gültige Mail Adresse angeben";
		}
	}else{
		$meldung = "Keine E-Mail Adresse eingegeben";
	}
	if ($meldung == ""){
		$p1 = $_POST["password1"];
		$p2 = $_POST["password2"];
		if($p1 != ""){
			if ($p1 != $p2){
				$meldung = "Die Kennwörter stimmen nicht überein";
			}else{
				//Alles okay
				exec('python3 randid.py',$user_id);
				$meldung = "Nutzer hat die ID: " . var_dump($user_id);
				//UserID und Kennwort in der Datenbank zwischenspeichern, Aktivierungsmail senden und auf Aktivierung warten
				$url = "http://ceejay333.ddns.net/index/confirm.php?id=" . var_dump($user_id);
				$nachricht = "Hallo,\n\ndu hast Zugang zu meinem Server beantragt.\n\nUm deinen Account freizuschalten klicke bitte folgenden Link an: " . $url . "\n\nViele Grüße\nCarsten";
			}
		}else{
			$meldung = "Kein Kennwort eingegeben";
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


<p align="center"><font color="red"><?=$meldung; ?></font></p>

</body>
</html>
