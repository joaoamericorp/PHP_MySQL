<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 4.11 - Localizando valores</title>
    </head>
    <body>
        <h2>
            Localizando valores em um vetor - Comando: array_search e in_array
            <hr/>
        </h2>
        <?php
            $meuArray = array('aaa','bb',' Chave do C' => 'c','ddd');
            echo(array_search('aaa',$meuArray).'<br/>');
            echo(array_search('c',$meuArray).'<br/>');
            echo(array_search('nenhum',$meuArray));
        ?>
    </body>
</html>
