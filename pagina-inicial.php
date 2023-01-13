<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="./Styles/style.css">
</head>

<body>

    <?php 
        require 'modulos.php';
        include 'menu.html';
        session_start();
        if ($_SESSION['logado'] != true) {
            login_necessario();
        }
    ?>

    <div class="container">

        <h1>Seja bem vindo, <?php if (isset($_COOKIE['nome'])) { echo $_COOKIE['nome']; }?>!</h1>
        <p> Você é um funcionario muito importante, e por isso tem acesso as nossas listas!!</p>

    </div>

</body>
<?php 
        include 'footer.html';
    ?>

</html>