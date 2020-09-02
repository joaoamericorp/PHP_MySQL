<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 3.5 - Localizando uma substring</title>
    </head>
    <body>
        <h2>
            Localizando uma substring - método strchr()
            <hr/>
        </h2>
        <?php
            echo(strchr('Brasil Pentacampeao','a').'<br/>');
            
            echo(strrchr('Brasil Pentacampeao','a').'<br/>');
            
            echo(strchr('Brasil Pentacampeao','y').'<br/>');
        ?>
    </body>
</html>
