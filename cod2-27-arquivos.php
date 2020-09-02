<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 2.27 - Gravação de arquivos</title>
    </head>
    <body>
        <h2>
            Gravação de arquivos
            <hr/>
        </h2>
        <?php
            // escrevendo em arquivo
        $file = fopen('dados.txt','w');
        fwrite($file,'Escrevendo ');
        fwrite($file,'no arquivo.');
        fclose($file);
        
        // lendo um arquivo
        $filepath = "dados.txt";
        $file = fopen($filepath,'r');
        $buffer = fread($file,filesize($filepath));
        fclose($file);
        echo($buffer);
        ?>
    </body>
</html>
