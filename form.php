<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $tell = $_POST["telp"];
    $gender = $_POST["gender"];
    $bDate = $_POST["bDate"];

    $city = $_POST["city"];
    $state = $_POST["state"];
    $adress = $_POST["adress"];

    include_once('config.php');

    $result = mysqli_query($conexao,"INSERT INTO usuarios(nome,email,senha,telefone,sexo,dataNasc,cidade,estado,endereco) 
    VALUES ('$name','$email','$pass','$tell','$gender','$bDate','$city','$state','$adress')");

    header("Location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link rel="stylesheet" type="text/css" href="css-form.css">
</head>
<body>
    <a href="login.php">Voltar</a>
    <div class="box">
        <form action="form.php" method="POST">
        <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="" rel="dofollow" class="NormalA">I-Mmobile</a></h1>
        </div>

        
        <div class="formbg-outer">
          <div class="formbg">
            
            <div class="formbg-inner padding-horizontal--48">

              <div class="field padding-bottom--24">
                    <a href="login.php" class="Voltar">Voltar</a>
                    
                </div>

              <span class="padding-bottom--15">Insira as informações para prosseguir</span>
              <form action="test-login.php" method="POST">

              <br>

              <div class="field padding-bottom--24">
                  <label for="name">Nome Completo</label>
                  <input type="text" name="name" required>
                </div>
                
                <div class="field padding-bottom--24">
                  <label for="email">Email</label>
                  <input type="text" name="email" required>
                </div>

                <div class="field padding-bottom--24">
                  <label for="pass">Senha</label>
                  <input type="password" name="pass"required>
                </div>

                <div class="field padding-bottom--24">
                  <label for="telp">Telefone</label>
                  <input type="tel" name="telp">
                </div>

                <div class="field padding-bottom--12">
                  <label for="gender">Gênero</label>
                </div>

                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="masculino" name="gender" value="masculino" required>
                </div>

                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="feminino" name="gender" value="feminino" required>
                </div>

                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                    <label for="outro">Outro</label>
                    <input type="radio" id="outro" name="gender" value="outro" required>
                </div>

                <div class="field padding-bottom--24">
                  <label for="bDate">Data de Nascimento</label>
                  <input type="date" name="bDate">
                </div>

                <div class="field padding-bottom--12">
                  <label for="gender">Informações de Região</label>
                </div>

                <div class="field padding-bottom--24">
                  <label for="state">Estado</label>
                  <input type="text" name="state">
                </div>

                <div class="field padding-bottom--24">
                  <label for="city">Cidade</label>
                  <input type="text" name="city">
                </div>

                <div class="field padding-bottom--24">
                  <label for="adress">Endereço</label>
                  <input type="text" name="adress">
                </div>
                
                <div class="field padding-bottom--24">
                     <input type="submit" name="submit" id="submit">
                </div>

              </form>
            </div>
          </div>
          <div class="footer-link padding-top--24">
            
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="#">© I-MMobile</a></span>
              <span><a href="#">Contato</a></span>
              <span><a href="#">Privacidade e termos</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        </form>

    </div>
    
</body>
</html>