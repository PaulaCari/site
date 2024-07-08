<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="escrevo uma descrição do site que estou fazendo">
    <meta name="keywords" content="postos chaves do site HTML, CSS, JavaScript">
    <meta name="author" content="Paula">

    <link rel="shortcut icon" href="./imagens/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/variaveis.css">

    <title>Mercado Preso Brasil</title>
</head>

<body>

    <header>
        <div class="logo">
            <img src="./imagens/logo.png" alt="logo Tipo Mercado Preso" title="Logo tipo Mercado Preso">
        </div>

        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="celular.html">CELULARES</a></li>
                <li><a href="roupa.html">ROUPAS</a></li>
                <li><a href="tenis.html">TÊNIS</a></li>
                <li><a href="cadastro.php">CADASTRAR</a></li>
                <li><a href="entrar.php">ENTRAR</a></li>
                <li><a href="contato.php">CONTATO</a></li>
            </ul>
        </nav>
    </header>

    <!-- Formulario entrar -->
    <div class="login">

        <div class="logar">
            <h1>LOGIN</h1>

            <form action="#" method="post">
                <input type="email" id="email_usuario" placeholder="Digite seu e-mail">
                <br>

                <input type="password" id="senha _usuario" placeholder="Digite sua senha">
                <br>

                <input type="button" id="btn_logar" value="ENTRAR">
        </form> 
        </div>

        <div class="logar" id="logar1">
            <h3 id="id_hoje">TÊNIS PUMA</h3>
            <P id="p_hoje"> R$ 235,99</P>
            <img src="./imagens/tenis_puma" alt="Tênis Puma" title="Tênis Puma">
            <a href="#">COMPRAR</a>
        </div>
   </div>

    <footer>
        <div class="rodape">
            <ul>
                <li>
                    <a href="index.html">HOME</a>
                </li>
                <li>
                    <a href="roupas.html">ROUPAS</a>
                </li>
                <li>
                    <a href="tenis.html">TÊNIS</a>
                </li>
                <li>
                    <a href="contato.html">CONTATO</a>
                </li>

                <li>
                    <a href="cadastro.php">CADASTRO</a>
                </li>
                <li>
                    <a href="entrar.php">ENTRAR</a>
                </li>
            </ul>
        </div>

        <div class="rodape">
            <p>Rua da libertade no. 22 -bairro livre</p>
            <p>Diadema -SP - 09870-189</p>
        </div>

        <div class="rodape">
            <p>Siga a nossas redes sociais</p>
            <a href="#"><img src="./imagens/facebook.png" alt="facebook" title="facebook Mercado Preso"></a>
            <a href="#"><img src="./imagens/instagram.png" alt="instagram" title="instagram Mercado Preso"></a>
            <a href="#"><img src="./imagens/youtube.png" alt="youtube" title="You tube Mercado Preso"></a>
        </div>
    </footer>
    
    <!-- para fazer a animação do banner -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./js/cycle.js"></script>

</body>
</html>