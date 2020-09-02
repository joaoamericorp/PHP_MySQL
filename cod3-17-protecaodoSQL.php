<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 3.17 - Proteção do SQL</title>
    </head>
    <body>
        <h2>
            Proteção do SQL
            <hr/>
        </h2>
        <?php
            echo(addslashes('teste').'<br/>');
            echo(addslashes('tes\'te').'<br/>');
            echo(addslashes('tes\"te').'<br/>');
            
            echo(stripslashes('teste').'<br/>');
            echo(stripslashes('tes\'te').'<br/>');
            echo(stripslashes('tes\"te').'<br/>');
        ?>
    </body>
</html>
