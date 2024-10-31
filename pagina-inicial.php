<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="S7V7N+">
    <meta property="og:description" content="Plataforma de streaming">
    <meta property="og:image" content="#">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.svg">
    <link rel="stylesheet" href="css/style-pagina-inicial.css">
    <?php include_once ("headerEfooter/import-css.php"); ?>
    <title>Seven +</title>
</head>
<body class="corpo">
    <header class="cabecalho">
        <?php include_once("headerEfooter/header.html"); ?>
    </header>
    <main>
        <div id="caixa-corpo">
            <div id="caixa-corpo2">
                <div id="assista0">
                    Filmes, Séries e muito mais!
                </div>
                <div id="assista">
                    Assista na sua TV<br>
                    Aproveite a tela grande da TV com seus Amigos e Familia.
                </div>
                <form action="login.php">
                    <input type="submit" class="entrar" value="Já é Seven? Faça login">
                </form>
                <form action="cadastro.php">
                    <input type="submit" class="entrar1" value="Crie sua conta">
                </form>
                <div id="assista2">
                    Baixe séries para assistir Offline<br>
                    Aproveite a tela grande da TV com seus Amigos e Familia. Assista no seu carro, trem ou até Foguete.
                </div>
            </div>
        </div>
    </main>
    <footer class="rodape">
        <?php include_once("headerEfooter/footer.html"); ?>
    </footer>
</body>
</html>