<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar pets</title>
</head>
<body>
     <form action="salvarAnimais.php" method="post">
        Nome do Pet: <br>
        <input type="text" name="nome"> <br><br>
        
        Tipo: <br><br>
        Cachorro<input type="radio" name="tipo">Gato<input type="radio" name="tipo"> <br><br>


        Porte: <br><br>
        Grande<input type="radio" name="tipo">  Médio<input type="radio" name="tipo">  Pequeno<input type="radio" name="tipo"> <br><br>
        Raça: <br>
        <input type="text" name="porte"> <br><br>
        Idade: <br>
        <input type="text" name="porte"> <br><br>
        Peso: <br>
        <input type="text" name="porte"> <br><br>

        <input type="submit" value="Cadastrar">
</body>
</html>