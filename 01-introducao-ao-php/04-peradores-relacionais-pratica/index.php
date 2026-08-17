<?php

require __DIR__ . "/../../senac/senac.php";
senacClassName("Operadores Relacionais - Prática");
?>

<?php senacClassSession("Operadores relacionais - Prática", __LINE__);

$anoDeNascimento = 1995;
$anoAtual = 2026;

$idade = $anoAtual - $anoDeNascimento;

var_dump($idade);
var_dump($idade >= 18);
var_dump($idade == 30);

$ehIdoso = ($idade >= 60);
var_dump($ehIdoso);

$login = 01;
$senha = 01;
var_dump($login === $senha );



 $senhaCadastrada = "123456";
 $senhaDoFormulario = "123456";

 var_dump($senhaDoFormulario === $senhaCadastrada);
 