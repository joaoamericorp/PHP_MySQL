<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 2.4 - Variáveis</title>
    </head>
    <body>
        <h2>
            Inserindo valores como variáveis
            <hr/>
        </h2>
        <?php
            
            $nomeDaVar = "minhaVar";
            $$nomeDaVar = 45;
            // equivalente à: $minhaVar = 45
            
            echo("O valor de ".$nomeDaVar." é ".$$nomeDaVar."");
            // O valor de minhaVar é 45
        ?>
    </body>
</html>