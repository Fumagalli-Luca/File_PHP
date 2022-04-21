<?php
$filename="https://www.google.com";
$handle= fopen($filename,"r");
$contents= fread($handle, filesize($filename));
echo "contenuto del file: $contents</br>";
fclose($handle);
?>