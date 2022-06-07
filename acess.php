<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

:root {
    --cor1: #024554;
    --cor2: #53736A;
    --cor3: #6A8C69;
    --cor4: #A8B545;
    --cor5: #d8d7b1;
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
    background-color: var(--cor3);
    background: linear-gradient(45deg, var(--cor3) 30%, var(--cor4) 80%);
    background-size: cover;
    background-attachment: fixed;
    overflow: hidden;
}

button {
    background-color: var(--cor3);
    padding: 7.5px;
    margin: 5px;
    font-weight: bold;
    font-size: 0.8em;
    border-radius: 5px;
    cursor: pointer;
    outline: none;
    transition: all .4s ease-out;
    box-shadow: 1px 1px 15px 1px rgb(48, 48, 48);
}

button:hover {
    background-color: var(--cor2);
    color: rgb(0, 0, 0);
}

h1 {
    font-family: 'Josefin Sans', sans-serif;
    font-weight: bold;
    font-size: 2.5rem;
    text-decoration: none;
    text-align: center;
    margin-bottom: 20px;
}

.box{
    display: flex;
    flex-direction: column;
    align-items: center;
    flex-wrap: wrap;
    justify-content: center;
    background-color: white;
    padding: 50px;
    border-radius: 10px;
    box-shadow: 1px 1px 15px 1px rgb(48, 48, 48);
}

a {
    text-decoration: none;
    color: #323232;
    font-family: Arial, Helvetica, sans-serif;
    border-radius: 10px;
    padding: 10px;
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100vw;
    height: 80vh;
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
    background-color: var(--cor4);
    padding: 15px;
    width: 100%; 
    border-radius: 10px; /*arredonda borda*/
    color: #323232;
    font-weight: bold;
    font-size: 15px;
}
.inputSubmit:hover{
    background-color: var(--cor5);
    cursor: pointer;
}
.box a:hover {
    text-decoration: underline;
    color: var(--cor4)
}
.box p {
    margin-top: 30px;
    font-weight: bold;
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
    <div class="container">
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
    </div>
</body>
</html>