<?php
session_start();


?>
<!DOCTYPE html>
<html lang="it">
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
<?php
$username=$_POST["username"];
$password=$_POST["password"];

$conn=mysqli_connect("localhost","root","root","Viva");
$s="SELECT cognome,nome,password FROM utenti WHERE username='$username' AND password='$password'";



$ris=mysqli_query($conn,$s);

if (mysqli_num_rows($ris) > 0) {
    while($row = mysqli_fetch_assoc($ris)) {
        $nome=$row["nome"];
        $cognome=$row["cognome"];
        $loggato=1;
        $_SESSION["nome"]=$nome;
        $_SESSION["cognome"]=$cognome;
        $_SESSION["username"]=$username;
        $_SESSION["password"]=$password;
        $_SESSION["loggato"]=$loggato;

        header('location:cercacorso.php');

    }
} else {

$errore=mysqli_num_rows($ris);
if ($errore==0)
   { echo "Credenziali errate! <P>";
       echo "<A HREF='login.html'>Riprova login</A>";}
     else {
         $riga = mysqli_fetch_assoc($ris);

     }
};

?>
</fieldset>
</body>
</html>
