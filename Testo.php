<?php
$righe=file('Testo.txt');
echo "tipo dato: ".gettype($righe)."</br>";
echo "<h3> Contenuto dell' oggetto file </h3>";
foreach($righe as $k=>$v){
    echo "$k --> $v</br>";
}
?>