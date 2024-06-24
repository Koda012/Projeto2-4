<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex-team</title>
    <meta name="description" content="Ex-team">
    <meta name="keywords" content="jogos, steam, Ex-team">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.scss">
    <link rel="shortcut icon" href="imagens/icone.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-image: url('imagens/telafundo.png');
            font-family: 'Roboto Slab', serif;
        }
    </style>
    </style>
</head>

<body>
    <header class="header">
        <a href="index.php" title="Ex-team" class="header-logo">
            <img src="imagens/icone.png" alt="Ex-team">
        </a>
        <a>EX-TEAM</a>
        <nav class="header-menu">
            <ul>
                <li>
                    <a href="index.php?pagina=home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="index.php?pagina=sobre">
                        Sobre nós
                    </a>
                </li>
                <li>
                    <a href="index.php?pagina=Contato">
                        Contato
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="content">
        <main>
            <?php
            //imprimir o conteudo do array do GET
            //print_r($_GET);
            
            //recuperar a variavel pagina
            $pagina = $_GET["pagina"] ?? "Home";

            // paginas/home.php
            $pagina = "paginas/{$pagina}.php";

            //verificar se o arquivo existe
            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include "paginas/erro.php";
            }
            ?>
        </main>
    </div>
    <footer class="footer">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.5149559462493!2d-52.38314662519066!3d-24.04816387846836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed7540659ea6d1%3A0x1375c0952b412abd!2sAv.%20Irm%C3%A3os%20Pereira%2C%20670%20-%20Centro%2C%20Campo%20Mour%C3%A3o%20-%20PR%2C%2087300-010!5e0!3m2!1spt-BR!2sbr!4v1706226583758!5m2!1spt-BR!2sbr"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p>Todos os direitos reservados - Desenvolvido por koji's</p>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>