<?php
    include_once 'dados_login.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Login com Session</title>
    </head>
    <body>
        <?php
        include_once 'menu.php';
        ?>
        <?php
        // put your code here
        if(!$_SESSION['logged']){
            include_once 'form_login.php';
        } else{
            include_once 'conteudo_restrito.php';
        }
        ?>
    </body>
</html>
