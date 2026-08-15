<?php

$valorDaHora = 54.75;
$quantidadeDeHorasTrabalhadas = 144;
$salario = $valorDaHora * $quantidadeDeHorasTrabalhadas;
$nome = "Renda extra:";

echo "<h2>{$nome}</h2>";
echo "<p>O salário total do mês é de R$ {$salario}.</p>";

$quantidadeDeAmigos = 4;
$valorDaComanda = 177.57;

$quantidadeDePessoas = $quantidadeDeAmigos++;

$valorPorPessoa = $valorDaComanda / $quantidadeDePessoas;

echo "O valor que cada pessoa irá pagar é de R$ {$valorPorPessoa}";


$pesoDoSaco = 20;
$consumoDiario = 0.500;

$valorDoConsumoDoSaco = $pesoDoSaco / $consumoDiario;

echo "<p>A quantidade de ração que o doguinho come é de {$valorDoConsumoDoSaco}</p>";
