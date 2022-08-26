<?php
    session_start();
    if((!isset($_SESSION['user'])== true)and (!isset($_SESSION['password'])==true))
    {
        unset($_SESSION['user']);
        unset($_SESSION['password']);
        header("location: login.php");
    }
    $logado = $_SESSION['user'];

    include_once("config.php");

    $sql = "SELECT * FROM relat";

    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
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
    .menu h2{
        color: white;
        width: 100%;
        padding: 0px 20px;
        float: left;
        display: block;
        text-align: center;
    }
    .menu a{
        color: white;
        width: 100%;
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
        top: 42%;
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
            <a href="login.php">Sair</a>
        </div>
    </header>
    <hr>
    
    <section class="menu">
        <h2>Relatórios</h2>
    </section>
    <HR>
    <section>
    <div class="Botao">
        <br>
        <button><a href="adic_relat.php">Adicionar</a></button>
    </div>
    <table class="table-bg">
        <tr>
            <th scope="col"><b>ID</b></th>
            <th scope="col"><b>Tipo</b></th>
            <th scope="col"><b>Roteadores</b></th>
            <th scope="col"><b>ONU</b></th>
            <th scope="col"><b>ONT</b></th>
            <th scope="col"><b>...</b></th>
        </tr>
        <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo ("<tr>");
                    echo("<td align='center'>". $user_data['id']."</td>");
                    echo("<td align='center'>". $user_data['tipo']."</td>");
                    echo("<td align='center'>". $user_data['rot_mes']."</td>");
                    echo("<td align='center'>". $user_data['onu_mes']."</td>");
                    echo("<td align='center'>". $user_data['ont_mes']."</td>");
                    echo("<td align='center'><a class='btn btn-sm btn-primary' href='edit_relat.php?id=$user_data[id]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg></a>
                        <a class='btn btn-sm btn-danger' href='delete_relat.php?id=$user_data[id]' title='Deletar'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                        <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                        <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                        </svg>
                        </a>
                        </td>");
                    echo("<tr>");
                }
            ?>
        </tbody>
    </table>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer class="rodape">
        <p>EVOLUNET PROVEDORA DE INTERNET LTDA ME<br>
        Avenida Andrade Neves, 295 - Sala 192 (Torre de São Paulo) - Centro - Campinas | SP, CEP 13013-160<br>
        CNPJ: 03.772.846/0001-38 Inscrição Estadual: 244848034118</p>
    </footer>
</body>
</html>