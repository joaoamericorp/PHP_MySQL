<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cdigo-fonte 2.5 - Variáveis</title>
    </head>
    <body>
        <h2>
            Verificando a definição das variáveis
            <hr/>
        </h2>
        <?php
            if(isset($miinhaVar))
                echo "A variável está definida (primeiro if)";
            
            $miinhaVar = "";
            
            if(isset($miinhaVar))
                echo "A variável está definida (segundo if)";
        ?>
    </body>
</html>
