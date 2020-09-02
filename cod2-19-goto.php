<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 2.19 - Comando goto</title>
    </head>
    <body>
        <h2>
            Comando goto
            <hr/>
        </h2>
        <?php
            echo('Código iniciado...<br/>');
            goto saindo;
            
            echo('Código executando...<br/>');
            
            saindo:
                echo('Código encerrando...<br/>');
        ?>
    </body>
</html>
