<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 2.21 - Manipulando Números</title>
    </head>
    <body>
        <h2>
            Manipulando Números
            <hr/>
        </h2>
        <?php
            $meuValor = 12345.678;
            $var1 = number_format($meuValor,1);
            $var2 = number_format($meuValor,2,',','.');
            
            echo($meuValor.'<br/>');
            echo($var1.'<br/>');
            echo($var2.'<br/>');
        ?>
    </body>
</html>
