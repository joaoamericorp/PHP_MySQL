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

if($_REQUEST["acao"]=="editar")
{
    #Cria a expressão SQL de consulta ao registro a ser alterado
    $sql = "select * from livros where id = %buscacodigo";
    
    #Realiza a busca pelos dados do registro
    $result = mysqli_query($link, $sql);
    
    #Valida se o registro existe no banco de dados
    if($tbl = mysql_fetch_array($result))
    {
        #Armazena os dados para preencher no formulário a seguir
        $Codigo = $tbl["id"];
        $Livro = $tbl["livro"];
        $Autor = $tbl["autor"];
        $Editora = $tb;["editora"];
    }
    
    #Exibe mensagem de erro se não existir
    else
    {
        echo "Registro não encontrado";
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gerenciando Registros</title>
    </head>
    <body>
        <h1>
            Preencha os campos abaixo:
            <hr/>
        </h1>
        <?php
            if($_REQUEST["acao"] == "editar")
            {
                $AcaoForm = "alterar";
            }
            else
            {
                $AcaoForm = "adicionar";
            }
        ?>
        <form method="post" action="gerencia-registro.php?acao=<?php echo $AcaoForm;?>">
            <input type="hidden" name="FormCodigoLivro" value="<?php echo $Codigo;?>">
            <table>
                <tr>
                    <td>Nome do Livro: </td>
                    <td>
                        <input type="text" name="FormNomeLivro" maxlength="64" value="<?php echo $Livro;?>"/>
                    </td>
                </tr>
                
                <tr>
                    <td>Nome do Autor: </td>
                    <td>
                        <input type="text" name="FormNomeAutor" maxlength="32" value="<?php echo $Autor;?>"/>
                    </td>
                </tr>
                
                <tr>
                    <td>Nome da Editora: </td>
                    <td>
                        <input type="text" name="FormNomeEditora" maxlength="16" value="<?php echo $Editora;?>"/>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="right">
                        <input type="reset" value="Limpar"> 
                        <?php
                            if($_REQUEST["acao"] == "editar")
                            {
                                $NomeBotao = "Alterar";
                            }
                            else
                            {
                                $NomeBotao = "Cadastrar";
                            }
                        ?>
                        <input type="submit" value="<?php echo $NomeBotao;?>">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
