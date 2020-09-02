<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 4.3 - Arrays Multidimensionais</title>
    </head>
    <body>
        <h2>
            Arrays multidimensionais
            <hr/>
        </h2>
        <?php
            $arrayAlpha = array('a','b','c');
            $arrayBeta = array('d','e','f');
            $arrayMulti = array($arrayAlpha, $arrayBeta);
            
            echo($arrayMulti[0][2].'>br/>');
            echo($arrayMulti[1][2].'<br/>');
        ?>
    </body>
</html>
