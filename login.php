<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="S7V7N+">
    <meta property="og:description" content="Plataforma de streaming">
    <meta property="og:image" content="#">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.svg">
    <link rel="stylesheet" href="css/login-style.css">
    <?php include_once ("headerEfooter/import-css.php"); ?>
    <title>Login</title>
</head>
<body>
    <header class="cabecalho">
        <?php include_once("headerEfooter/header.html"); ?>
    </header>
    <main>
        <div class="form-container"></div>
        <div class = "form-opacidade">
                <form id="cadastro" method="post" action="quemEstaAssistindo.php">
                    <h2><strong>Login</strong></h2>
                    <label>E-mail</label>
                    <input type="email" name="email" required>
                    <label>Senha</label>
                    <input type="password" name="senha" required>
                    <p>Esqueceu sua senha? <a href="esqueci-senha.php"><b>Clique aqui</b></a></p>
                    <button type="submit">Entrar</button>
                </form>
    </main>
    <footer class="rodape">
        <?php include_once("headerEfooter/footer.html"); ?>
    </footer>
</body>
</html>
