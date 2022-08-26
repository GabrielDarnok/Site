<?php
    session_start();
    
    if(isset($_POST['submit']) && !empty($_POST['user']) && !empty($_POST['password']))
    {
        include_once('config.php');
        $user = $_POST['user'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM login WHERE nome = '$user' and senha = '$password'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['nome']);
            unset($_SESSION['senha']);
            header('location: login.php');
        }
        else
        {
            $_SESSION['user'] = $user;
            $_SESSION['password'] = $password;
            header('location: evolunet.php');
        }
    }
    else
    {
        header('Location: login.php');
    }
?>