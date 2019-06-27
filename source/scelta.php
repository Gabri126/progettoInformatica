<?php
session_start();
$materia=$_SESSION["materia"];
$docente=$_SESSION["docente1"];
$nomecors=$_SESSION["nomecorso"];
$crediti=$_SESSION["crediti"];
$descrizione=$_SESSION["descrizione"];
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
    <legend>Informazioni Corso</legend>
    <?php
    echo "<h2>materia</h2>";
    echo "$materia";
    echo "<h2>docente</h2>";
    echo "$docente";
    echo "<h2>nomecorso</h2>";
    echo "$nomecors";
    echo "<h2>crediti</h2>";
    echo "$crediti";
    echo "<h2>descrizione</h2>";
    echo "$descrizione";
    ?>
</fieldset>
</body>
</html>

