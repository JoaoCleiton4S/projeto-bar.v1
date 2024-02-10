<?php session_start() ?>

<!DOCTYPE html>
<html lang ="pt-br">
<head>
    <meta charset ="UTF-8">
    <meta name ="viewport" content ="width=device-width, initial-scale=1.0">
    <title> Login </title>
</head>
    <body>
    
    <?php

    if(!isset($_SESSION['login']) ){

        if(isset($_POST['acao']) ){

    #Senha pré-definida para demontração.

            $login = 'ApenasUmBar';
            $senha = '400289922';

            $loginForm = $_POST['login'];
            $senhaForm = $_POST['senha'];

            if($login == $loginForm && $senha == $senhaForm){
    #Teste de segurança e funcionalidade.

                $_SESSION['login'] = $login;
                header('localization: index.php');

            }else{
                echo 'Algo deu errado!.';
    #Caso algo de falha ou erro na comprovação.

            }
        }

        include('login_php');

    }else{

    #Botão de deslogar.
        if(isset($_GET['logout'])){
            unset($_SESSION['login']);
            session_destroy();
            header('location: index.php');
    #Só para garantir.
        }
        include('home.php');
    }

    ?>

    </body>

</html>