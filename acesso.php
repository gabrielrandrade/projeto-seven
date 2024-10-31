<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="S7V7N+">
    <meta property="og:description" content="Plataforma de streaming">
    <meta property="og:image" content="#">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.svg">
    <link rel="stylesheet" href="css/style-acesso.css">
    <title>Gerenciar Acesso e Aparelhos</title>
    <?php include_once ("headerEfooter/import-css.php"); ?>
</head>

<body class="corpo">
    <header class="cabecalho">
    <?php include_once("headerEfooter/header.html"); ?>
    </header>
    
    <main>
        <section class="main__navegacao">
            <ul>
                <li>
                    <a href="aparelhos-conectados.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                        </svg>
                        <h3>Voltar</h3>
                    </a>
                </li>
            </ul>
        </section>

        <div class="container">
           
            <div class="account-box">
                <div class="device-info">
                    <p>Aparelho X</p>
                    <button class="logout-button">Sair</button>
                </div>
                <div class="profile-info">
                    <img src="img/miranha.png" alt="Ícone de Perfil" class="profile-icon">
                    <div class="last-access">
                        <p>Último acesso: 01/07/2024</p>
                    </div>
                </div>
                <div class="date-time">
                    <p>Data: 01/07/2024</p>
                    <p>Horário: 14:35</p>
                </div>
            </div>

            
            <div class="account-box">
                <div class="device-info">
                    <p>Aparelho X</p>
                    <button class="logout-button">Sair</button>
                </div>
                <div class="profile-info">
                    <img src="img/zeze.png" alt="Ícone de Perfil" class="profile-icon">
                    <div class="last-access">
                        <p>Último acesso: 02/07/2024</p>
                    </div>
                </div>
                <div class="date-time">
                    <p>Data: 02/07/2024</p>
                    <p>Horário: 16:00</p>
                </div>
            </div>

            
            <div class="account-box">
                <div class="device-info">
                    <p>Aparelho X</p>
                    <button class="logout-button">Sair</button>
                </div>
                <div class="profile-info">
                    <img src="img/woody.png" alt="Ícone de Perfil" class="profile-icon">
                    <div class="last-access">
                        <p>Último acesso: 03/07/2024</p>
                    </div>
                </div>
                <div class="date-time">
                    <p>Data: 03/07/2024</p>
                    <p>Horário: 18:25</p>
                </div>
            </div>

            
            <div class="account-box">
                <div class="device-info">
                    <p>Aparelho X</p>
                    <button class="logout-button">Sair</button>
                </div>
                <div class="profile-info">
                    <img src="img/buzz.png" alt="Ícone de Perfil" class="profile-icon">
                    <div class="last-access">
                        <p>Último acesso: 04/07/2024</p>
                    </div>
                </div>
                <div class="date-time">
                    <p>Data: 04/07/2024</p>
                    <p>Horário: 20:50</p>
                </div>
            </div>
        </div>

        <div class="footer-content">
            <button class="show-more-button">Mostrar Mais</button>
        </div>
    </main>
    
        
   

    <footer class="rodape">
        <?php include_once("headerEfooter/footer.html"); ?>
    </footer>
</body>
</html>