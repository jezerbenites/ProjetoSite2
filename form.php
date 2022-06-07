<?php
    if(isset($_POST['submit']))
    {
/*    print_r('data: ' . $_POST['date']);
    print_r('<br>');
    print_r('etnia: ' . $_POST['resp1']);
    print_r('<br>');
    print_r('domicilio: ' . $_POST['resp2']);
    print_r('<br>');
    print_r('mortalidade: ' . $_POST['resp3']);
    print_r('<br>');
    print_r('rendimento: ' . $_POST['resp4']);
*/
        include_once('configform.php');

        $data_ent =     $_POST['date'];
        $etnia =        $_POST['resp1'];
        $domicilio =    $_POST['resp2'];
        $mortalidade =  $_POST['resp3'];
        $rendimento =   $_POST['resp4'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(data_ent,etnia,domicilio,mortalidade,rendimento)
        VALUES ('$data_ent','$etnia','$domicilio','$mortalidade','$rendimento')");
        
        header('Location: acess.html');
    }  
?>
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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/ac611b35dd.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="reset.css">
    <title>Form</title>
    <style>
        /*Header component*/
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
        background-color: white;
    }

    header {
        display: flex;
        flex-direction: column;
        background-color: var(--cor3);
        width: 100%;
        height: 55px;
        height: 55px;
    }

    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: white;
    }

    nav .logo {
        margin-left: 20px;
        text-decoration: none;
        font-size: 24px;
        text-transform: uppercase;
        color: #A8B545;
        font-family: 'Josefin Sans', sans-serif;
        text-shadow: 0.1rem 0.1rem 0.2rem black;
    }

    nav .nav-list {
        display: inline-flex;
        align-items: center;
        margin-right: 20px;
    }

    nav .nav-list li {
        display: flex;
        align-items: center;
        position: relative;
        list-style: none;
        padding: 0 20px;
        height: 55px;
        color: #323232;
        text-decoration: none;
    }

    a {
        text-decoration: none;
        color: white;
        font-weight: bold;
    }

    a:hover {
        color: var(--cor1);
    }

    nav .nav-list li::after {
        content: "";
        position: absolute;
        background-color: var(--cor1);
        color: var(--cor4);
        height: 3px;
        width: 0%;
        top: 0;
        left: 0;
        transition: 1.2s ease-in-out;
    }

    nav .nav-list li:hover::after {
        width: 100%;
        color: var(--cor5);
    }

    .mobile-menu div {
        background-color: var(--cor1);
        height: 2px;
        width: 32px;
        margin: 8px;
    }

    /*Mobile menu*/
    .mobile-menu {
        display: none;
    }

    .mobile-menu.active .line1 {
        transform: rotate(-45deg) translate(-8px, 8px);
    }
    
    .mobile-menu.active .line2 {
        opacity: 0;
    }
    
    .mobile-menu.active .line3 {
        transform: rotate(45deg) translate(-6px, -6px);
    }

    @media (max-width: 950px) {
    body {
        overflow-x: hidden;
    }

    nav {
        height: 100%;
    }
    
    .mobile-menu {
        display: block;
        margin-right: 10px;
        cursor: pointer;
    }

    .nav-list {
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        width: 0;
        padding: 20px 0;
        top: 55px;
        right: -20px;
        background-color: var(--cor4);
        z-index: 1000;
        transition: 0.6s;
        visibility: hidden;
    }

    .nav-list.active {
        width: 100%;
        visibility: visible;
        padding: 0;
    }

    .nav-list a {
        color: var(--cor5);
        text-shadow: 0.1rem 0.1rem 0.2rem black;
    }

    .nav-list a:hover {
        color: var(cor3);
    }

    .nav-list li {
        width: 100%;
        justify-content: center;
        color: var(--cor3)
    }
}

    /*Form component*/
.wrapper-form {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 800px;
    width: 100%;
}

.container {
    border-radius: 10px;
    margin-top: 50px;
    margin-bottom: 30px;
    width: 700px;
    background-color: white;
}

.title-form {
    font-size: 25px;
    text-transform: uppercase;
    padding: 20px;
    text-align: center;
    background-color: #C2C0A6;
    color: var(--cor1);
    border-radius: 10px 10px 0 0;
    text-shadow: 0.1rem 0.1rem 0.2rem black;
}

.form {
    padding: 22px;
    background-color: #C2C0A6;
    border-radius: 0 0 10px 10px;
}

.form-box {
    position: relative;
}

.form-box label {
    display: inline-block;
    margin-bottom: 30px;
    margin-top: 15px;
    margin-left: 2px;
}

.form-box input {
    display: block;
    border: 2px solid #f0f0f0;
    border-radius: 10px;
    font-size: 15px;
    width: 100%;
    padding: 10px;
}

.form-box i {
    position: absolute;
    color: red;
    visibility: hidden;
    top: 80px;
    right: 15px;
}

.form-box span {
    position: absolute;
    bottom: 50px;
    left: 2px;
    visibility: hidden;
    font-size: 14px;
}

.form-box.-error span {
    color: red;
    visibility: visible;
}

.form button {
    display: flex;
    justify-content: center;
    border-radius: 10px;
    border: none;
    padding: 12px;
    width: 100%;
    background-color: #23c587;
    color: #FFF;
    margin: 0 auto;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
}

.form button:hover {
    background-color: #145a3f;
    transition: 1.2s ease-in-out;
}

button .loading {
    border: 3px solid transparent;
    border-radius: 50%;
    border-top-color: #FFF;
    height: 21px;
    width: 21px;
    animation: loading 1s infinite;
}

@keyframes loading {
    to {
        transform: rotate(1turn);
    }
}

/*Required*/
.form-box.-error input {
    border-color: red;
}

.form-box.-error i.fa-triangle-exclamation {
    color: red;
    visibility: visible;
}

.form-box.-success input {
    border-color: #23c587;
}

.form-box.-success i.fa-circle-check {
    color: #23c587;
    visibility: visible;
}

@media (min-width: 551px) and (max-width: 950px) {
    .container {
        width: 450px;
    }
}

@media (max-width: 550px) {
    .container {
        width: 320px;
    }
}

    </style>
</head>
<body>
    <header>
        <nav>
            <a class="logo" href="index.php">Serviço social</a>
            
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="formulario.php">Formulário</a></li>
                <li><a href="">Dashboard</a</li>
                <li><a href="">Perfil</a></li>
            </ul>

            <div class="mobile-menu">
                <div class="lines line1"></div>
                <div class="lines line2"></div>
                <div class="lines line3"></div>
            </div>
        </nav>
    </header>

    <main>
        <section class="wrapper-form">
            <div class="container">

                <h1 class="title-form">Lançamento de dados</h1>

                <form action="form.php" class="form" id="form" method="POST">
                    <div class="form-box">
                        <label for="">Informe a data: *</label>
                        <span>Erro</span> 
                        <input 
                            type="text"
                            id="date"
                            name="date"
                            placeholder="Digite a data"
                            onfocus="(this.type = 'date')"
                            onblur="(this.type = 'text')"
                        required>
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-triangle-exclamation"></i>                       
                    </div>

                    <div class="form-box">
                        <label for="">Identificação étnico-racial: *</label>
                        <input 
                            type="text"
                            id="resp1"
                            name="resp1"
                            placeholder="Digite a resposta"
                        required>
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <span>Erro</span>                        
                    </div>

                    <div class="form-box">
                        <label for="">Identificação do domicílio: *</label>
                        <input 
                            type="text"
                            id="resp2"
                            name="resp2"
                            placeholder="Digite a resposta"
                        required>
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <span>Erro</span>                        
                    </div>

                    <div class="form-box">
                        <label for="">Mortalidade: *</label>
                        <input 
                            type="text"
                            id="resp3"
                            name="resp3"
                            placeholder="Digite a resposta"
                        required>
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <span>Erro</span>                        
                    </div>

                    <div class="form-box">
                        <label for="">Trabalho e rendimento médio: *</label>
                        <input 
                            type="text"
                            id="resp4"
                            name="resp4"
                            placeholder="Digite a resposta"
                        required>
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <span>Erro</span>                        
                    </div>

                    <button type="submit" name="submit" class="btn-submit" id="submit">
                        Enviar dados
                    </button>
                </form>
            </div>
        </section>
    </main>
    
    <script src="script.js"></script>
    <script src="mobile.js"></script>
</body>
</html>