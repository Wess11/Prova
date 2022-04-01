<?php

$filename = "cadastros.txt";
if(!file_exists("cadastros.txt")){                      //Caso nao exista criar arquivo
    $handle = fopen("cadastros.txt", "w");              //Criar cadastro com opção de escrita
} else {
    $handle = fopen("cadastros.txt", "a");              //Criar cadastro com opção de escrita, se nao existir criar arquivo
}

fwrite($handle, $_POST['Nome']);                        //Inserir o arquivo nome
fwrite($handle, $_POST['Sobrenome']);                   //Inserir o arquivo sobrenome
fwrite($handle, $_POST['Cidade do Aluno']);             //Inserir o arquivo Cidade do Aluno
fwrite($handle, $_POST['Data de Nascimento do aluno']); //Inserir o arquivo Data de nascimento
fflush($handle);                                        //Insere os dados no arquivo
fclose($handle);                                        //Fecha o aqrquivo depois da inserção

$handle = fopen( "cadastros.txt", "r");                 //Abre o arquivo para somente leitura
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);
header("location: welcome.php");                        //Retorna para a pagina inicial(bem vindo)
    exit;

?>
