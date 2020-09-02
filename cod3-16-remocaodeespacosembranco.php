<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 3.16 - Remoção de espaços em branco</title>
    </head>
    <body>
        <h2>
            Remoção de espaços em branco - métodos (trim, ltrim,rtrim)
            <hr/>
        </h2>
        <?php
            echo(trim('     Brasil    penta    campeao     ').'<br/>');
            
            echo(ltrim('     Brasil    penta    campeao     ').'<br/>');
            
            echo(rtrim('     Brasil    penta    campeao     ').'<br/>');
        ?>
    </body>
</html>
