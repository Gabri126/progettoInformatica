<?php
session_start();
$cognome=$_SESSION["cognome"];
$nome=$_SESSION["nome"];
$loggato=$_SESSION["loggato"];
if($loggato!=1){
    header('location: errore.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Contatti</title>
    <meta name="keywords" content="ICT, unito, docenti, cps">
    <meta name="description" content="sito web di Gabriele Vizzuso e Carlo Alberto Valente">
    <meta name="author" content="Gabriele Vizzuso">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <img id="logo" src="immagini/logo/logo.jpg" alt="tesata" title="testata" height="96" width="300"></a>
</header>
<div class="login">
    <a href="logout.php">Logout</a>
</div>
<br>
<body>
<fieldset class="logpad">
<?php

echo "Ciao $nome $cognome, bentornato nel nostro sito <P>";
echo "Puoi effetuare una ricerca per Materia e Docente <P>";
?>
  <FORM method='POST' action='ricerca.php'>
      <p>Materia: <br><label><INPUT TYPE='text' NAME='materia' required></label></p>
    <p>Docente: <br><label><INPUT TYPE='text' NAME='docente' required></label></p>
<P><INPUT type='submit' VALUE='Cerca'>
    </FORM>
</fieldset>
</body>
</html>