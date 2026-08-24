        <?php

require __DIR__ . "/../../senac/senac.php";
senacClassName("Estrutura de Repetição — while");
?>

<?php senacClassSession("Estrutura while — repetição com condição", __LINE__);

$senhaDigitada = "9999";
$senhaCorreta = "9999";
$tentativas = 0;

while ($senhaDigitada !== $senhaCorreta && $tentativas < 3) {
    $tentativas++;
    echo "<p>Tentativa {$tentativas}: senha incorreta.</p>";

    // simulando uma nova tentativa (num sistema real, viria de um formulário)
    $senhaDigitada = "1234";
    echo "<p>A senha digitada novamente foi a {$senhaDigitada}</p>";
}

if ($tentativas >= 3) {
    echo "Conta bloqueada por excesso de tentativas.";
    die;
}

echo "<p> Bem vindo a sua conta!</p>"; 

// Exemplo 02

$estoqueAtual = 5;
$vendasRealizadas = 0;

while ($estoqueAtual > 0) {
    $estoqueAtual--;
    $vendasRealizadas++;
    echo "<p>Venda {$vendasRealizadas} realizada. Estoque restante: {$estoqueAtual}</p>";
}

echo "Estoque esgotado após {$vendasRealizadas} vendas.";

