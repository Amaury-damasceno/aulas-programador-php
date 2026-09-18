<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Formulários — Método POST");


$comentario = "<h1>Olá, mundo!</h1>";

echo $comentario;

echo htmlspecialchars($comentario);
echo"<br>";
echo"<br>";
echo strip_tags($comentario);

$novoComentario = "<script>alert(`Olá, mundo`)</script>";
echo"<br>";
echo"<br>";
echo htmlspecialchars($novoComentario);
echo"<br>";
echo"<br>";
echo strip_tags($novoComentario);

$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

var_dump($email);
if(!$email){
    echo "<p>Informe um e-mail válido</p>";
}else{
    echo "<p>Muito bem, isso é um e-mail</p>";
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade-sanatização</title>
</head>
<body>
    
<form action="index.php" method="POST">
<label for="email">Email</label>
<input type="text" name="email" id="email">

<button type="submit">verificar</button>

</body>
</html>