<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="imagens/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="imagens/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="imagens/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="imagens/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="imagens/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="imagens/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="imagens/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="imagens/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="imagens/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="imagens/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
    <link rel="manifest" href="imagens/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="imagens/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Serviço Social</title>
    <style>


    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');


    :root {

    --cor1: #024554;

    --cor2: #53736A;

    --cor3: #6A8C69;

    --cor4: #A8B545;

    --cor5: #C2C0A6;

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
    width:100%;
    height:100%;
    background-image: linear-gradient(rgba(0,0,0,0.7),
    rgba(0,0,0,0.7)), url('../site.2/imagens/Mãos.jpg');
    background-position: center;
    padding: 10px;
    background-size: cover;
    }


    body h1 {

    font-family: 'Josefin Sans', sans-serif;

    text-align: center;

    font-weight: bold;

    color: white;

    padding-top: 40px;

    font-size: 3rem;

    }


    body h2 {

    text-align: center;

    font-weight: bold;

    color: #2b2b2b;

    padding-top: 30px;

    }


    .box{

    display: flex;

    flex-direction: column;

    justify-content: center;

    align-items: center;

    flex-wrap: wrap;

    background-color: white;

    padding: 10px;

    border-radius: 10px;

    width: 200px;

    margin: auto;

    }


    .imagem {

    display: flex;

    flex-direction: row;

    justify-content: center;

    height: 200px;

    margin: auto;

    background-color: white;

    width: 200px;

    border-radius: 20%;

    margin-top: 10px;

    margin-bottom: 10px;

    }


    a{

    text-decoration: none;

    color: green;

    font-family: Arial, Helvetica, sans-serif;

    border-radius: 10px;

    padding: 10px;

    }


    button {

    background-color: transparent;

    padding: 7.5px;

    margin: 5px;

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


    .botao button {

    background-color: #d8d7b1;

    border: 1px solid #d8d7b1;

    padding: 7px;

    margin: 5px;

    width: 120px;

    font-weight: bold;

    font-size: 0.8em;

    border-radius: 5px;

    cursor: pointer;

    outline: none;

    transition: all .4s ease-out;

    }


    .botao:hover {

    background-color: var(--cor4);

    color: rgb(0, 0, 0);

    }


    </style>
    
        
</head>
<body>
    <button calss="botao"><a href="index.php">Voltar</a></button>
    <div class="container-geral">
        <h1>Serviço Social</h1>
        <div class="imagem">
            <img src="imagens/logo-serviço.png" alt="Logo Serviço Social">
        </div>
        <div class="box">
            <button><a href="acess.html">Entrar</a></button>
            <button><a href="formulario.php">Cadastre-se</a></button>
        </div>
    </div>
</body>
</html>