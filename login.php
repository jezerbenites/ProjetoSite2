<!DOCTYPE html>
<html lang="pt-br">
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
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: Helvetica;
            color: #323232;
            border: none;
        }
        body{
            background-color: white;
            background: linear-gradient(to left, var(--cor2) 30%, var(--cor4) 80%);
            background-size: cover;
            overflow: hidden;
        }
        button {
            background-color: white;
            border: 1px solid var(--cor4);
            padding: 7.5px;
            max-width: 200px;
            font-weight: bold;
            font-size: 0.8em;
            border-radius: 5px;
            cursor: pointer;
            outline: none;
            transition: all .4s ease-out;
        }
        button:hover {
            background-color: var(--cor4);
            color: rgb(0, 0, 0);
        }
        h1 {
            text-decoration: none;
            text-align: center;
            margin-bottom: 20px;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: white;
            padding: 50px;
            border-radius: 10px;
        }

        a {
            text-decoration: none;
            color: #323232;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 10px;
            padding: 10px;
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
            width: 100%;
            background-color: #ffffff;
        }
        .inputSubmit{
            background-color: white;
            border: 1px solid var(--cor4);
            padding: 15px;
            width: 100%; 
            border-radius: 10px; /*arredonda borda*/
            color: #323232;
            font-weight: bold;
            font-size: 15px;
        }
        .inputSubmit:hover{
            background-color: var(--cor4);
            cursor: pointer;
        }
        .box a:hover {
            text-decoration: underline;
            color: var(--cor4)
        }
        .box p {
            margin-top: 30px;
        }
        .email {
            border: 1px solid var(--cor5);
            border-radius: 10px;
        }
        .senha {
            border: 1px solid var(--cor5);
            border-radius: 10px;
        }
        .email:hover {
            border: 1px solid black;
        }
        .senha:hover {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <button><a href="index.php">Voltar</a></button>
    <div class="box">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input class="email" type="text" name="email" placeholder="E-mail">
            <br><br>
            <input class="senha" type="password" name="senha"placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
            <p><a href="formulario.php">Cadastre-se</a></p>
    </div>
</body>
</html>