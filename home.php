<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Serviço Social</title>
    <style>

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

    body h1 {
        text-align: center;
        font-weight: bold;
        color: #2b2b2b;
        padding-top: 40px;
    }

    body h2 {
        text-align: center;
        font-weight: bold;
        color: #2b2b2b;
        padding-top: 30px;
    }

    .box{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: white;
        padding: 25px;
        border-radius: 10px;
    }

    body img {
        position: relative;
        background-color: white;
        border-radius: 60px;
        margin-top: 20px;
        max-height: 200px;
        top: 50%;
        left: 43%;

    }

    a{
        text-decoration: none;
        color: #323232;
        font-family: Arial, Helvetica, sans-serif;
        border-radius: 10px;
        padding: 10px;
    }

    button {
        background-color: transparent;
        border: 1px solid var(--cor4);
        padding: 7.5px;
        width: 120px;
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

    .rodape p {
        color: #323232;
        font-weight: bold;
        text-align: center;
        padding-top: 300px;
    }
    </style>
</head>
<body>
    <h1>Bem-Vindo</h1>
    <img src="imagens\logo-serviço.png" alt="Logo Serviço Social">
    <div class="box">
        <button><a href="login.php">Login</a></button><!-- Redireciona para "tal" pagina -->
        <button><a href="formulario.php">Cadastre-se</a></button>
    </div>
</body>
</html>