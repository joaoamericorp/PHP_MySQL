<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Cria uma sessão
        session_start();
        
        if(isset($_GET['logout']) && $_GET['logout'] == 1){
            $_SESSION = array();
            session_destroy();
            header('Location:/');
        }
        
        // Variável de controle de usuário lohado. Padrão FALSE
        $_SESSION['logged'] = $_SESSION['logged'] ?? false;
        
        // Dados da base de dados
        $usuario_db = 'joao';
        $senha_db = '1234';
        
        // Recuperando dados do formulário
        $p_usuario = $_POST['usuario'] ?? NULL;
        $p_senha = $_POST['senha'] ?? NULL;
        
        // Compara os dados do formulário com os dados armazenados no DB
        if($p_usuario == $usuario_db && $p_senha == $senha_db){
            // Configuração da sessão
            $_SESSION['usuario'] = $usuario_db;
            $_SESSION['senha'] = $senha_db;
            $_SESSION['logged'] = true;
        }
        ?>
    </body>
</html>
