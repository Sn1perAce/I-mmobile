<?php
session_start();
   // print_r($_SESSION);
    if((!isset($_SESSION["email"]) == true) and (!isset($_SESSION["senha"]) == true)){

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header("Location: login.php");

    } else {
        $logado = $_SESSION["email"];
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css-sistema.css">
    <title>Sistema</title>
</head>
<body>
    
    <?php
    echo "<h1>Bem Vindo <u>$logado</u></h1>";
    
    ?>

    <nav class="navbar">
  <ul class="navbar__menu">
    <li class="navbar__item">
      <a href="#" class="navbar__link"><i data-feather="home"></i><span>Página Principal</span></a>
    </li>
    <li class="navbar__item">
      <a href="#" class="navbar__link"><i data-feather="message-square"></i><span>Mensagens</span></a>        
    </li>
   
   
  </ul>
</nav>

    <div class="d-flex">
        <a href="exit.php"class="btn">Sair</a>
    </div>

</body>
</html>