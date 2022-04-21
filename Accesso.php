<?php

echo '
<form action="Accesso.php" method="get">
login <input type="text" name="lname"><br><br>
password <input type="password" name="fname"><br><br>
<input type="submit" value="SALVA">
</form>
';
$righe=file('Accesso.txt');

if($righe=="lname" && $righe=="fname"){
    echo "login con successo";
}
else{
    echo "login fallito";
}
?>