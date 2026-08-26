<?php

require __DIR__ . "/../../senac/senac.php";
senacClassName("Estrutura de Repetição — while");
?>

<?php senacClassSession("Exercício — repetição com condição", __LINE__);

echo "<h1>Atividade - 01</h1>";

$pessoas = 15;
while ($pessoas > 0) {
    echo "<p>Ainda há $pessoas pessoa(s) na sua frente.</p>";
    $pessoas--;
}
echo "<p>É a sua vez de ser atendido!</p>";


echo "<h1>Atividade - 02</h1>";

const CAPACIDADE_MAXIMA = 20;

$alunosNaSala = 1;
$alunosEmAtraso = 0;

while ($alunosNaSala <= CAPACIDADE_MAXIMA) {

if ($alunosNaSala % 3 === 0){
echo "<P>Bloqueado: Aluno {$alunosNaSala} está coma mensalidade em atraso </p>";
$alunosEmAtraso++; // quantidade de alunos em atraso.
$alunosNaSala++;
continue;
}


echo "<p>Aluno liberado. Entrada {$alunosNaSala} de " . CAPACIDADE_MAXIMA . ".</p>";
$alunosNaSala++;
}

echo"<p><strong> Capacidade Maxima atingida</strong></p>";
echo"<p>Total de bloqueios realizados: {$alunosEmAtraso}</p>";
