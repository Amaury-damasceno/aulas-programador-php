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
