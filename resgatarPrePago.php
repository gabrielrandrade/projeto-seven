<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="S7V7N+">
    <meta property="og:description" content="Plataforma de streaming">
    <meta property="og:image" content="#">
    <?php include_once ("headerEfooter/import-css.php"); ?>
    <title>Resgatar cartão pré-pago</title>
    <link rel="stylesheet" href="css/resgatarPrePago-style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.svg">
</head>
<body>
    <header class="cabecalho">
        <?php include_once("headerEfooter/header.html"); ?>
    </header>
    <main>
    
        <div class="form-container">
        <img src="img/seta-esquerda-branca.png" alt="voltar" width=25 height=25>
        <a href="assinatura.php">Voltar</a></p>
        <h2>Resgate seu cartão pré-pago</h2>
            <form id="" method="post" action="">
                <label>Informe seu código de 25 dígitos para resgatar.</label>
                <input type="text" name="nome" placeholder="Código">
                <button type="submit">Resgatar</button>
            </form>
        </div>
    </main>
    <footer class="rodape">
        <?php include_once("headerEfooter/footer.html"); ?>
    </footer>
</body>
</html>