<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- metadados -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="esse é um website de portifolio, com o intuito de divulgar meus trabalhos e estudos">

    <!-- links -->
    <link rel="shortcut icon" href="img/lua.png" type="img/lua.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Rose-HomePage</title>
</head>

<body class="conteiner">
    <header class="sticky-top row">
        <nav id="navbar-example" class="navbar p-3">
            <a class="navbar-brand" href="#"><img src="img/lua.png"
                    alt="icone em forma de lua preta, representando a logo do portifolio" class="i-sm"></a>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading1">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading2">Habilidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading3">Prpjetos</a>
                </li>
                <li class="nav-item">
                    <button class="btn" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">...</button>
                </li>
            </ul>
        </nav>

        <div class="offcanvas offcanvas-end bx-pink p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Offcanvas with body scrolling</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <p>Try scrolling the rest of the page to see this option in action.</p>
            </div>
        </div>

    </header>

    <main class="d-flex row">
        <!-- conteudo do portifolio -->
        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
            data-bs-smooth-scroll="true" class="scrollspy-example bx-pink p-3 rounded-2 text-center m-1" tabindex="0">
            <h2 id="scrollspyHeading1">Quem sou eu?</h2>
            <p>...</p>
            <h2 id="scrollspyHeading2">Habilidades</h2>
            <p>...</p>
            <h2 id="scrollspyHeading3">Ultimos Projetos</h2>
            <p>...</p>
        </div>
    </main>

    <footer class="row">
        <small>Feito por Rosemarry Munhoz</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>