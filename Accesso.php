<?php

echo '
<form action="Accesso.php" method="get">
login <input id="login" type="text" name="lname"><br><br>
password <input id="password" type="password" name="fname"><br><br>
<input type="submit" value="SALVA">
</form>
';

$login=$_GET["lname"];
$password=$_GET["fname"];
$filename="Accesso.txt";
$f=fopen($filename,"r");

if(fgets($f)==$login && fgets($f)==$password){
    echo "login con successo";
}
else{
    echo "login fallito";
}

fclose($f);
?>