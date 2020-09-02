<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 4.6 - Navegando em um array</title>
    </head>
    <body>
        <h2>
            Navegando em um array - comandos: foreach, current, key, prev, next, end e reset
            <hr/>
        </h2>
        <?php
            $meuArray = array('a','b','c','d','e','f','g');
            
            foreach($meuArray as $valor){
                echo($valor." ");
            }
            
            end($meuArray);
            prev($meuArray);
            prev($meuArray);
            prev($meuArray);
            next($meuArray);
            echo(key($meuArray));
            echo(current($meuArray));
        ?>
    </body>
</html>
