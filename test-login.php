<?php
    session_start();
    if(isset($_POST["submit"]) && !empty($_POST['email']) && !empty($_POST['pass'])){
        //Acess System

        include_once('config.php');

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        //print_r('Email: '.$email);
        //print_r('<br>');
        //print_r('Senha: '.$pass);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$pass'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) > 0){
            
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');

            
        } else{
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }



        
    } else {
        header('location: login.php');
    }
?>