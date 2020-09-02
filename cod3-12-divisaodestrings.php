<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 3.12 - Divisão de strings</title>
    </head>
    <body>
        <h2>
            Divisão de strings - método str_split
            <hr/>
        </h2>
        <?php
            $resultado = str_split("Brasil penta campeao");
            echo($resultado[1].'<br/>');
            
            $resultado = str_split("Brasil penta campeao",3);
            echo($resultado[1].'<br/>');
        ?>
    </body>
</html>
