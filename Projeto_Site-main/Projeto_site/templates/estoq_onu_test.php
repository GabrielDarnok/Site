<?php
    session_start();
    include_once('config.php');
    if((!isset($_SESSION['user'])== true)and (!isset($_SESSION['password'])==true))
    {
        unset($_SESSION['user']);
        unset($_SESSION['password']);
        header("location: login.php");
    }
    $logado = $_SESSION['user'];

    if(isset($_POST['submit']))
    {
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $quant = $_POST['quant'];

        $result = mysqli_query($conexao,"INSERT INTO testes_onu(marca,modelo,quantidade) VALUES ('$marca','$modelo','$quant')");

        header('Location: onu_test.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONT</title>
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
            padding: 40px ;
            color: white;
        }
        .Topo a{
            text-decoration: none;
            color: white;
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
        .menu{
            background-color: black;
            color: white;
            overflow: hidden;
        }
        .menu h1{
            color: white;
            width: 100%;
            padding: 0px 20px;
            float: left;
            display: block;
            text-align: center;
        }
        .menu a{
            color: white;
            width: 33.3%;
            padding: 0px 10px;
            float: left;
            display: block;
            text-decoration: none;
            text-align: center;
        }
        .box{
            position: absolute;
            top: 61%;
            left: 50%;
            transform: translate(-50%,-50%);
            background: rgba(0, 0, 0, 1);
            padding: 10px;
            border-radius: 15px 15px;
            width: 18%;
            color: white;
        }
        fieldset{
            border: 3px solid silver;
        }
        legend{
            border: 1px solid silver;
            padding: 10px;
            text-align: center;
            background-image: linear-gradient(45deg, purple,pink);
            border-radius: 15px;
            color: black;
        }
        .form{
            position: relative;
        }
        .inputuser{
            background: none;
            border: none;
            border-bottom:  1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .Tabela{
        text-align: center;
        width: 100%;
        }
        .rodape{
        background-color: purple;
        width: 100%;
        position: absolute;
        top: 92%;
        }
        .labelinput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputuser:focus ~.labelinput,
        .inputuser:valid ~.labelinput{
            top: -20px;
            font-size: 12px;
            color: silver;
        }
        #submit{
            background-image: linear-gradient(45deg, purple,pink);
            width: 100%;
            border: none;
            padding: 15px;
            border-radius: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;    
        }
        #submit:hover{
            background-image: linear-gradient(45deg, pink,purple);
        }
          
    </style>
</head>
<body>
    <header class="Topo">
        <h1><img src="https://evolunet.com.br/wp-content/themes/evolunet/assets/src/images/padroes/logo.png" width="250px"></h1>
        <div>
            <a href="evolunet.php"><u>Voltar ao menu principal</u></a>
        </div>
        <div class="sair">
            <a href="login.php">Sair</a>
        </div>
    </header>
    <hr>
    <nav class="menu">
        <h1>ONU</h1>
        <a href="onu.php"><u>Novos</u></a><a href="onu_test.php"><u>Testes</u></a><a href="onu_ret.php"><u>Retirada</u></a></u>
    </nav>
    <hr>
    <section class="Tabela">
        <h2>Adicionar em Teste</h2>
    </section>
        <section class="box">
            <form action="estoq_onu_test.php" method="POST"> 
                <fieldset>
                    <legend><b>Adicionar no Estoque</b></legend>
                        <section class="inputbox">
                            <br><br>
                            <div class="form">
                                <input type="text" name="marca" id="modelo" class="inputuser" required>
                                <label for="id" class="labelinput">Marca</label>
                            </div>
                            <br><br>
                            <div class="form">
                                <input type="text" name="modelo" id="modelo" class="inputuser" required>
                                <label for="id" class="labelinput">Modelo</label>
                            </div>
                            <br><br>
                            <div class="form">
                                <input type="text" name="quant" id="quant" class="inputuser" required>
                            <label for="id" class="labelinput">Quantidade</label>    
                            </div>
                            <br><br>
                            <div class="form">
                                <input class="submit" type="submit" name="submit" id="submit">
                            </div>
                            <br><br>
                        </section>
                </fieldset>
            </form>   
        </section>    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer class="rodape">
        <p>EVOLUNET PROVEDORA DE INTERNET LTDA ME<br>
        Avenida Andrade Neves, 295 - Sala 192 (Torre de S??o Paulo) - Centro - Campinas | SP, CEP 13013-160<br>
        CNPJ: 03.772.846/0001-38 Inscri????o Estadual: 244848034118</p>
    </footer>
</body>
</html>