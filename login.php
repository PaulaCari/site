<?php
// iniciar uma sessão
session_start(); 

//verificar se houve uma ação dentro a pag entrar

if(isset($_POST["submit"]) && !empty($_POST['email']) && !empty($_POST['senha']))
{
//não esta vacio os campos conectar o BS
include_once('conectar.php');

//variaveis
$email = $_POST['email'];
$senha = $_POST['senha'];

//verificar a tabela do BD
$sql = "SELECT * FROM cadastro_clientes WHERE email_cliente = '$email' and senha_cliente = '$senha'";

$verificar = $conexao -> query($sql);

//verificar se o registro é valido
if (mysqli_num_rows($verificar)< 1)
{
    //destrui as variaveis limpa da memoria
   unset($_SESSION['email_cliente']); 
   unset($_SESSION['senha_cliente']); 
 header('location:entrar.php');
}
else{
    //variaveis da sessão
    $_SESSION['email_cliente'] = $email;
    $_SESSION['senha_cliente'] = $senha;
    header('location:usuario.php');
}
}

else{
    //campos vacios
    header('location:entra.php');
}
?>