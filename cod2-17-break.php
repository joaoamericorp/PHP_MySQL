<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 2.17 - Comando Break</title>
    </head>
    <body>
        <h2>
            Comando Break
            <hr/>
        </h2>
        <?php
            for($i = 0; $i < 10; $i++)
            {
                if($i == 4)
                {
                    break;
                }
                
                echo($i.' ');
            }
        ?>
    </body>
</html>
