<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 2.30 - Redirecionamento de requisições</title>
    </head>
    <body>
        <h2>
            Redirecionamento de requisições - Comando Location
            <hr/>
        </h2>
        
        <?php
            include('dados.txt');
            header("Location:http://www.google.com.br");
        ?>
    </body>
</html>
