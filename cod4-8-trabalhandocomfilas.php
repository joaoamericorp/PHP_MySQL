<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 4.8 - Trabalhando com filas</title>
    </head>
    <body>
        <h2>
            Trabalhando com filas - Comandos: array_push e array_shift e array_unshift
            <hr/>
        </h2>
        <?php
            $minhaFila = array();
            array_push($minhaFila,'a');
            array_push($minhaFila,'b');
            echo(array_push($minhaFila,'c').'<br/>');
            
            echo(array_shift($minhaFila).'<br/>');
            echo(array_unshift($minhaFila,'d').'<br/>');
            print_r($minhaFila);
        ?>
    </body>
</html>
