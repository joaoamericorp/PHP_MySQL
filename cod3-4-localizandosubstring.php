<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 3.4 - Localizando uma substring</title>
    </head>
    <body>
        <h2>
            Localizando uma substring - método strpos()
            <hr/>
        </h2>
        <?php
            echo(strpos('Brasil Pentacampeao','a').'<br/>');
            
            echo(strpos('Brasil Pentacampeao','a',3).'<br/>');
            
            // exibindo todas as ocorrências
            $offset = 0;
            
            while(($offset = strpos('Brasil Pentacampeao','a',$offset + 1)) != 0)
            {
                echo($offset.', ');
            }
        ?>
    </body>
</html>
