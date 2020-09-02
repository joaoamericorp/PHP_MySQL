<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 2.25 - Include</title>
    </head>
    <body>
        <h2>
            Include
            <hr/>
        </h2>
        <?php
            $meuValor = 'Brasil';
            echo($meuValor.'<br/>');
            
            include 'codigo_fonte_02_24.php';
            
            echo($meuValor.'<br/>');
        ?>
    </body>
</html>
