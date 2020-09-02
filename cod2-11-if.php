<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 2.11 - Comando IF</title>
    </head>
    <body>
        <h2>
            Comando IF
            <hr/>
        </h2>
        <?php
            if(3 > 5){
                echo('Não entra no primeiro if.');
                echo '<br/>';
            }
            
            if(1 < 10){
                echo('Entra no segundo if.');
                echo '<br/>';
            }else{ 
                echo('Não entra no else do segundo if.');
                echo '<br/>';
            }
            
            $i = 5;
            if($i == 3)
            {
                echo('O valor de i é 3');
                echo '<br/>';
            }
            else if($i == 4)
            {
                echo('O valor ed i é 4');
                echo '<br/>';
            } else{
                echo('O valor de i não é 3 nem 4');
                echo '<br/>';
            }
        ?>
    </body>
</html>
