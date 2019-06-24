<?php
$login=$_POST["login"];
$pwd=$_POST["password"];
session_start();
$conn=mysqli_connect("localhost","root","root","Viva");
$s="SELECT cognome,nome,password FROM utenti WHERE username='$login'";
$ris=mysqli_query($conn,$s);
$errore=mysqli_num_rows($ris);
if ($errore==0)
    { echo "errore username non esiste, registrati al sito <P>";
      echo "<A HREF='login.html'>Riprova login</A>";}
    else {
      $riga=mysqli_fetch_assoc($ris);
      if ($pwd != $riga["password"])
          {echo "hai sbagliato la password, riprova";}#
          else {
            $cognome=$riga["cognome"];
            $nome=$riga["nome"];
            $_SESSION["cognome"]=$cognome;
            $_SESSION["nome"]=$nome;
            $_SESSION["username"]=$login;
            echo "Ciao $cognome $nome, bentornato nel nostro sito <P>";
            echo "Quale materia vuoi cercare? <P>";
            //$s="SELECT tipo FROM tipiprodotti";
            $ris=mysqli_query($conn,$s);
            $n=mysqli_num_rows($ris);
            echo "<FORM method='POST' action='scegliProdotto.php'>";
            for ($i=0; $i<$n; $i++)
            {
              $riga=mysqli_fetch_assoc($ris);
              $x=$riga["tipo"];
              echo "<INPUT type='radio' NAME='tipo' VALUE='$x'> $x <P>";
            };
            echo "<P><INPUT type='submit' VALUE='scegli'>";
            echo "</FORM>";
            echo "</HTML>";
          };
    };

?>
