<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 3.15 - Transformação de strings em arrays</title>
    </head>
    <body>
        <h2>
            Transformando strings em arrays - método implode
            <hr/>
        </h2>
        <?php
            $meuArray = array('Alpha','Beta','Gama');
            $minhaString = implode(' - ',$meuArray);
            echo($minhaString);
        ?>
    </body>
</html>
