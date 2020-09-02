<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 4.5 - Obtendo o número de elementos do array</title>
    </head>
    <body>
        <h2>
            Obtendo o número de elementos - comandos count e sizeof
            <hr/>
        </h2>
        <?php
            $meuArray = array('a','b','c','d','e');
            echo (count($meuArray).'<br/>');
            
            unset($meuArray[0]);
            echo(sizeof($meuArray).'<br/>');
        ?>
    </body>
</html>
