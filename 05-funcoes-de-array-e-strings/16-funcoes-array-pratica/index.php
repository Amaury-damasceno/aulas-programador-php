<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Funções - array");

echo "<h1>Atividade:</h1>";

$petshopp = ["tosa", "manicure", "pedicure", "pintura", "passeio", "escola-canina"];

echo count($petshopp);

$numeros = [1, 2, 3, 4, 5, 6];
var_dump(
    in_array("1", $numeros),
    in_array("1", $numeros, true),
    in_array(1, $numeros, true)
);

$contatosChip1 = ["Andre", "João", "Ster"];
$contatosChip2 = ["Sophia", "Gabriel", "Mirelly"];

   echo "<p>Executou o array_push()</p>";
    array_push($contatosChip1, "Milena");
    var_dump(
        $contatosChip1
    );
   echo "<p>Executou o array_merge()</p>";
    $todosOsContatos = array_merge(
        $contatosChip1,
        $contatosChip2
    );
    var_dump($todosOsContatos);


       echo "<p>Executou o sort e rsort()</p>";


var_dump(
   array_reverse($todosOsContatos),
   
);