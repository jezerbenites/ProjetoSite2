<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style> /* Começo do Css */
        :root {
            --cor1: #4ab5ca;
            --cor2: #16dac6;
            --cor3: #23c587;
            --cor4: #0cf259;
            --cor5: #15eb20;
        }
        body{
            background-color: white;
            background: linear-gradient(to left, var(--cor2) 30%, var(--cor4) 80%);
            background-size: cover;
            overflow: hidden;
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%; /*centralizar a tela*/
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px; /*distancia entre elemento e borda*/
            border-radius: 15px; /*arrendodar bordas*/
            color: #fff;
        }
        input{ /*define todos os inputs com o mesmo css*/
            padding: 15px;
            border: none;
            outline: none; /*Tira a borda*/
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%; 
            border-radius: 10px; /*arredonda borda*/
            color: white;
            font-size: 15px;
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        } 
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="E-mail">
            <br><br>
            <input type="password" name="senha"placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enivar">
        </form>
    </div>
</body>
</html>