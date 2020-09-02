<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 2.10 - Operadores Lógicos</title>
    </head>
    <body>
        <h2>
            Operadores Lógicos
            <hr/>
        </h2>
        <?php
            echo(45 == 45.0); echo("<br/>");    // Resultado: 1
            echo(45 === 45.0); echo("<br/>");   // Resultado: vazio
            echo(1 < 3 && 3 < 1); echo("<br/>");         // Resultado: vazio
            echo(1 < 3 || 3 < 1); echo("<br/>");        // Resultado: 1
        ?>
    </body>
</html>
