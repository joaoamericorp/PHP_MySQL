<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 3.13 - Divisão de strings</title>
    </head>
    <body>
        <h2>
            Divisão de strings - método parse_str
            <hr/>
        </h2>
        <?php
            $str = "var1=valor1&var2=va+lor2&var3[]=valor3";
            
            parse_str($str,$output);
            
            echo $output['var1'].'<br/>';
            echo $output['var2'].'<br/>';
            echo $output['var3'][0].'<br/>';
        ?>
    </body>
</html>
