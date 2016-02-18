<html>
<?php
$message = "";
if(isset($_GET['id'])){
	$id = $_GET['id'];
	//check if id exists in database, if yes, set activated flag
	
	$message = "Dein Zugang wurde aktiviert";
}

if($message == ""){
	//no id, redirect to previous page
	header("location:javascript://history.go(-1)");
}else{
?>
<body bgcolor="black">
<h2 align="center"><font color="white"><?=$message; ?></font></h2>
<br>
<p align="center"><font color="white">Klicke <a href="./index.php">hier</a> um zur Startseite zur&uuml;ck zu kehren</font></p>
</body>
<?php } ?>
</html>