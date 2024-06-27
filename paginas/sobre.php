<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sobre Nós</title>
<style>
body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    margin: 0;
    background-image: url('imagens/telafundo.png');
    font-family: 'Roboto Slab', serif;
    color: white;
}      
h1 {
    text-align: center;
    color: white;
    margin-top: 20px;
}
.container {
    display: flex;
    justify-content: center; /* Centraliza os cards horizontalmente */
    padding: 20px;
    flex-wrap: wrap; /* Permite que os cards quebrem linha se necessário */
}
.card {
    background-color: gray; /* Fundo semitransparente */
    border: 2px solid white; /* Borda branca */
    border-radius: 15px; /* Bordas arredondadas */
    padding: 20px;
    margin: 10px;
    width: 220px; /* Largura fixa para todos os cards */
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}
.img-redimensionada {
    width: 120px;
    height: 98px;
    border: 2px solid white; /* Borda branca */
    border-radius: 10px; /* Bordas arredondadas nas imagens */
    margin-bottom: 10px;
}
p {
    margin: 0;
}
</style>
</head>
<body>
<h1>SOBRE NÓS</h1>
<div class="container">
     
    <div class="card">
        <img src="imagens/foto.jpg" alt="lucas" title="lucas" class="img-redimensionada">
        <p>Me chamo Lucas Maeda, tenho 20 anos, faço direito no integrado e este ano começçei a cursar TADS, tenho o sonho de me tornar um programador, amo jogos e por esse motivo fiz o meu jogo desta maneira.</p>
    </div>
    <div class="card">
        <img src="imagens/foto2.jpeg" alt="lucas" title="lucas" class="img-redimensionada">
        <p>E aí, galera gamer! Aqui é o Helcio, 25 anos, nascido em Sorocaba-SP e criado em Itapeva-SP. Desde cedo, sou apaixonado por videogames, explorando desde os clássicos até os lançamentos mais recentes</p>
    </div>
</div>  
</body>
</html>
