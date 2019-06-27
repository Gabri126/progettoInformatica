<?php
session_start();
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
<br>
<fieldset class="logpad">

<?php
$materia=$_POST["materia"];
$docente1=$_POST["docente1"];
$docente2=$_POST["docente2"];
$nomecorso=$_POST["nomecorso"];
$crediti=$_POST["crediti"];
$descrizione=$_POST["descrizione"];

$conn=mysqli_connect("localhost","root","root","Viva");
if(!$conn){echo"connessione fallita";};

$ins="INSERT INTO corsi(materia, docente1, docente2, nomecorso, crediti, descrizione)
 VALUES ('$materia','$docente1','$docente2','$nomecorso',$crediti,'$descrizione')";
$risultato=mysqli_query($conn,$ins);

if($risultato){echo"Inserimento avvenuto con successo ritorna alle funzioni dell'amministratore <a href='funzioniamm.php'>Qui</a>";}
else {echo"Inserimento fallito <br>  ritorna alle funzioni dell'amministratore <a href='funzioniamm.php'>Qui</a>".mysqli_error($conn);};
?>
</fieldset>
</body>
</html>