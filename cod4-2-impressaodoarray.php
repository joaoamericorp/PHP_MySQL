<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 4.2 - Impressão do Array</title>
    </head>
    <body>
        <h2>
            Imprimindo o array - comando (print_r)
            <hr/>
        </h2>
        <?php
            $meuArray = array('alpha' => 'valor1', 2,'tres');
            $meuArray[5] = 'Novo valor';
            
            print_r($meuArray);
        ?>
    </body>
</html>
