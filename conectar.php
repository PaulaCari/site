<!--a função é pegar nosso site e conectar com BD chamado Wokbench -->
<?php

// vriação de variaveis
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'site_mp';

$conexao = new MYSQLI($host, $usuario, $senha, $banco);

//Fazer a verificação sim esta conectando direito com BD
if($conexao -> connect_errno){
    echo "Erro de conexão com o banco de dados";
}

else{
    echo "Conexão efetuada com sucesso!";
}
?>