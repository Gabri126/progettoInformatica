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
<br>

<fieldset class="logpad">
    <legend>Registrazione</legend>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Viva";
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$user = $_POST["username"];
$passw = $_POST["password"];
$email =$_POST["email"];


if (empty($user)) {echo "campo utente vuoto"; exit();}

$conn = mysqli_connect($servername,$username,$password,$dbname);

$s= "SELECT username FROM utenti WHERE username='$user'";
$tmp= mysqli_query($conn,$s);
$n=mysqli_num_rows($tmp);

if ($n==0)
  { $s = "INSERT INTO utenti (nome, cognome, username, password, email)
           VALUES ('$nome', '$cognome', '$user', '$passw', '$email')";
    $tmp = mysqli_query($conn,$s);
    if ($tmp) { echo "Dato inserito correttamente ";
                echo"Ora puoi effettuare il login <a href=login.html>Qui</a>";

              }
      else {echo "errore inserimento dato <a href=registrazione.html>Riprova</a>".mysqli_error($conn);};
  }
  else {echo "Username già utilizzato, cambia username <a href=registrazione.html>Riprova</a>";}

mysqli_close($conn);
?>

</fieldset>
</body>
</html>
