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
    <title>Bem-Vindo</title>
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

 

    .artigo {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-around;
        justify-items: center;
        margin-top: 60px;
    }


    div.quadrado {
        display: inline-grid;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
        align-content: space-around;
        flex-flow: row wrap;
        flex-grow: 1;
        margin-bottom: 15px;
        border-radius: 10px;
        box-shadow: 1px 1px 5px 1px rgb(48, 48, 48);
        width: 300px;
        height: 300px;
    }

    div#q1 {
        background-color: #C2C0A6;
        text-align: center;
    }

    div#q2 {
        background-color: #C2C0A6;
        text-align: center;
    }

    div#q3 {
        background-color: #C2C0A6;
        text-align: center;
    }

    .rodape {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-items: center;
        justify-items: center;
        text-align: center;
        background-color: transparent;
        font-size: 0.5rem;
    }
</style>
</head>
<body>
    <header>
        <nav>
            <a class="logo" href="login.php">Serviço social</a>
            
            <ul class="nav-list">
                <li><a href="login.php">Login</a></li>
                <li><a href="formulario.php">Crie sua conta</a></li>
                <li><a href="#">Perfil</a></li>
                <li><a href="#">Fale Conosco</a></li>
            </ul>

            <div class="mobile-menu">
                <div class="lines line1"></div>
                <div class="lines line2"></div>
                <div class="lines line3"></div>
            </div>
        </nav>
    </header>
    <main>
        <div class="artigo">
            <article>
                <a href="form.php">
                    <div class="quadrado" id="q1">
                        <h1>Formulário</h1>
                        <p>Clique aqui para fazer a entrada dos dados</p>
                    </div>
                </a>
            </article>
            <article>
                <div class="quadrado" id="q2"></div>
            </article>
            <article>
                <div class="quadrado" id="q2"></div>
            </article>
        </div>
    </main>
    <footer class="rodape">
        <h1>Desenvolvido por WolfPack | Todos os direitos reservados &copy2022 </h1>
    </footer>
    <script src="script.js"></script>
    <script src="mobile.js"></script>
</body>
</html>