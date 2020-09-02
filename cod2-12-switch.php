<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 2.12 - Comando Switch</title>
    </head>
    <body>
        <h2>
            Comando Switch
            <hr/>
        </h2>
        <?php
            $i = 1;
            
            switch($i)
            {
                case 0:
                    echo('O valor de i é 0');
                    break;
                case 1:
                    echo('O valor de i é 1');
                    break;
                case 2:
                    echo('O valor de i é 2');
                    break;
            }
        ?>
    </body>
</html>
