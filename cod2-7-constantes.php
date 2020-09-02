<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 2.7 - Constantes</title>
    </head>
    <body>
        <h2>
            Trabalhando com constantes - Função define
            <hr/>
        </h2>
        <?php
        define("minhaConstanteA","Brasil");
        echo minhaConstanteA.'<br/>';   // Resultado: Brasil
        echo MINHACONSTANTEA.'<br/>';   // Resultado: Mensagem de erro, pois a constante MINHACONSTANTEA (em maiúsculo) não existe.
        
        define("minhaConstanteB","Brasil",TRUE);
        echo minhaConstanteB.'<br/>';   // Resultado: Brasil
        echo MINHACONSTANTEB.'<br/>';   // Resultado: Brasil
        ?>
    </body>
</html>
