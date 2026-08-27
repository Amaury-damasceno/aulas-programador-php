<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Arrays e a Estrutura foreach");
?>

<?php senacClassSession("O que é um array", __LINE__);

echo "<h1> Array & Foreach </h1>";
$nomeDosAlunos = [
    "Elisabeth",
    "Enzo",
    "Renan",
    "Felipe",
    "Amaury",
    "Milena",
    "Emily",
    "Guilherme",
    "Yasmin",
    "Walyson"
];

echo "<p>{$nomeDosAlunos[3]}</p>";
echo "<p>{$nomeDosAlunos[8]}</p>";

$produtos = [
"computador",
"mouse",
"teclado",
"monitor"
];

/*
echo "<p>{$nomeDosAlunos[0]}</p>";
echo "<p>{$nomeDosAlunos[1]}</p>";
echo "<p>{$nomeDosAlunos[2]}</p>";
echo "<p>{$nomeDosAlunos[3]}</p>";
*/

foreach($produtos as $produto){
echo "<p>{$produto}</p>";

}


$cursosSenac = [
    "desenvolvedor web",
    "operador de caixa",
    "cuidador",
    "segurança do trabalho"
];

foreach($cursosSenac as $cursoSenac){
    echo "<p>{$cursoSenac}</p>";
}