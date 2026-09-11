<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Formularios - get - prática");

echo "<h1>Atividade:</h1>";

var_dump(
    $_GET
);

$livroBuscado = $_GET["livro"];
var_dump($livroBuscado);