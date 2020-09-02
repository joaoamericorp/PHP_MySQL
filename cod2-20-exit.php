<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 2.20 - Comando exit</title>
    </head>
    <body>
        <h2>
            Comando exit
            <hr/>
        </h2>
        <?php
            $arquivo = '/caminho/inexistente';
            $file = fopen($arquivo,'r') or exit('Problemas ao abrir o arquivo');
        ?>
    </body>
</html>
