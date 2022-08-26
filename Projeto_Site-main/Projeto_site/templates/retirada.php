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

    $sql = "SELECT * FROM retirada_rot";

    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roteadores</title>
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
    .Botao{
        color: black;
        width: 100%;
        text-align: center;
    }
    .Botao button{
        width: 10%;
    }
    .Botao a{
        text-decoration: none;
        color: black;
    }
    .Tabela{
        text-align: center;
        width: 100%;
    }
    .table-bg{
        background: rgba(0, 0, 0, 0.2);
        width: 40%;
        position: absolute;
        top: 45%;
        left: 30%;
        border-radius: 15px 15px;
    }
    .rodape{
        background-color: purple;
        width: 100%;
        position: absolute;
        top: 92%;
    }
    .rodape{
        text-align: left;
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
            <a href="http://localhost/Site/templates/login.php">Sair</a>
        </div>
    </header>
    <hr>
    <nav class="menu">
        <h1>Roteadores</h1>
        <a href="roteadores.php"><u>Novos</u></a><a href="retirada.php"><u>Retirada</u></a><a href="testes.php"><u>Testes</u></a></u>
    </nav>
    <hr>
    <div class="Botao">
        <button><a href="estoq_rot_ret.php"> Adicionar</a></button>
    </div>
    <section class="Tabela">
        <h2>Retirada</h2>

        <table class="table-bg">
        <tr>
            <th scope="col"><b>ID</b></th>
            <th scope="col"><b>Aparelho</b></th>
            <th scope="col"><b>Tecnologia</b></th>
            <th scope="col"><b>Quantidade</b></th>
            <th scope="col"><b>...</b></th>
        </tr>
        <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo ("<tr>");
                    echo("<td>". $user_data['id']."</td>");
                    echo("<td>". $user_data['marca']."</td>");
                    echo("<td>". $user_data['modelo']."</td>");
                    echo("<td>". $user_data['quantidade']."</td>");
                    echo("<td><a class='btn btn-sm btn-primary' href='edit_rot_ret.php?id=$user_data[id]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg></a>
                        <a class='btn btn-sm btn-danger' href='delete_rot_ret.php?id=$user_data[id]' title='Deletar'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                        <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                        <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                        </svg>
                        </a>
                        <a class='btn btn-sm btn-danger' href='decre_rot_ret.php?id=$user_data[id]' title='Deletar'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-down-up' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z'/>
                        </svg>
                    </td>");
                    echo("<tr>");
                }
            ?>
        </tbody>
    </table>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer class="rodape">
        <p>EVOLUNET PROVEDORA DE INTERNET LTDA ME<br>
        Avenida Andrade Neves, 295 - Sala 192 (Torre de São Paulo) - Centro - Campinas | SP, CEP 13013-160<br>
        CNPJ: 03.772.846/0001-38 Inscrição Estadual: 244848034118</p>
    </footer>
</body>
</html>