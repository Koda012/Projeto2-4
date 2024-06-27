<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.scss">
    <link rel="shortcut icon" href="imagens/icone.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <title>Contato</title>
    <style>
        h1 {
            text-align: center;
        }
        form {
            text-align: center;
            color: white;
            font-family: 'Roboto Slab', serif;
        }
        body {
            display: flex;
            font-family: 'Roboto Slab', serif;
            color: white;
            background-image: url('imagens/telafundo.png');
        }
        .message {
            text-align: center;
            color: green;
            font-family: 'Roboto Slab', serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST['nome']);
            $email = htmlspecialchars($_POST['email']);
            $mensagem = htmlspecialchars($_POST['mensagem']);

            // Aqui você pode adicionar a lógica para salvar os dados ou enviar um email

            echo "<div class='message'>
                    <h1>Mensagem enviada com sucesso!</h1>
                    <p>Obrigado, $nome. Entraremos em contato com você em breve.</p>
                  </div>";
        } else {
        ?>
        <h1>Contato: </h1>
        <form name="form1" method="post" action="">
            <label for="nome">Digite seu nome</label>
            <input type="text" name="nome" id="nome" placeholder="Nome completo" required>
            <br>
            <label for="email">Digite seu email</label>
            <input type="email" name="email" id="email" placeholder="E-mail válido" required>
            <br>
            <label for="mensagem">Mensagem:</label><br>
            <textarea id="mensagem" name="mensagem" rows="4" cols="50" required></textarea>
            <br>
            <button type="submit">Enviar dados</button>
        </form> 
        <?php
        }
        ?>
    </div>
</body>
</html>
