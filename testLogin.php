<?php
    session_start();

    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email'] && !empty($_POST['senha'])))
    {
        //acessa
        include_once('config.php'); //conect com banco de dados
        $email = $_POST['email'];
        $senha = $_POST['senha'];

/*         print_r('E-mail: ' . $email);
        print_r('<br>');
        print_r('Senha: ' . $senha); */
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
        
        $result = $conexao->query($sql);

/*         print_r($sql);
        print_r('<br>');
        print_r($result); */
        if(mysqli_num_rows($result) < 1) //verifica se existe
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: acess.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
    else
    {
        //não acessa
        header('Location: acess.php');
    }

?>