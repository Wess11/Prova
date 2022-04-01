<?php

$filename = "cadastros.txt";
if(!file_exists("cadastros.txt")){
    $handle = fopen("cadastros.txt", "w");
} else {
    $handle = fopen("cadastros.txt", "a");
}

fwrite($handle, $_POST['Nome']);
fwrite($handle, $_POST['Sobrenome']);
fwrite($handle, $_POST['Cidade do Aluno']);
fflush($handle);
fclose($handle);

$handle = fopen( "cadastros.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);
header("location: welcome.php");
    exit;

    ?>