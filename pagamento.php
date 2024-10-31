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
    <link rel="stylesheet" href="css/pagamento-style.css">
    <?php include_once ("headerEfooter/import-css.php"); ?>
    <title>Dados de Pagamento</title>
</head> 
<body>
    <header class="cabecalho">
        <?php include_once("headerEfooter/header.html"); ?>
    </header>
    <main>
        <div class="form-opacidade"></div>
        <div class="form-container">
            <form id="pagamento_form" method="post" action="login.php" onsubmit="return validarForm()">
                <h2><strong>Dados de Pagamento</strong></h2>
                <label>Nome no Cartão</label>
                <input type="text" name="nome_cartao" required>
                <label>Número do Cartão</label>
                <input type="text" name="numero_cartao" id="numero_cartao" placeholder="0000 0000 0000 0000" maxlength="19" required>
                <label>Código de Validação</label>
                <input type="text" name="codigo_validacao" required>
                <label>Vencimento</label>
                <input type="text" name="vencimento" id="vencimento" placeholder="MM/AA" maxlength="5" required>
                <label>CPF</label>
                <input type="text" name="cpf" id="cpf" required>
                <button type="submit">Próxima Etapa</button>
            </form>
        </div>
    </main>
    <footer class=rodape>
        <?php include_once("headerEfooter/footer.html"); ?>
    </footer>

    <script type="text/JavaScript" language="JavaScript" src="js/valida-page-pagamento.js"></script>
</body>
</html>