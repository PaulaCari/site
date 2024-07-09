<?php
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
 header('location:entrar.php');
}
else{
    header('location:usuario.php');
}
}

else{
    //campos vacios
    header('location:entra.php');
}
?>