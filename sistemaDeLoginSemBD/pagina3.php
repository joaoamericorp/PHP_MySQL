<?php
   // put your code here
    include_once 'dados_login.php';
    $logged = $_SESSION['logged'] ?? NULL;
    if(!$logged) die('Você não está logado');
?>

<?php
        include_once 'menu.php';
        ?>

<p>Conteúdo restrito da página 3</p>