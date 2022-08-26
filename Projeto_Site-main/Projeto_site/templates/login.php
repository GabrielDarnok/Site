<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, purple,pink);
        }
        .Tela_login{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 75%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        .Tela_login h1{
            text-align: center;
        }
        .img{
            position: absolute;
            top: 50%;
            right: 53%;
            transform: translate(-50%,-50%);
            color: white;
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(45deg, purple,pink);
            border: none;
            padding: 15px;
            width: 100% ;
            color: white;
            border-radius: 10px;
            font-size: 15px;
            cursor: pointer;
        }
        #submit:hover{
            background-image: linear-gradient(45deg, pink,purple);
        }
    </style>
</head>
<body>
    <div class="img">
        <img src="https://evolunet.com.br/wp-content/themes/evolunet/assets/src/images/padroes/logo.png">
        <h2>Estoque</h2>
    </div>
    <div class="Tela_login">
        <form action="testlog.php" method="POST">
            <h1>Login</h1>
            <input type="text" name="user" id="user" placeholder="Nome" required>
            <br><br>
            <input type="password" name="password" placeholder="Senha" required>
            <br><br>
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>