<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">

    <title>EuFood | PHP - Obrigado pela compra.</title>
</head>
<body>
    <h1>EuFood</h1>

    <?php 
        if($_GET) {
            $produto1 = $_GET['produto1'] * 16;
            $produto2 = $_GET['produto2'] * 15;
            $produto3 = $_GET['produto3'] * 19;
            $produto4 = $_GET['produto4'] * 8;
            $produto5 = $_GET['produto5'] * 11;
            $produto6 = $_GET['produto6'] * 7.5;
            $produto7 = $_GET['produto7'] * 8.5;
            $produto8 = $_GET['produto8'] * 28.35;
            $produto9 = $_GET['produto9'] * 31.05;
            $preco = $produto1 + $produto2 + $produto3 + $produto4 + $produto5 + $produto6 + $produto7 + $produto8 + $produto9;
        }

        if($preco > 0) {
            echo "<h1>Seu pagamento</h1>
                  <p>Obrigado por comprar no EuFood!</p>
                  <span>Valor da compra: R$ $preco</span>";
        }

        echo "<br>
              <p><a href='./'>Voltar para o cardápio</a></p>";
    ?>
</body>
</html>