<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 2.28 - Gravando arquivos</title>
    </head>
    <body>
        <h2>
            Gravação de arquivos
            <hr/>
        </h2>
        <?php
        // escrevendo em arquivo
        $file = fopen('dados.txt','w');
        fwrite($file,'Escrevendo '.chr(10));
        fwrite($file,'no arquivo.');
        fclose($file);
        
        // lendo um arquivo linha a linha
        $arquivo = file('dados.txt');
        for($i = 0; $i < count($arquivo); $i++)
        {
            // imprime cada linha com uma quebra de linha em HTML
            echo $arquivo[$i]."<br/>";
        }
        ?>
    </body>
</html>
