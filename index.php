<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">

    <title>EuFood | PHP</title>
</head>
<body>
    <?php $preco = ""; ?>

    <h1>EuFood</h1>
    <h2>Cardápio</h2>

    <form action="order.php" method="GET">
        <table>
            <tr>
                <th>Produto</th>
                <th>Tipo</th>
                <th>Preço</th>
                <th>Quantidade</th>
            </tr>
            <tr>
                <td>Burguer de carne</td>
                <td>Hamburguer</td>
                <td>16,00</td>
                <td><input type="number" name="produto1" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Burguer de frango</td>
                <td>Hamburguer</td>
                <td>15,00</td>
                <td><input type="number" name="produto2" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Burguer de peixe</td>
                <td>Hamburguer</td>
                <td>19,00</td>
                <td><input type="number" name="produto3" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Batata</td>
                <td>Acompanhamento</td>
                <td>8,00</td>
                <td><input type="number" name="produto4" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Rosquinha</td>
                <td>Acompanhamento</td>
                <td>11,00</td>
                <td><input type="number" name="produto5" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Coca Guela</td>
                <td>Bebida</td>
                <td>7,50</td>
                <td><input type="number" name="produto6" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Limão Guela</td>
                <td>Bebida</td>
                <td>8,50</td>
                <td><input type="number" name="produto7" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Burguer de carne +<br> Batata +<br> Coca Guela</td>
                <td>Combo 1</td>
                <td>28,35</td>
                <td><input type="number" name="produto8" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Burguer de frango +<br> Rosquinha +<br> Limão Guela</td>
                <td>Combo 2</td>
                <td>31,05</td>
                <td><input type="number" name="produto9" value="0" min="0"></td>
            </tr>
        </table><br>
        <button type="submit">Enviar pedido</button>
    </form>
</body>
</html>