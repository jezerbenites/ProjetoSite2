<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $data_nasc = $user_data['data_nasc'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                $endereco = $user_data['endereco'];
            }
        }
        else
        {
            header('Location: sistema.php');
        }
    }
    else
    {
        header('Location: sistema.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
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
}

a{
    text-decoration: none;
    color: #323232;
    font-family: Arial, Helvetica, sans-serif;
    border-radius: 10px;
    padding: 10px;
}

button {
    background-color: white;
    border: 1px solid var(--cor4);
    padding: 7.5px;
    max-width: 200px;
    margin: 10px 0 0 10px;
    font-weight: bold;
    font-size: 0.8em;
    border-radius: 5px;
    cursor: pointer;
    outline: none;
    transition: all .4s ease-out;
}

button:hover {
    background-color: var(--cor2);
    color: rgb(0, 0, 0);
}

.box{
    color: #323232;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: 10px;
    transform: translate(-50%, -50%);
    background: white;
    padding: 15px;
    border-radius: 15px;
    max-width: 700px;

}

fieldset{
    border: 3px solid #0cf259;
    padding: 5px;
}

legend{
    border: 1px solid #0cf259;
    padding: 6px;
    text-align: center; /*alinhar centro*/
    background-color: #0cf259;
    border-radius: 8px;
    
}

.inputBox{
    position: relative;
    padding: -10px;
}

.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid  #323232;
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
    color: #0cf246;
}
#data_nascimento{
    border: none;
    padding: 8px;
    border-radius: 10px;
    outline: none;
    font-size: 15px; /*aumenta a fonte*/
}

#submit{
    background-color: #0cf259; 
    width: 100%;
    border: none;
    padding: 10px;
    color: white;
    font-size: 22px;
    margin-top: 20px;
    cursor: pointer;
    border-radius: 10px;
}

#submit:hover{
    background-color: var(--cor5);
}    </style>
</head>
<body>
    <button><a href="sistema.php">Voltar</a></button>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar Cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value=<?php echo $senha;?> required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value=<?php echo $telefone;?> required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '';?> required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '';?> required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : '';?> required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" value=<?php echo $data_nasc;?> required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value=<?php echo $cidade;?> required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" value=<?php echo $estado;?> required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value=<?php echo $endereco;?> required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>