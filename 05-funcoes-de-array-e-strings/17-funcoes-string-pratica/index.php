<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Funções - strlen e mb_strlen");

echo "<h1>Atividade:</h1>";

$nome = "Vitória";
function echo_p(mixed $value){
    echo "<p>". $value ."</p>";
}
var_dump(
    strlen($nome),
    mb_strlen($nome)
);
$cidade = "São Luís";
echo_p(strtoupper($cidade));
echo_p(mb_strtoupper($cidade));

$estado = "CUIABÁ";
var_dump(strtolower($estado));
var_dump(mb_strtolower($estado));

$frase = "     conversa de miolo de pote     ";

echo_p(trim($frase));
// echo_p(mb_trim($frase));

$texto = "Tubarão que dorme a onda leva, negão";
echo_p("<p>Tubarão que dorme a onda leva, negão</p>");
echo_p(strpos($texto, "negão"));
echo_p(mb_strpos($texto, "onda"));

$chamado = "Viagem urgente: Alemanha 2027";
echo strstr($chamado, "Alemanha");
echo_p("<br>");
echo mb_strstr($chamado, "urgente");
