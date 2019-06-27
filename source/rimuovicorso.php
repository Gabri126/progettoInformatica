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
$materia=$_POST["materia"];
$docente=$_POST["docente"];
session_start();
$_SESSION["docente"]=$docente;
$_SESSION["materia"]=$materia;
$con=mysqli_connect("localhost","root","root","Viva");
$s="SELECT nomecorso,crediti FROM corsi WHERE materia='$materia'AND docente1='$docente'";
$ris=mysqli_query($con,$s);
$riga=mysqli_fetch_assoc($ris);
$nomecors=$riga["nomecorso"];
$_SESSION["nomecorso"]=$nomecors;
$n=mysqli_num_rows($ris);
if($n>0)
{echo "Ecco il risultato della ricerca secondo la <strong>Materia:</strong> $materia inesgnata dal/dalla <strong>Docente:</strong> $docente";
    echo "<FORM method='POST' action='rimuovicorso2.php'>";
  echo"<TABLE border=1>";
  echo"<TR> <TH> Seleziona il corso da eliminare </TH></TR></BR>";
  foreach ($ris as $nomecorso) {
    echo"<TR>";
    echo"<TD><INPUT type='radio' name='scelta' VALUE='$nomecors'/>$nomecorso[nomecorso]</TD>";
    echo"</TR>";

  };
  echo"</TABLE>";

  echo "<br><INPUT TYPE='submit' VALUE='elimina'>";
  echo "</FORM>";


}
else{
  echo"mi dispiace, la tua ricerca non ha prodotto alcun risultato <a href='rimuovicorso.html'>Riprova</a>";
};
?>
</fieldset>
</body>
</html>
