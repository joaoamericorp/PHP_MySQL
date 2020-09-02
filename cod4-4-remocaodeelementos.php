<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 4.4 - Remoção de elementos do array</title>
    </head>
    <body>
        <h2>
            Remoção de elementos - comando Unset
            <hr/>
        </h2>
        <?php
            $meuArray = array('a','b','c','d','e');
            unset($meuArray[3]);
            
            print_r($meuArray);
        ?>
    </body>
</html>
