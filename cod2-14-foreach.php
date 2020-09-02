<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 2.14 - Comando Foreach</title>
    </head>
    <body>
        <h2>
            Comando Foreach
            <hr/>
        </h2>
        <?php
            $meuArray = array('a','b','c','d');
            
            foreach($meuArray as $valor)
            {
                echo($valor.' ');
            }
        ?>
    </body>
</html>
