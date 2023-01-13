<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcionarios Cadastrados</title>
    <link rel="stylesheet" href="./Styles/style.css">
</head>

<body>

    <?php
        require 'modulos.php';
        require 'conexao.php';
        include 'menu.html';
        
        session_start();
        if ($_SESSION['logado'] != true) {
            login_necessario();
        }
    ?>


    <div class="container container-listagem">

        <ul>

            <?php 
                $dados = $conexao->prepare("SELECT * FROM funcionarios");
                $dados->execute();
                $funcionarios = $dados->fetchAll(PDO::FETCH_OBJ);
                foreach ($funcionarios as $funcionario) {
                    echo "
                    <li>
                        <div class='dados'>
                            <a href='atualizar-funcionario.php?id=$funcionario->id&nome=$funcionario->nome&endereco=$funcionario->endereco&telefone=$funcionario->telefone&usuario=$funcionario->usuario'>
                                <span class='titulo-item-listagem'>
                                    $funcionario->nome
                                </span> <br>
                                <div class='descricao-item-listagem'>
                                    <ul>
                                        <li>Telefone: $funcionario->telefone</li>
                                        <li>Endereço: $funcionario->endereco</li>
                                        <li>Usuário: $funcionario->usuario</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class='icone-lista'>
                            <a href='excluir.php?id=$funcionario->id' onclick=\"return confirm('Tem certeza que deseja excluir $funcionario->nome?'); return false;\">
                                <img src='./assets/lixeira.png' alt='Excluir'>
                            </a>
                        </div>
                    </li>";
                }
            ?>

        </ul>

    </div>


</body>
<?php 
        include 'footer.html';
    ?>

</html>