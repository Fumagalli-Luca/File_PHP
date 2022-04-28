<?php


if(file_exists($_GET["filename"])){
    echo"------------------";
    $stream=fopen($_GET["filename"],"r");

    while(!feof($stream)){
        echo fgets($stream);
    }
    fclose($stream);
}

else{
    echo "il file non esiste";
}

?>