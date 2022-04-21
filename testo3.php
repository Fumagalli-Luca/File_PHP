<?php
$filename="Testo.txt";
$f=fopen($filename,"r");
while(!feof($f)){
    echo fgets($f)."</br>";
}
fclose($f);
?>