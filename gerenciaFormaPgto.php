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
    <title>Gerenciar forma de pagamento</title>
    <link rel="stylesheet" href="css/gerenciaFormaPgto-style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.svg">
</head>
<body>
    <header class="cabecalho">
        <?php include_once("headerEfooter/header.html"); ?>
    </header>

    <main>

    <div class="voltar-caixa">
                <a href="">
                <img src="img/seta-esquerda.png"/>
                </a>
                <h2> <a href="assinatura.php"> Voltar </a> </h2>
        </div>


        <div class="externo container-box">
            <div class="externo-texto">
                <h1> Gerenciar a forma de pagamento </h2>
                <h2> Controle como você paga sua assinatura </h2>
            </div>

            <div class="interno">
                <div class="item">
                    <div class="compartimento">
                        <img src="img/mastercard.png" classe="marca"/>
                    </div>
                    <div class="compartimento">
                        <h3> Tipo do Cartão </h3>
                    </div>
                    <div class="bolinhas">
                        <img src="img/circulo-preto.png"/>
                        <img src="img/circulo-preto.png"/>
                        <img src="img/circulo-preto.png"/>
                        <img src="img/circulo-preto.png"/>
                    </div>
                    <div class="compartimento">
                        <button class="atualizar"> <a href="#"> Atualizar </a> </button>
                    </div>    
                </div>
            </div>
            
            <a href="pagamento.php">
                <div class="maispagamentos"> 
                    <img src="img/mais.png" />
                    <h2> Adicionar forma de pagamento </h2>
                </div>
            </a>
        </div>

        <div class="caixa-responsividade">
            <div class="texto-responsividade">    
                <h2> Tipo do Cartão </h2>
            </div>
            
            <div class="icones-responsividade">
                <img src="img/mastercard.png" class="icone-marca"/>

                <div class="bolinhas-responsivo">
                    <img src="img/circulo-preto.png" class="icone-bolinha"/>
                    <img src="img/circulo-preto.png" class="icone-bolinha"/>
                    <img src="img/circulo-preto.png" class="icone-bolinha"/>
                    <img src="img/circulo-preto.png" class="icone-bolinha"/>
                </div>   
            </div>
            
            <div class="botoes-responsivo">
                <div class="btn"> <a href=""> Atualizar </a> </div>
                <div class="btn"> <a href=""> Adicionar </a> </div>
                <div class="btn"> <a href=""> Remover </a> </div>
            </div>
        </div>

    </main>

    <footer class="rodape">
        <?php include_once("headerEfooter/footer.html"); ?>
    </footer>
</body>
</html>