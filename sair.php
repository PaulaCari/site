<?php

//criar a asessão
session_start();

//destruir as variaveis
inset($_SESSION['email_cliente']);
inset($_SESSION['senha_cliente']);

//direcionamento para  pagina index

header('Location:index.html');

?>