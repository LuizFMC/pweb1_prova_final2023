<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Olá <?php echo $_SESSION['usuario']->nome ?>, login com sucesso!</h3>

<br><br><a href="../index.php">Home</a>
<br><br><a href="sobre.php">Sobre</a>
<br><br><a href="pagina.php">Suplementação</a>
<br><br><a href="pagina2.php">Roupas</a>
<br><br><a href="contato.php">Contato</a>
</body>
</html>