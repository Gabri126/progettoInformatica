<?php
session_start();
$nomecors=$_SESSION["nomecorso"];
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
 <legend>Utenti</legend>
    <?php

    $conn=mysqli_connect("localhost","root","root","Viva");
    $s="SELECT * FROM utenti";
    $ris=mysqli_query($conn,$s);
    $n=mysqli_num_rows($ris);
    $riga=mysqli_fetch_assoc($ris);

    if($n>0) {
        echo "$nome, ecco la lista completa degli utenti<br>";
        echo"<TABLE border=1>";
        echo"<TR> <TH> Lista Completa</TH></TR>";

        foreach ($ris as $user) {
            $c = $user["username"];
            $nome=$user["nome"];
            $cognome=$user["cognome"];
            echo"<TR>";
            echo"<TD><LI class='corsi'><strong>Username</strong>: $c<br><strong>Nome</strong>: $nome<br><strong>Cognome</strong>: $cognome<br></LI></TD>";
            echo"</TR>";

        }
        echo "</TABLE><br>";
        echo "Se vuoi tornare alle funzioni di <strong>amministratore</strong> clicca <a href='funzioniamm.php'>Qui</a>";

    };
    ?>

</fieldset>

</body>

</html>
