<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.scss">
    <link rel="shortcut icon" href="imagens/icone.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.grid.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        header {
            color: white;
            text-align: left;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            max-width: 800px;
            margin: 100px auto;
            padding: 20px;
        }

        .quadrado {
            width: 200px;
            height: 200px;
            overflow: hidden;
            position: relative;
            margin: 10px;
            border: 1px solid #ccc;
        }

        .quadrado img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .quadrado:hover img {
            transform: scale(1.1);
        }

        .quadrado .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .quadrado:hover .overlay {
            opacity: 1;
        }

        .quadrado .overlay a {
            color: white;
            text-decoration: none;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: auto;
            width: 100%;
            font-family: 'Roboto Slab', serif;
        }

        H1 {
            background-color: grey;
            text-align: center;
            text-decoration: none;
            Color: White;
            font-family: 'Roboto Slab', serif;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-image: url('imagens/telafundo.png');
            font-family: 'Roboto Slab', serif;
        }
    </style>
</head>

<body>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <a href="index.php?pagina=pagina">
                    <img src="imagens/IMAGEMJOGO.png" class="d-block w-100" alt="IMG">
                </a>       
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <a href="index.php?pagina=pagina">
                    <img src="imagens/IMAGEMJOGO2.png" class="d-block w-100" alt="IMG">
                </a>    
            </div>
            <div class="carousel-item">
                <a href="index.php?pagina=pagina">
                    <img src="imagens/IMAGEMJOGO.png" class="d-block w-100" alt="IMG">
                </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <h1>NOSSOS JOGOS</h1>
    <div class="container">
        <div class="quadrado">
            <a href="index.php?pagina=pagina">
                <img src="imagens/pixil-frame.png" alt="IMG">
                <div class="overlay">
                    <span>Sticky guy</span>
                </div>
            </a>
        </div>
        <div class="quadrado">
            <a href="index.php?pagina=pagina">
                <img src="imagens/labirinto.png" alt="Imagem 2">
                <div class="overlay">
                    <span>Veja mais</span>
                </div>
            </a>
        </div>
        <div class="quadrado">
            <a href="index.php?pagina=pagina">
                <img src="imagem3.jpg" alt="Imagem 3">
                <div class="overlay">
                    <span>Veja mais</span>
                </div>
            </a>

        </div>
        <div class="quadrado">
            <a href="index.php?pagina=pagina">
                <img src="imagem4.jpg" alt="Imagem 4">
                <div class="overlay">
                    <span>Veja mais</span>
                </div>
            </a>
        </div>
        <div class="quadrado">
            <a href="index.php?pagina=pagina">
                <img src="imagem5.jpg" alt="Imagem 5">
                <div class="overlay">
                    <span>Veja mais</span>
                </div>
            </a>
        </div>
        <div class="quadrado">
            <a href="index.php?pagina=pagina">
                <img src="imagem6.jpg" alt="Imagem 6">
                <div class="overlay">
                    <span>Veja mais</span>
                </div>
            </a>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>