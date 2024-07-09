<!-- configurar do  PHP -->

<?php
//iniciar uma sessão
session_start();

if((!isset($_SESSION['email_cliente']) ==true) and (!isset($_SESSION['senha_cliente'])==true))
{
  //destruir as variaveis
  unset($_SESSION['email_cliente']);
  unset($_SESSION['senha_cliente']); 
  header('location:entrar.php');
}
else{
    //criar um avariavel de acesso
    $logado = $_SESSION['email_cliente'];
}
?>

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

    <!-- Construção da sessão do usuario -->
  <section class="barra_top">
    <div class="barra">
        <h1>Área do usuario</h1>
     </div>

     <div class="barra">
        <a href="index.html">SAIR</a>
     </div>
  </section>

  <section class="usuario">
    <!-- <h2>Olá, Nome do clientes</h2> -->
     <?php
     echo "<h2>Olá, $logado</h2>";
     ?>
    <p>Seja Bem-vindo ao Mercado Preso</p>
  </section>


  <!-- rodape -->
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

    <!-- Configuração do PHP -->
     <?php

     if(isset($_POST['Submit'])){
        include_once('conectar.php');

        // criação das variaveis
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sexo = $_POST['sexo'];

        $clientes = mysqli_query($conexao, "INSERT INTO cadastro_clientes(nome_cliente, email_cliente, senha_cliente, sexo_cliente) VALUES('$nome','$email','$senha','$sexo')");
     }
     ?>

</body>
</html>