<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Escola</h1>
    <label>CodEscola</label> <input type="text" name="Codescola" required><br>
    <label>NomeEscola</label> <input type="text" name="nomeescola"required><br>
    <label>cnpj</label> <input type="text" name="cnpj"required><br>
    <label>cidade</label> <input type="text" name="cidade"required><br>
    <label>email</label> <input type="text" name="email"required><br>

    <form action="cadmensalidade.php" method="POST">
    <button type="submit">Enviar</button>
    <?php include 'footer.php';?>
</body>
</html>