<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Operadores Matemáticos</title>
    </head>
    <body>
        <h2>
            Operadores matemáticos
            <hr/>
        </h2>
        <?php
            $resultado = 5+4-3/2*1;
            echo($resultado.'<br/>');   // Resultado: 7.5
            
            $resultado = 5%4;
            $resultado++;
            echo($resultado.'<br/>');   // Resultado 2
        ?>
    </body>
</html>
