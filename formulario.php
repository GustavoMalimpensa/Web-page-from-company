<?php

    if(isset($_POST['submit']))
    {
        // print_r('Name: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('data_nascimento: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('cnh: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('validade: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('senha: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $data_nascimento = $_POST['data_nascimento'];
        $cnh = $_POST['cnh'];
        $validade = $_POST['validade'];
        $senha = $_POST['senha'];
        
        $result = mysqli_query($conexao, "INSERT INTO user(name,email,data_nascimento,cnh,validade,senha) 
        VALUES ('$name','$email','$data_nascimento','$cnh','$validade','$senha')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDcard</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(255,20,147), rgb(255,182,193));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid MediumVioletRed;
        }
        legend{
            border: 1px solid MediumVioletRed;
            padding: 10px;
            text-align: center;
            background-color: MediumVioletRed;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: MediumVioletRed;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(199,21,133), rgb(255,20,147));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(255,105,180), rgb(219,112,147));
        }
        
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário do Colaborado</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="name" id="name" class="inputUser" required>
                    <label for="name" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cnh" id="cnh" class="inputUser" required>
                    <label for="cnh" class="labelInput">Numero da Cnh</label>
                </div>
                <br>
                <label for="validade"><b>Validade da Cnh</b></label>
                <input type="date" name="validade" id="data_nascimento" required>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>         
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>  
</body>
</html>