<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 2.26 - Variável $_SERVER</title>
    </head>
    <body>
        <h2>
            Variável $_SERVER
            <hr/>
        </h2>
        <?php
            echo($_SERVER['SERVER_ADDR'].'<br/>');
            
            echo($_SERVER['SERVER_NAME'].'<br/>');
            
            echo($_SERVER['HTTP_ACCEPT_ENCODING'].'<BR/>');
        ?>
    </body>
</html>
