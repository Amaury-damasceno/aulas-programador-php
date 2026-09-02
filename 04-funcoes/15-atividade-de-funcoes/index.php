<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Estrutura de Repetição — for");

echo "<h1>Atividade:</h1>";

function calcularMediaBimestre(int $mediaFinal){
    echo "<p>A média final dos 4 bimestres é de {$mediaFinal}</p>";

}


//

$nota1 = 10;
$nota2 = 7;
$nota3 = 5;
$nota4 = 9.5;
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

function calcularMedia(float $nota1, float $nota2, float $nota3, float $nota4){
    return ($nota1 + $nota2 + $nota3 + $nota4) / 4;
}
$mediaDaEmily = calcularMedia(10, 7, 5, 9.5);
$mediaDoRyan = calcularMedia(8, 7, 5.6, 6.5);
$mediaDoMiguel = calcularMedia(10, 4, 6.5, 10);

echo "Média da Emily: " . number_format($mediaDaEmily, 1, ".");
echo "<br>";
echo "Média do Ryan: " . number_format($mediaDoRyan, 1, ".");
echo "<br>";
echo "Média do Miguel: " . number_format($mediaDoMiguel, 1, ".");

//

$notasDaEmily = [
    10, 10, 10, 10
];

function calculaMedia(array $notas){
    $soma = 0;
    foreach($notas as $nota){
        $soma = $soma = $nota;
    }
    $media = $soma / count($notas);
    return $media;
}

echo "<br>";
echo calculaMedia($notasDaEmily);
