<?php
$page = $_SERVER['PHP_SELF'];
$sec = "60";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="<?php echo $sec ?>;URL='<?php echo $page ?>'">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Exercício</title>
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do exercício</h2>
    </header>
    <nav class="navegacao">
        <a href="#" class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
            /**
             * para testar esse carregamento é necessário para
             * na rota get enviar os parametros via url
             * exemplo ?dir=teste&file=teste
             */
            // include($_GET['dir'] . '/' . $_GET['file'] . '.php');
            // include("{$_GET['dir']}/{$_GET['file']}.php");
            include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php")
            // echo (__DIR__);
            ?>
        </div>
    </main>
    <footer class="rodape">COD3R & ALUNOS © <?= date('Y');  ?></footer>
</body>

</html>