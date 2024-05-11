<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Filmes</title>
</head>
<body>
    <form action="cadastrar-filme" method="post">
        
        <label for="nomeFilme">Nome do Filme</label>
        <input type="text" name="nomeFilme" id="nomeFilme">
        <label for="anoLancamento">Ano de lamçamento</label>
        <input type="number" name="anoLancamento" id="anoLancamento">
        <label for="poster">Poster da Imagem</label>
        <input type="file" name="poster" id="poster">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>