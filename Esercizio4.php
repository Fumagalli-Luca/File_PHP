<?php


if(file_exists($_GET["filename"])){
    echo"------------------";
    $stream=fwrite($_GET["filename1"],"w");
    


    while(!feof($stream)){

        echo fgets($stream);
    }
    fclose($stream);
}

else{
echo "il file non esiste";

}

?>