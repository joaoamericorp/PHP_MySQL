<?php
    #Dados para a conexão com o banco de dados
    $servidor = 'localhost';
    $usuario = 'japa';
    $senha = 'japa';
    $banco = 'integracao';
    
    #Executa a conexão com o MySQL
    $link = mysqli_connect($servidor, $usuario, $senha) or die("Não foi possível conectar: ". mysqli_error($link));
    
    #Seleciona o banco de dados que deseja utilizar
    $select = mysqli_select_db($link, $banco);
    
    #Verifica se o arquivo foi chamado a partir de um formulário
    if($_REQUEST["acao"]=="adicionar")
    {
        #Cria a expressão SQL de inserção
        $sql = "insert into livros(livro, autor, editora) values(";
        $sql .= "'FormNomeLivro', ";
        $sql .= "'FormNomeAutor', ";
        $sql .= "'FormNomeEditora'";
        $sql .= ")";
        
        #Executa a expressão SQL no servidor, e armazena o resultado
        $result = mysqli_query($link, $sql);
        
        #Verifica o sucesso da operação
        if(!$result)
        {
            die('Erro: '.mysqli_error($link));
        }
        
        #Se a operação foi realizada com sucesso, informa na tela
        else
        {
            echo 'A operação foi realizada com sucesso.';
        }
    }
    else if($_REQUEST["acao"] == "alterar")
    {
        #Cria a expressão SQL de alteração
        $sql = "update livros set ";
        $sql .= "livro = 'FormNomeLivro', ";
        $sql .= "Autor = 'FormNomeAutor', ";
        $sql .= "Editora = 'FormCodigoLivro'";
        $sql .= "where id = $FormCodigoLivro";
        
        #Executa a expressão SQL no servidor, e armazena o resultado
        $result = mysqli_query($link, $sql);
        
        #Verifica o sucesso da operação
        if(!$result)
        {
            die('Erro: '.mysql_error());
        }
        
        #Se a operação foi realizada com sucesso, informa na tela
        else
        {
            echo 'A operação foi realizada com sucesso.';
        }
} else if($_REQUEST["acao"] == "excluir")
{
    #Cria a expressão SQL de exclusão
    $sql = "delete from livros where id = $buscacodigo";
    
    #Executa a expressão SQL no servidor, e armazena o resultado
    $result = mysqli_query($link, $sql);
    
    #Verifica o sucesso da operação
    if(!$result)
    {
        die('Erro: '.mysqli_error($link));
    }
    
    #Se a operação foi realizada com sucesso, informa na tela
    else
    {
        echo "A operação foi realizada com sucesso.";
    }
}
?>
<br/><a href="inserir.php">Clique aqui para inserir um novo registro</a>
<br/><a href="lista.php">Clique aqui para visualizar os registros</a>