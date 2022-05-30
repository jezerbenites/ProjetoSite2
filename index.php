<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviço Social</title>
    <style>

@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

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
    background: linear-gradient(45deg, var(--cor2) 30%, var(--cor4) 80%);
    background-size: cover;
    background-attachment: fixed;
    overflow: hidden;
}

body h1 {
    font-family: 'Josefin Sans', sans-serif;
    text-align: center;
    font-weight: bold;
    color: #2b2b2b;
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
    color: #323232;
    font-family: Arial, Helvetica, sans-serif;
    border-radius: 10px;
    padding: 10px;
}

button {
    background-color: transparent;
    border: 1px solid var(--cor4);
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

button:hover {
    background-color: var(--cor4);
    color: rgb(0, 0, 0);
}

    </style>
</head>
<body>
    <div class="container-geral">
        <h1>Crie sua conta</h1>
        <div class="imagem">
        <img src="imagens\logo-serviço.png" alt="Logo Serviço Social">
        </div>
        <div class="box">
            <button><a href="login.php">Login</a></button><!-- Redireciona para "tal" pagina -->
            <button><a href="formulario.php">Cadastre-se</a></button>
        </div>
    </div>
</body>
</html>