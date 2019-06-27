<?php
session_start();
$nomecors=$_SESSION["nomecorso"];
$loggato=$_SESSION["loggato"];
if($loggato!=1){
    header('location: errore.html');
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8"/>
    <title>Ricerca</title>
    <meta name="keywords" content="ICT, unito, cps">
    <meta name="description" content="sito web di Gabriele Vizzuso e Carlo Alberto Valente">
    <meta name="author" content="Gabriele Vizzuso">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<header>
    <img id="logo" src="immagini/logo/logo.jpg" alt="tesata" title="testata" height="96" width="300">
</header>
<div class="login">
    <a href="logout.php">Logout</a>
</div>
<br>
<fieldset class="logpad">
<?php
$selezione=$_POST["scelta"];

$con=mysqli_connect("localhost","root","root","Viva");
$sql = "DELETE FROM corsi WHERE nomecorso='$selezione'";
$ris=mysqli_query($con,$sql);
if($ris) {echo "dato cancellato correttamente<br> ritorna alle funzioni dell'amministratore <a href='funzioniamm.php'>Qui</a>";}
else {echo "errata cancellazione dato ritorna alle funzioni dell'amministratore <a href='funzioniamm.php'>Qui</a>";};
mysqli_close($con);
?>
</fieldset>
</body>
</html>