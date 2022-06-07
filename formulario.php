<?php

    if(isset($_POST['submit']))
    {
/*      print_r('Nome: ' . $_POST['nome']);
        print_r('<br>');
        print_r('E-mail: ' . $_POST['email']);
        print_r('<br>');
        print_r('Telefone: ' . $_POST['telefone']);
        print_r('<br>');
        print_r('Sexo: ' . $_POST['genero']);
        print_r('<br>');
        print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
        print_r('<br>');
        print_r('Cidade: ' . $_POST['cidade']);
        print_r('<br>');
        print_r('Estado: ' . $_POST['estado']);
        print_r('<br>');
        print_r('Endereço: ' . $_POST['endereco']);
   */   
        include_once('config.php');

        $nome =      $_POST['nome'];
        $senha =     $_POST['senha'];
        $email =     $_POST['email'];
        $telefone =  $_POST['telefone'];
        $sexo =      $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade =    $_POST['cidade'];
        $estado =    $_POST['estado'];
        $endereco =  $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco)
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
        
        header('Location: acess.html');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleform.css">
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
    <title>Formulário Cadastro</title>
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

body {

    background-color: var(--cor3);
    background: linear-gradient(45deg, var(--cor3) 30%, var(--cor4) 80%);
    background-size: cover;
    background-attachment: fixed;
}

a{
    text-decoration: none;
    color: #323232;
    font-family: Arial, Helvetica, sans-serif;
    border-radius: 10px;
    padding: 10px;
}

button {
    background-color: var(--cor5);
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
    background-color: var(--cor4);
    color: rgb(0, 0, 0);
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: none;
}

.box{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    color: var(--cor4);
    background: white;
    padding: 16px;
    border-radius: 15px;
    box-shadow: 1px 1px 15px 1px rgb(48, 48, 48);
    margin-bottom: 20px;
}

fieldset{
    border: 3px solid var(--cor1);
    padding: 10px;
}

legend{
    padding: 6px;
    text-align: center; /*alinhar centro*/
    background-color: var(--cor4);
    border-radius: 8px;
    font-family: 'Josefin Sans', sans-serif;
    font-weight: bold;
    border: none;
}

.inputBox{
    position: relative;
    padding: -10px;
}

.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid  var(--cor1);
    outline: none;
    color: #323232;
    font-size: 11px;
    width: 100%;
    letter-spacing: 2px; /*aumenta espaçamento caracter*/
}

.labelInput{
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: .5s;
}
.inputUser:focus ~ .labelInput,
.inputUser:valid ~ .labelInput{ /*joga os input pra cima*/
    top: -20px;
    font-size: 12px;
    color: var(--cor1);
}
#data_nascimento{
    border: none;
    padding: 8px;
    border-radius: 10px;
    outline: none;
    font-size: 15px; /*aumenta a fonte*/
}

#submit{
    background-color: var(--cor4); 
    width: 100%;
    border: none;
    padding: 10px;
    color: var(--cor2);
    font-size: 1.5rem;
    font-weight: bold;
    margin-top: 5px;
    cursor: pointer;
    border-radius: 10px;
    font-family: 'Josefin Sans', sans-serif;
}

#submit:hover{
    background-color: var(--cor5);
    cursor: pointer;
    outline: none;
    transition: all .4s ease-out;
}
</style>
</head>
<body>
<button><a href="acess.html">Voltar</a></button>
    <div class="container">
        <div class="box">
            <form action="formulario.php" method="POST">
                <fieldset>
                    <legend><b>Serviço Social</b></legend> <!--<b></b> deixa em negrito-->
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome completo</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="labelInput">Senha</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">E-mail</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                        <label for="telefone" class="labelInput">Telefone</label>
                    </div>
                    <br>
                    <p>Sexo:</p>
                    <input type="radio" id="feminino" name="genero" value="feminino">
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="masculino">
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" id="outro" name="genero" value="outro">
                    <label for="outro">Outro</label>
                    <br><br>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="cidade" id="cidade" class="inputUser" required>
                        <label for="cidade" class="labelInput">Cidade</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="estado" id="estado" class="inputUser" required>
                        <label for="estado" class="labelInput">Estado</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="endereco" id="endereco" class="inputUser" required>
                        <label for="endereco" class="labelInput">Endereço</label>
                    </div>
                    <br><br>
                    <input type="submit" name="submit" id="submit">
                </fieldset>

            </form>

        </div>
    </div>
</body>
</html>