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

    <!-- Formulario Cadastro -->
    <div class="cadastro">

        <div class="cad" id="cadastro">

            <h1>Cadastro de Clientes</h1>
            
            <form action="cadastro.php" method="post">

                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo"> <br>
                <input type="email" id="email" name="email" placeholder="Digite seu email"> <br>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha segura"> <br>

                <input type="radio" id="feminino" name="sexo" value="F" >Feminino
                <input type="radio" id="masculino" name="sexo" value="M" >Masculino 
                <input type="radio" id="outro" name="sexo" value="O" >Outro <br>

                <input type="submit" id="button" name="submit" value="CADASTRAR">
            </form>
        </div>

        <div class="cad">
            <img src="./imagens/mulher.png" alt="Mulher com sacolas" title="Mulher com sacolas">
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

    <!-- Configuração do PHP informações para o banco de dados -->
     <?php

     if(isset($_POST['Submit'])){
        include_once('conectar.php');

        // criação das variaveis
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sexo = $_POST['sexo'];

        $clientes = mysqli_query($conexao, "INSERT INTO cadastro_clientes(nome_cliente, email_cliente, senha_cliente, sexo_cliente) VALUES('$nome','$email','$senha','$sexo')");

        //fazer direcionamento para entrar
        header('location:entrar.php');
     }
     ?>

</body>
</html>