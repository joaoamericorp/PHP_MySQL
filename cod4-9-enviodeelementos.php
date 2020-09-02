<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 4.9 - Envio de elementos para função</title>
    </head>
    <body>
        <h2>
            Envio de elementos para função - Comando: array_map
            <hr/>
        </h2>
        <?php
            function calculaDobro($numero){
                return $numero * 2;
            }
            
            $meuArray = array(1,2,3);
            $arrayAlterado = array_map('calculaDobro',$meuArray);
            
            print_r($arrayAlterado);
        ?>
    </body>
</html>
