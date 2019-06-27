<?php
session_start();
$cognome=$_SESSION["cognome"];
$nome=$_SESSION["nome"];
$username=$_SESSION["username"];
$password=$_SESSION["password"];
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
    <legend>Info</legend>
<?php
$materia=$_POST["materia"];
$docente=$_POST["docente"];

$_SESSION["username"]=$username;
$_SESSION["password"]=$password;

$conn=mysqli_connect("localhost","root","root","Viva");
$s="SELECT nomecorso,materia,docente1,crediti,descrizione FROM corsi WHERE materia='$materia' AND docente1='$docente' OR docente2='$docente'";
$ris=mysqli_query($conn,$s);
$n=mysqli_num_rows($ris);
$riga=mysqli_fetch_assoc($ris);


if($n>0)
{echo"";
  echo "$nome, ecco i corsi di <strong>$materia</strong> insegnati dal docente <strong>$docente</strong>";
echo"<TABLE border=1>";
echo"<FORM method='POST' action='scelta.php'>";
echo"<TR> <TH> scegli corso </TH></TR>";

foreach ($ris as $corsi) {
  $c=$corsi["nomecorso"];
  echo"<TR>";
  echo"<TD> <INPUT type='radio' name='scelta' VALUE='1'/>$c</TD>";
  echo"</TR>";
};
    $materi=$riga["materia"];
    $docent=$riga["docente1"];
    $nomecor=$riga["nomecorso"];
    $crediti=$riga["crediti"];
    $descrizione=$riga["descrizione"];

    $_SESSION["materia"]=$materi;
    $_SESSION["docente1"]=$docent;
    $_SESSION["nomecorso"]=$nomecor;
    $_SESSION["crediti"]=$crediti;
    $_SESSION["descrizione"]=$descrizione;
echo"</TABLE>";
echo"<INPUT type='submit' VALUE='maggiori informazioni'/>";
echo"</FORM>";

}
else{
  echo " mi dispiace $nome, la tua ricerca non ha prodotto alcun risultato <a href='cercacorso.php'>Riprova</a>";
};
?>
</fieldset>
</body>
</html>
