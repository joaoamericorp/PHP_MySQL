<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Testando Sessões</title>
    </head>
    <body>
        <?php
        // put your code here
        session_start();
        $_SESSION['nome'] = "Logado";
        $_SESSION['usuario'] = "carlos";
        $_SESSION['conta'] = 10;
        
        echo '<a href="verificar.php">Verificar</a>';
        ?>
    </body>
</html>
