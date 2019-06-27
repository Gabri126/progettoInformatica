<?php
session_start();
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
    <legend>Rimuovi Corso</legend>
    <?php
    $utente=$_POST["username"];


    $_SESSION["username"]=$utente;
    $con=mysqli_connect("localhost","root","root","Viva");
    $s="SELECT username,nome,cognome FROM utenti WHERE username='$utente'";
    $ris=mysqli_query($con,$s);
    $riga=mysqli_fetch_assoc($ris);


    $n=mysqli_num_rows($ris);
    if($n>0)
    {echo "Ecco il risultato della ricerca secondo l' <strong>Username:</strong> $utente ";
        echo "<FORM method='POST' action='rimuoviutente2.php'>";
        echo"<TABLE border=1>";
        echo"<TR> <TH> Seleziona l'utente e dai la conferma </TH></TR></BR>";
        foreach ($ris as $nomecorso) {
            $utente=$riga["username"];
            $nome=$riga["nome"];
            $cognome=$riga["cognome"];
            echo"<TR>";
            echo"<TD><INPUT type='radio' class='corsi' name='scelta' VALUE='$utente' checked/><strong>Username</strong>: $utente <br><strong>Nome</strong>: $nome <br><STRONG>Cognome</STRONG>: $cognome </TD>";
            echo"</TR>";

        };
        echo"</TABLE>";

        echo "<br><INPUT TYPE='submit' VALUE='elimina'>";
        echo "</FORM>";


    }
    else{
        echo"mi dispiace, la tua ricerca non ha prodotto alcun risultato <a href='rimuoviutente.html'>Riprova</a>";
    };
    ?>
</fieldset>
</body>
</html>
