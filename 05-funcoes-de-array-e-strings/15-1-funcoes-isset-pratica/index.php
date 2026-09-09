<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Funções - isset");

echo "<h1>Atividade:</h1>";

$nome ="Amaury Damasceno";
var_dump(
    isset($nome),
    isset($sobrenome)
);

if(isset($nome)){
    //se isso for verdade
}

if(!isset($nome)){
    //se isso não for verdade

}


$senha = "abcd123";
$confirmaSenha = "";
var_dump(
    empty($senha),
    empty($confirmaSenha)
);

if(empty($senha)){

};

if(!empty($senha)){

};


$telefone = null;

var_dump(
    is_null($nome),
    is_null($confirmaSenha),
    is_null($telefone),
    isset($telefone),
    empty($telefone)
);
