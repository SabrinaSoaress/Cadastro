<?php 
    require 'conexao.php';
    require 'modulos.php';
    session_start();

    if ($_SESSION['logado'])
    {
        try{
            $id = $_GET['id'];
            $deletar = $conexao->prepare("DELETE FROM funcionarios WHERE id = '$id';");
            $deletar->execute();
            header('location:listar-funcionarios.php');
        } catch (Exception $erro) {
            echo "<h1> NÃO FOI POSSÍVEL CONCLUIR! </h1> <br> $erro->getMessage() <br><br> <a href=listar-funcionarios.php>Voltar para listagem</a> ";
        }

    } else {
        login_necessario();
    }

?>