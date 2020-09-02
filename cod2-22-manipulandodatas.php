<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 2.22 - Manipulando Datas</title>
    </head>
    <body>
        <h2>
            Manipulando Datas
            <hr/>
        </h2>
        <?php
            $data1 = date('l jS \of F h:i:s A',111222333);
            echo $data1.'<br/>';
            
            $data2 = date('l jS \of F h:i:s A', time());
            echo $data2.'<br/>';
            
            $data3 = date('H:i:s');
            echo $data3.'<br/>';
        ?>
    </body>
</html>
