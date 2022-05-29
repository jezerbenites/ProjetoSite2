<!-- <?php
/* if(isset($_POST['submit']))
{
    print_r('data: ' . $_POST['data']);
    print_r('<br>');
    print_r('etnia: ' . $_POST['etnia']);
    print_r('<br>');
    print_r('domicilio: ' . $_POST['domicilio']);
    print_r('<br>');
    print_r('mortalidade: ' . $_POST['mortalidade']);
    print_r('<br>');
    print_r('rendimento: ' . $_POST['rendimento']);


include_once('config-index.php');

}  */
?>-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/ac611b35dd.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main-header.css">
    <title>index</title>
</head>
<body>
    <header>
        <nav>
            <a class="logo" href="sistema.php">Serviço social</a>
            
            <ul class="nav-list">
                <li><a href="home.php">Home</a></li>
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

                <form action="index.php" class="form" id="form" method="POST">
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
    
    <script src="./scripts/script.js"></script>
    <script src="./scripts/mobile.js"></script>
</body>
</html>