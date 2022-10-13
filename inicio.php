
<?php
session_start();
if(!isset($_SESSION['logado']) ){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Meu sistema</title>
</head>
<body>
 <h1>Meu sistema</h1>
 <p><a href="logout.php">Sair</a></p>
 <h2>Bem-vindo à página inicial</h2>
</body>
</html>