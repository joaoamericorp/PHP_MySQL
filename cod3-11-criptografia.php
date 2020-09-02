<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codigo-fonte 3.11 - Criptografia de strings</title>
    </head>
    <body>
        <h2>
            Criptografia de strings
            <hr/>
        </h2>
        <?php
            $senhaCadastrada = 'minhaSenhaSeguraDeInternet';
            
            // método crypt
            echo(crypt($senhaCadastrada).'<br/>');
            
            // método sha1
            echo(sha1($senhaCadastrada).'<br/>');
            
            // método md5
            echo(md5($senhaCadastrada).'<br/>');
            
            // valor que deve ser armazenado no banco de dados
            $valorArmazenadoNoBanco = md5($senhaCadastrada);
            
            // autenticando o usuário
            $senhaInformadaNoLogin = 'minhaSenhaSeguraDeInternet';
            if(md5($senhaInformadaNoLogin) == $valorArmazenadoNoBanco)
            {
                echo('Sucesso!');
            }
        ?>
    </body>
</html>
