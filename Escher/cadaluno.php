<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvedor</title>
</head>
<body>
<h1>Cadastro do aluno</h1>

  <label>Cod aluno</label>  <input type="text" name="Cod aluno"><br>

  <label>Aluno</label> <input type="text" name=""><br>

   <label>DtNascimento</label> <input type="date" name="calcular"><br>

   <label>Email</label> <input type="text" name=""><br>

   <form action="cadescola.php" method="POST">
    <button type="submit">Enviar</button>    
    <?php include 'footer.php';?>
    
</body>
</html>