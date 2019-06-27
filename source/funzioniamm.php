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

<fieldset class="logpad">
<?php
echo "Ciao $cognome $nome, hai effettuato l'accesso con funzioni di amministratore <P>";
$ris=mysqli_query($conn,$s);
$n=mysqli_num_rows($ris);
echo "<P><a href='rimuovicorso.html'><INPUT type='submit' VALUE='Rimuovi un corso'></a>";
echo "<P><a href='registrazionecorso.html'><INPUT type='submit' VALUE='Aggiungi un corso'></a>";
echo "</FORM>";
echo "</HTML>";
?>
</fieldset>

</body>
</html>
