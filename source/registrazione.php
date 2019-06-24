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
    if ($tmp) { echo "Dato inserito correttamente";
                if (mail($email, "Registrazione effettuata sul sito di corso docenti", "grazie per la registrazione"))
                      echo " Messaggio inviato con successo all' email " . $email;
                    else
                      echo "Errore. Nessun messaggio inviato a ". $email;
              }
      else {echo "errore inserimento dato".mysqli_error($conn);};
  }
  else {echo "utente esiste gia', cambia username";}

mysqli_close($conn);
?>
 Ora puoi effettuare il login <a href=login.html>Qui</a>
