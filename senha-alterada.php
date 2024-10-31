<?php
    $senha = $_POST['senha'];
    $confSenha = $_POST['confSenha'];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (($_POST['senha']) !== ($_POST['confSenha']) || ($_POST['confSenha']) == null || ($_POST['senha']) == null) {
            echo "<script>alert('As senhas não coincidem!\\nDigite as senhas novamente!');</script>";
            echo "<script>window.location.href = 'nova-senha.php';</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="S7V7N+">
    <meta property="og:description" content="Plataforma de streaming">
    <meta property="og:image" content="#">
    <title>Senha alterada</title>
    <link rel="stylesheet" type="text/css" href="css/esqueci-senha-style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.svg">
</head>
<body>
    <header class="cabecalho">
        <img src="img/logo.svg" alt="Logomarca S7V7N+" class="cabecalho__logo">
        <nav class="cabecalho__navegacao">
            <ul class="menu__desktop">
                <li>
                    <a href="#"><h3>Início</h3></a>
                </li>
                <li>
                    <a href="#"><h3>Filmes</h3></a>
                </li>
                <li>
                    <a href="#"><h3>Séries</h3></a>
                </li>
            </ul>
            <ul class="cabecalho__navegacao__lista-esquerda" id="menu">
                <li class="cabecalho__navegacao__lista-esquerda__item">
                    <a href="#" class="cabecalho__navegacao__lista-esquerda__item__ancora"><h3>Início</h3></a>
                </li>
                <li class="cabecalho__navegacao__lista-esquerda__item">
                    <a href="#" class="cabecalho__navegacao__lista-esquerda__item__ancora"><h3>Filmes</h3></a>
                </li>
                <li class="cabecalho__navegacao__lista-esquerda__item">
                    <a href="#" class="cabecalho__navegacao__lista-esquerda__item__ancora"><h3>Séries</h3></a>
                </li>
                <li class="menu__principal">
                    <a href="assinatura.php"><h3>Assinatura</h3></a>
                </li>
                <li class="menu__principal">
                    <a href="seguranca.php"><h3>Segurança</h3></a>
                </li>
                <li class="menu__principal">
                    <a href="aparelhos-conectados.php"><h3>Aparelhos Conectados</h3></a>
                </li>
                <li class="menu__principal">
                    <a href="perfis.php"><h3>Perfis</h3></a>
                </li>
                <li class="menu__principal">
                    <a href="#"><h3>Sair</h3></a>
                </li>
            </ul>
            <ul class="cabecalho__navegacao__lista-direita">
                <li class="cabecalho__navegacao__lista-direita__item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#FFF" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </li>
                <li class="cabecalho__navegacao__lista-direita__item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#FFF" class="bi bi-bell-fill" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                    </svg>
                </li>
                <li class="cabecalho__navegacao__lista-direita__item">
                    <img src="img/user.png" alt="Foto de usuário">
                </li>
                <li class="cabecalho__navegacao__lista-direita__item">
                    <svg xmlns="http://www.w3.org/2000/svg" id="btnPerfil" width="50" height="50" fill="#FFF" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" id="btnClose" width="50" height="50" fill="#FFF" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                        <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                    </svg>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <article id="senhaAlterada">
            <p class="fraseNegrito">Senha alterada com sucesso!</p>
            <p>Sua senha foi alterada com sucesso, aproveite nosso serviço.</p>
            <a href="login.php"><button class="btn">Entrar</button></a>
        </article>
    </main>

    <footer class="rodape">
        <div class="rodape__conteudo">
            <div class="rodape__logo-wrapper">
                <img src="img/logo-escuro.svg" alt="Logomarca S7V7N+" class="rodape__logo">
            </div>
            <ul class="rodape__links">
                <li><a href="#">Termos e aviso de privacidade</a></li>
                <li><a href="#">Envie-nos comentários</a></li>
                <li><a href="#">Precisa de ajuda?</a></li>
            </ul>
            <p>© 2024, Seven +, Inc. ou suas afiliadas</p>
        </div>
    </footer>
    
    <script type="text/javascript" language="JavaScript" src="js/script-menu.js"></script>
</body>
</html>