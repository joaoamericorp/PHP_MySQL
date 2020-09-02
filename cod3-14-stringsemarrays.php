<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 3.14 - Transformação de strings em arrays</title>
    </head>
    <body>
        <h2>
            Transformando strings em arrays - método explode
            <hr/>
        </h2>
        <?php
            $resultado = explode(' ','Brasil penta campeao');
            echo $resultado[0].'<br/>';
            echo $resultado[1].'<br/>';
            
            $resultado = explode(' ','Brasil penta campeao',2);
            echo $resultado[0].'<br/>';
            echo $resultado[1].'<br/>';
        ?>
    </body>
</html>
