<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 4.12 - Ordenamento de arrays</title>
    </head>
    <body>
        <h2>
            Ordenamento de arrays - Comandos: shuffle, sort e rsort
            <hr/>
        </h2>
        <?php
            $meuArray = array('a',1,'b','c',2,'0','4');
            sort($meuArray);
            print_r($meuArray);
            
            echo('<br/>');
            rsort($meuArray);
            print_r($meuArray);
            
            echo('<br/>');
            shuffle($meuArray);
            print_r($meuArray);
        ?>
    </body>
</html>
