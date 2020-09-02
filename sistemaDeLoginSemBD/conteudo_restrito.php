<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $logged = $_SESSION['logged'] ?? NULL;
        
        if(!$logged) die('Você não está logado');
        ?>
        
        <p>Conteúdo restrito.</p>
        <p>
            <?php
                // Criando uma resposta em PHP
                echo "Olá ".$_SESSION['usuario']."!";
            ?>
        </p>
        
        <p>
            <?php
            // Outra forma de concatenar
                echo "Olá {$_SESSION['usuario']}!";
            ?>
        </p>
    </body>
</html>
