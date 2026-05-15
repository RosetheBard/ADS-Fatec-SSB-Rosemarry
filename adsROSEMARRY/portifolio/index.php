<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/lua.png" type="img/lua.png">
    <meta name="description"
        content="esse é um website de portifolio, com o intuito de divulgar meus trabalhos e estudos">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">



    <link rel="stylesheet" href="css/style.css">

    <title>Rose-HomePage</title>
</head>

<body class="conteiner">
    <header class="row">
        <div class="col-12 cabecalho">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="p-4">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Projetos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contatos</a>
                        </li>
                </div>
            </div>
            <nav class="navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <img src="img/lua.png" alt="Logo" class="d-inline-block align-text-top i-sm">
                        Rosemarry
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>

        </div>
    </header>

    <main class="row corpo">
        <div class="col-12">
            <div class="bx-pink">

                <!-- corpo do portifólio -->
                <h1 class="text-center">Seja Bem-vindo</h1>

                <img src="img/pfbanner.jpg" class="i-bn mx-auto d-block" alt="banner do portifólio">
                <!--  -->

                <!-- sessão de ultimos projetos -->
                <section>
                    <h2 class="text-center">Últimos Projetos</h2>

                    <div id="ultimos-projetos" class="carousel slide text-center">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="#"><img src="img/pfbanner-2.jpg" class="mx-auto d-block i-cr img-fluid"
                                        alt="..."></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img src="img/pfbanner-2.jpg" class="mx-auto d-block i-cr img-fluid"
                                        alt="..."></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img src="img/pfbanner-2.jpg" class="mx-auto d-block i-cr img-fluid"
                                        alt="..."></a>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#ultimos-projetos"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#ultimos-projetos"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </section>
                <!--  -->


                <div class="bx-dpink fluid">
                    <a href="#"><img src="img/lua.png" class="i-sm" alt=""></a>
                    <a href="#"><img src="img/lua.png" class="i-sm" alt=""></a>
                    <a href="#"><img src="img/lua.png" class="i-sm" alt=""></a>
                    <a href="#"><img src="img/lua.png" class="i-sm" alt=""></a>
                    <a href="#"><img src="img/lua.png" class="i-sm" alt=""></a>
                    <br>
                    <a href="#"><p class="text-end">ver mais</p></a>
                </div>


                <h2 class="text-center">Quem Sou eu?</h2>
                <p> [...] </p>
            </div>

    </main>

    <footer class=" row footer">
        <div class="col-12">
            <small>&copy; 2026 Rosemarry. todos os reservados</small>
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>