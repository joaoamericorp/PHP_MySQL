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
        session_start();
        
        if($_SESSION['nome'] == "Logado")
        {
            echo ucfirst($_SESSION['usuario']).". Você está logado";
            echo '<br/>';
            echo $_SESSION['conta'] + 50;
        }else{
            header("Location:testandoSessoes.php");
        }
        ?>
    </body>
</html>
