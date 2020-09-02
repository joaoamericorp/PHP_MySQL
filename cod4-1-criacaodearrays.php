<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 4.1 - Criação de arrays</title>
    </head>
    <body>
        <h2>
            Criação de arrays
            <hr/>
        </h2>
        <?php
            $meuArray = array('alpha' => 'valor1', 2,'tres');
            $meuArray[5] = 'Novo valor';
            
            echo($meuArray[0].'<br/>');
            echo($meuArray['alpha'].'<br/>');
            echo($meuArray[5].'<br/>');
        ?>
    </body>
</html>
