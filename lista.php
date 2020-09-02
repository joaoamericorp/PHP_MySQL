
        <?php
        #Dados para a conexão com o banco de dados
        $servidor = 'localhost';
        $usuario = 'japa';
        $senha = 'japa';
        $banco = 'integracao';
        
        #Executa a conexão com o MySQL
        $link = mysqli_connect($servidor, $usuario, $senha) or die('Não foi possível conectar: '. mysqli_error($link));
        
        #Seleciona o banco de dados que deseja utilizar
        $select = mysqli_select_db($link, $banco);
        
        #Cria a expressão SQL de consulta aos registros
        $sql = "select * from livros";
        ?>
<html>
    <table border="1">
        <tr>
            <th>Cód.</th>
            <th>Livro</th>
            <th>Autor</th>
            <th>Editora</th>
        </tr>
        
        <?php
            #Exibe os resultos
            $result = mysqli_query($link, $sql);
            while($tbl = mysqli_fetch_array($result))
            {
                $Codigo = $tbl["id"];
                $Livro = $tbl["livro"];
                $Autor = $tbl["autor"];
                $Editora = $tbl["editora"];
                
                echo "<tr>";
                echo "<td>$Codigo ";
                echo "<a href=\"inserir.php?acao=editar&buscacodigo=$Codigo\">";
                echo "(Editar)</a>";
                echo "<a href=\"gerencia-registro.php?acao=excluir&buscacodigo=$Codigo\">";
                echo " (Excluir)</a>";
                echo "</td>";
                echo "<td>$Livro</td>";
                echo "<td>$Autor</td>";
                echo "<td>$Editora</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <br/><a href="inserir.php">Clique aqui para inserir um novo registro,</a>
</html>
