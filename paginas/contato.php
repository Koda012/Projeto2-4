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
    &nbsp
    <title>contato</title>
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
      
    </style>
</head>
<body>

    <h1>contato: </h1>
    <form name="form1" method="post" action="ex3.php">
        <label for="nome">Digite seu nome</label>
        <input type="nome" name="nome" id="nome"
        placeholder="Nome completo" inputmode="nome">
        <br>
        <label for="email">Digite seu email</label>
        <input type="email" name="email" id="email"
        placeholder="E-mail válido" inputmode="email">
        <br>
        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" rows="4" cols="50"></textarea>
        <br>
        <button type="submit">
            Enviar dados
        </button>
        
</form>   

&nbsp
</body>
</html>