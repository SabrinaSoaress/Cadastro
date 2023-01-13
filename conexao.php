
<?php 

    try {
        $conexao = new PDO('mysql: host = localhost; dbname=webii', 'root', '');
    }  catch (Exception $erro) {
        try {
            $conexao = new PDO('mysql: host = localhost; dbname=funcionarios', 'root', '');
        } catch (Exception $e) {
            echo $erro -> getMessage();
            echo "<br>";
            echo $erro -> getCode();
        }

    }

?>