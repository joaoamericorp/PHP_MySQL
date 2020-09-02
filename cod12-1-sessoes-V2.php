<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sessões - cod 1</title>
    </head>
    <body>
        <?php
        // put your code here
       if (isset($_REQUEST["action"])) {
            session_start();
            $_SESSION['usuario'] = $_POST['CAMPO_USUARIO'];
            echo "<a href=\"cod12-2.php\">Outro arquivo</a>";
          } else {
          ?>
        
        <form action="cod12-1-sessoes-V2.php?action=sent" method="post">
            Digite o seu nome:
            <input type="text" name="CAMPO_USUARIO">
            <input type="submit" value="Enviar">
        </form>
        
        <?php
        }
        ?>
    </body>
</html>
