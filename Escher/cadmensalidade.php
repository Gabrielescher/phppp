<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensalidade</title>
</head>
<body>
    <h1>Mensalidade do Aluno</h1>
    <form action="cadmensalidade.php" method="POST">
        <label for="codmens">CodMens:</label>
        
        <input type="text" id="codmens" name="codmens" required><br>
        
        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required><br>

        
        <label for="valor">Valor da mensalidade:</label>

        <input type="number" id="valor" name="valor" step="0.01" required><br>

        <label for="aumento">Aumento (%):</label>

        <input type="number" id="aumento" name="aumento" step="0.01" required><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       
        $valor = isset($_POST['valor']) ? (float)$_POST['valor'] : 0;

        $aumento = isset($_POST['aumento']) ? (float)$_POST['aumento'] : 0;



       
        $valorFinal = $valor + ($valor * ($aumento / 100));

        
        echo "Valor original da mensalidade: R$ " . number_format($valor, 2, ',', '.') . "<br>";



        echo "Aumento aplicado: " . number_format($aumento, 2, ',', '.') . "%<br>";

        echo "Valor final da mensalidade: R$ " . number_format($valorFinal, 2, ',', '.');
    }
    ?>

    <?php include 'footer.php'; ?>
</body>
</html>