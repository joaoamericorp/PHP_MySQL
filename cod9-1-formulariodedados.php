<?php
if($_REQUEST["action"] == "save")
{
    $formValid = TRUE;
    
    $tamanho_nome = strlen($_POST["CAMPO_NOME"]);
    if($tamanho_nome < 5 || $tamanho_nome > 64)
    {
        echo("O campo 'Nome' deve ter entre 5 e 64 caracteres. ".$tamanho_nome);
        $formValid = FALSE;
    }
    
    $idade = (int)$_POST["CAMPO_IDADE"];
    if(is_nan($idade) || $idade < 4 || $idade > 120)
    {
        echo("O campo 'Idade' deve ser preenchido corretamente.");
        $formValid = FALSE;
    }
    
    $email = $_POST["CAMPO_EMAIL"];
    $regex = "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";
    {
        echo("O campo 'E-mail' deve ser preenchido corretamente.");
        $formValid = FALSE;
    }
    
    $sexo = $_POST["CAMPO_SEXO"];
    if($sexo != "M" && $sexo != "F")
    {
        echo("O campo 'Sexo' deve ser preenchido.");
        $formValid = FALSE;
    }
    
    $curso = $_POST["CAMPO_CURSO"];
    if($curso == "" || $curso == "Selecione...")
    {
        echo("O campo 'Curso' deve ser preenchido.");
        $formValid = FALSE;
    }
    
    $conhecimentos = $_POST["CAMPO_CONHECIMENTOS"];
    if(sizeof($conhecimentos) != 2)
    {
        echo("É necessário marcar 2 conhecimentos.");
        $formValid = FALSE;
    }
    
    if($formValid)
    {
      echo "Formulário validado om sucesso!";
      exit();
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Código-fonte 9.1 - Formulário de Dados</title>
        <script lang="JavaScript">
            function validaForm(){
                var tamanho_nome = document.forms["meuForm"].CAMPO_NOME.value.length;
                if(tamanho_nome < 5 || tamanho_nome > 64){
                    alert("O campo 'Nome' deve ter entre 5 e 64 caracteres.");
                    return FALSE;
                }
                
                var idade = document.forms["meuForm"].CAMPO_IDADE.value;
                if(isNaN(idade) || idade < 4 || idade > 120){
                    alert("O campo 'Idade' deve ser preenchido corretamente.");
                    return FALSE;
                }
                
                var email = document.forms["meuForm"].CAMPO_EMAIL.value;
                if(email.length < 5 || email.length > 128 || email.indexOf('@') == -1 || email.indexOf('.') == -1){
                    alert("O campo 'E-mail' deve ser preenchido corretamente.");
                    return FALSE;
                }
                
                var campo_sexo = document.forms["meuForm"].CAMPO_SEXO;
                var sexo = FALSE;
                for (i=0; i<campo_sexo.length; i++){
                    if (campo_sexo[i].checked == TRUE){
                        sexo = campo_sexo[i].value;
                        break;
                    }
                }
                if(sexo == FALSE){
                    alert("O campo 'Sexo' deve ser preenchido.");
                    return FALSE;
                }
                
                var opcao_curso = document.forms["meuForm"].CAMPO_CURSO.selectedIndex;
                if(opcao_curso == 0){
                    alert("O campo 'Curso' deve ser preenchido.");
                    return FALSE;
                }
                
                var conhecimentos = document.forms["meuForm"].elements['CAMPO_CONHECIMENTOS[]'];
                var conhecimentosMarcados = 0;
                for(i=0; i<conhecimentos.length; i++){
                    if(conhecimentos[i].checked == TRUE){
                        conhecimentosMarcados++
                    }
                }
                if(conheimentosMarcados != 2){
                    alert("É necessário marcar 2 conhecimentos.");
                    return FALSE;
                }
                document.forms["meuForm"].submit();
            }
        </script>
    </head>
    <body>
        <form method="post" action="?action=save" name="meuForm">
            Nome:       <input type="text" name="CAMPO_NOME" value="< echo $_POST['CAMPO_NOME]; ?>"><br/>
            Idade:      <input type="text" name="CAMPO_IDADE" value="< echo $_POST['CAMPO_IDADE]; ?>"><br/>
            E-mail:     <input type="text" name="CAMPO_EMAIL" value="< echo $_POST['CAMPO_EMAIL]; ?>"><br/>
            Sexo:       <input type="radio" name="CAMPO_SEXO" value="M" <? if($_POST['CAMPO_SEXO] == "M" ){echo "checked";} ?>> Masculino
                        <input type="radio" name="CAMPO_SEXO" value="F" <? if($_POST['CAMPO_SEXO] == "F" ){echo "checked";} ?>> Feminino<br/>
            Curso:      <select name="CAMPO-CURSO">
                            <option <? if($_POST["CAMPO_CURSO"] == "Selecione...") {echo "selected";}?>>Selecione...</option>
                            <option<? if($_POST["CAMPO_CURSO"] == "Ciência da Computação") {echo "selected";}?>>Ciência da Computação</option>
                            <option<? if($_POST["CAMPO_CURSO"] == "Bacharelado em Informática") {echo "selected";}?>>Bacharelado em Informática</option>
                            <option<? if($_POST["CAMPO_CURSO"] == "Engenharia da Computação") {echo "selected";}?>>Engenharia da Computação</option>
                        </select>
            <br/>Conhecimentos:<br/>
            <input type="checkbox" name="CAMPO_CONHECIMENTOS[]" value="Word" <? if(in_array("Word",$_POST["CAMPO_CONHECIMENTOS"]) != FALSE) {echo "checked";}?> Microsoft Word<br/>
            <input type="checkbox" name="CAMPO_CONHECIMENTOS[]" value="HTML" <? if(in_array("HTML",$_POST["CAMPO_CONHECIMENTOS"]) != FALSE) {echo "checked";}?>> HTML<br/>
            <input type="checkbox" name="CAMPO_CONHECIMENTOS[]" value="JS" <? if(in_array("JS",$_POST["CAMPO_CONHECIMENTOS"]) != FALSE) {echo "checked";}?>> JavaScript<br/>
            <input type="checkbox" name="CAMPO_CONHECIMENTOS[]" value="PHP" <? if(in_array("PHP",$_POST["CAMPO_CONHECIMENTOS"]) != FALSE) {echo "checked";}?>> PHP<br/>
            
            <br/>
            <input type="reset" value="Limpar"> 
            <input type="button" onclick="validaForm();" value="Enviar">
        </form>
    </body>
</html>
