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
    <title>Quem está assistindo?</title>
    <link rel="stylesheet" href="css/quemEstaAssistindo-style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.svg">
</head>
<body>
    <header class="cabecalho">
        <?php include_once("headerEfooter/header.html"); ?>
    </header>
    <main>
    
    <!-- <div id="corpo">
            <div class="corpo-texto">
                <h2>Quem está assistindo?</h2>
            </div>
            <div class="corpo-itens">
                <div id="item">
                    <img src="img/SenhoraPerfil.jpg" class="item" width="200" height="200" alt="perfil1"/>
                    <h3>Perfil 1</h3>
                </div>
                <div id="item">
                    <img src="img/JovemNegro.jpg" class="item" width="200" height="200" alt="perfil2"/>
                    <h3>Perfil 2</h3>
                </div>
                <div id="item">
                    <img src="img/CriançaPintada.jpg" class="item" width="200" height="200" alt="perfil3"/>
                    <h3>Perfil 3</h3>
                </div>
                <div id="item">
                    <img src="img/sinal-de-mais.png" class="item" width="200" height="200" alt="perfilMais"/>
                    <h3>adicionar Perfil</h3>
                </div>
            </div>
    </div>
    <div class="corpo-button">      
        <button type="submit">Gerenciar perfis</button> 
    </div> -->



        <div class="externo container-box">
            <div class="externo-texto">
                <h2> Quem está assistindo? </h2>
            </div>

            <div class="interno">
                <div class="item">
                    <a href="pagina-home.php">
                        <img src="img/SenhoraPerfil.jpg" class="item" width="200" height="200" alt="perfil1"/>
                        <h3>Perfil 1</h3>
                    </a>
                </div>
                <div class="item">
                    <a href="pagina-home.php">
                        <img src="img/JovemNegro.jpg" class="item" width="200" height="200" alt="perfil2"/>
                        <h3>Perfil 2</h3>
                    </a>
                </div>
                <div class="item">
                    <a href="pagina-home.php">
                        <img src="img/CriançaPintada.jpg" class="item" width="200" height="200" alt="perfil3"/>
                        <h3>Perfil 3</h3>
                    </a>    
                </div>
                <div class="item">
                    <a href="adicionar-perfil.php">
                        <img src="img/sinal-de-mais.png" class="item" width="200" height="200" alt="perfilMais"/>
                        <h3>Adicionar perfil</h3>
                    </a>
                </div>
            </div>
            
            <div class="externo-button">
                <form action="perfis.php" method="POST">
                    <input type="submit" value="Gerenciar Perfis">
                </form>
            </div>
        </div>
     
    </main>
    <footer class="rodape">
        <?php include_once("headerEfooter/footer.html"); ?>
    </footer>
</body>
</html>