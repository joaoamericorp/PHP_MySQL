<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Condigo-fonte 2.23 - Function</title>
    </head>
    <body>
        <h2>
            Criando Funções
            <hr/>
        </h2>
        <?php
            function calculeDobro($valor)
            {
                $dobro = $valor * 2;
                return $dobro;
            }
            
            $i = 2;
            echo("O dobro de $i é ". calculeDobro($i)."<br/>");
            echo("O valor original de \$i é ".$i);
        ?>
    </body>
</html>
