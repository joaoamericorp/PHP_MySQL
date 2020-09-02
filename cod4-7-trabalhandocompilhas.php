<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 4.7 - Trabalhando com pilhas</title>
    </head>
    <body>
        <h2>
            Trabalhando com pilhas - Comandos: array_push e array_pop
            <hr/>
        </h2>
        <?php
            $minhaPilha = array();
            array_push($minhaPilha,'a');
            array_push($minhaPilha,'b');
            echo(array_push($minhaPilha,'c').'<br/>');
            
            echo(array_pop($minhaPilha).'<br/>');
            print_r($minhaPilha);
        ?>
    </body>
</html>
