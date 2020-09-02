<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 4.10 - Verificação de chaves</title>
    </head>
    <body>
        <h2>
            Verificação da existência de chaves - Comandos: array_key_exists e array_keys
            <hr/>
        </h2>
        <?php
            $meuArray = array('alfa' => 0, 1 => 1, 'dois' => 2);
            print_r(array_keys($meuArray));
            
            echo('<br/>'.array_key_exists('dois', $meuArray));
        ?>
    </body>
</html>
