<?php
    session_start();
    
    if((!isset($_SESSION['user'])== true)and (!isset($_SESSION['password'])==true))
    {
        unset($_SESSION['user']);
        unset($_SESSION['password']);
        header("location: login.php");
    }
    $logado = $_SESSION['user'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evolunet</title>
    <style>
        *{
            box-sizing: border-box;
        }

        body{
            margin: 0;
        }
        .Topo{
            background-color: purple;
            text-align: center;
            padding: 26px;
            color: white;
        }
        .menu{
            background-color: black;
            color: white;
            overflow: hidden;
        }
        .menu a{
            color: white;
            width: 25%;
            padding: 40px 20px;
            float: left;
            display: block;
            text-decoration: none;
            text-align: center;
        }
        .sair{
            background-color: black;
            color: white;
            position: absolute;
            top: 5%;
            left: 95%;
            height: 50px;
            width: 50px;
            border-radius: 50%;
            border: white;
        }
        .sair a{
            text-decoration: none;
            color: white;
            position: absolute;
            top: 33%;
            left: 25%;
        }
        .sair a:hover{
            background-color: silver;
        }
        .texto{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,50%);
        }
        .rodape{
            background-color: purple;
            width: 100%;
            position: absolute;
            top: 92%;
        }
    </style>
</head>
<body>
    <header class="Topo">
        <h1><img src="https://evolunet.com.br/wp-content/themes/evolunet/assets/src/images/padroes/logo.png" width="250px"></h1>
        <h2>Estoque</h2>
        <div class="sair">
            <a href="http://localhost/Site/templates/login.php">Sair</a>
        </div>
    </header>
    
    <hr>
    <nav class="menu">
        <a href="roteadores.php"><u>Roteadores</u></a>
        <a href="onu.php"><u>ONU</u></a>
        <a href="ont.php"><u>ONT</u></a>
        <a href="relat.php"><u>RELATÓRIOS</u></a>
    </nav>
    <hr>
    <section class="texto">
        <h2>Escolha uma opção para verificar</h2>
    </section>
    
    <footer class="rodape">
        <p>EVOLUNET PROVEDORA DE INTERNET LTDA ME<br>
        Avenida Andrade Neves, 295 - Sala 192 (Torre de São Paulo) - Centro - Campinas | SP, CEP 13013-160<br>
        CNPJ: 03.772.846/0001-38 Inscrição Estadual: 244848034118</p>
    </footer>
</body>
</html>