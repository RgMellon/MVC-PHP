<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> 
    <table>
        <thead>
            <tr>
                <td> Nome </td>
                <td> Preço </td>
                <td> Descrição </td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $p): ?>
                <tr>
                    <td> <?= $p['nome'] ?> </td>
                    <td> <?= $p['preco'] ?> </td>
                    <td> <?= $p['descricao'] ?> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <hr>
    <form action="/MVC2/redirect.php?rota=salvar" method="POST">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="preco" placeholder="Preço">
        <input type="text" name="descricao" placeholder="Descricão">
        <input type="submit" value="Teste">
    </form>
</body>
</html>