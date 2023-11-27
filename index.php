<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="./index.css">

    <!--Define o icone da pagina-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <title>School Map</title>
</head>

<body>

    <!--Define o os botões da pagina-->

    <nav class="navbar  navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">School Map</a>-->
            <button class="navbar-toggler" style="margin-right:5px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse top_nav" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto ">
                    <li class="nav-item">
                        <a href="#Sobre" class="nav-link">Sobre</a>
                        <hr class="hr_nav">
                    </li>
                    <li class="nav-item "><a href="#Contato" class="nav-link">Contatos</a>
                    </li>
                    <li class="nav-item "><a href="site.html" class="nav-link" target="_blank">Sites de Interesse</a>
                    </li>
                    <li class="nav-item "><a href="formulario.php" class="nav-link" target="_blank">Pré-Cadastro de Matriculas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="topo">
        <h1 style="color:blue;">Bem vindo ao School Map</h1>
        <p style="color: rgb(25, 25, 29);"> Desenvolvido com o propósito de oferecer opções 
        de instituições educacionais próximas, facilitando a busca por uma escola adequada para a educação do seu filho.
        </p>

        <a href="#map" class="botao">Ver Mapa</a>

    </header>

    <section id="Sobre">
        <h2 style="color:white;">Sobre</h2>
        <p><i>O School Map foi desenvolvido com a intenção de mostrar a localização exata de escolas públicas mais próximas,
                essa é uma ferramenta criada com total profissionalismo para que o usuário possa chegar aonde
                deseja
                com segurança e certeza que estará seguindo o melhor caminho</i></p>
    </section>

    <section id="Visualizar">
        <div class="map-container">
            <?php include('./map.html'); ?>
        </div>
    </section>

    <section id="Contato">
        <h2>Contatos</h2>
        <div>
            <img src="img/tel.png" alt="Telefone">
            <p><a href="tel:+554932131517">(49) 3213-1517</a></p>
        </div>
        <div>
            <img src="img/mail.png" alt="E-mail">
            <p><a href="mailto:school_map@yahoo.com">school_map@yahoo.com</a></p>
        </div>
    </section>


    <footer>
        <button class="btn-voltar" title="Voltar a Tela Inicial" onclick="scrollToTop()">
        </button>
        <p>©️ Developed By Tiago Moraes de Oliveira</p>



        <script>
            function scrollToTop() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        </script>

    </footer>


</body>

</html>
