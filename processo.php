<?php
if(!empty($_POST)){

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
}

?>

<html>

    <head>
        <title>Formulário</title>
        <link rel="stylesheet" type="text/css" href="custom.css" />

    </head>

    <body>

    <header>
            <div class="topnav" >
                <a href="index.php" >Formulário</a>
                <a href="#" class="active">Tabela</a>
                <a href="#">clientes</a>
            </div>

        </header>
        <main>
            <table>
                <tr>
                    <?php 
                        foreach ($_POST as $chave => $valor){
                    ?>
                        <th><?= ucfirst($chave) ?></th>
                    <?php
                        }
                    ?>
                </tr>
                <tr>
                    <?php
                        foreach($_POST as $valor){
                    ?>
                        <td><?= $valor ?></td>
                    <?php
                        }
                    ?>
                </tr>
            </table>
        </main>

        <footer>
            <div class="footer">
            © 2021 Meu programa php

            </div>
        </footer>


    </body>

</html>