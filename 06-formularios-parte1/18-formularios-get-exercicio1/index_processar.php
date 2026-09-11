<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Atividade supervisionada");
?>

<?php senacClassSession("Processamento da busca", __LINE__);

$egressos = [
    "Ana Carolina Souza",
    "Carlos Eduardo Lima",
    "Sergio Sacana",
    "Maria Luz Firmino",
    "Thiago Eustaquio Barros",
    "Clara Limeira",
    "Sthefane Garcia",
    "Brenda Silva"
];



if (isset($_GET["busca"])) {

    $termoBuscado = trim($_GET["busca"]);
    echo "<p>Resultados para: {$termoBuscado}</p>";

    $resultados = [];

    foreach ($egressos as $egresso) {

        if (mb_stristr($egresso, $termoBuscado)) {
            $resultados[] = $egresso;
        }

    }
    if (count($resultados) > 0) {
        foreach ($resultados as $resultado) {
            echo "<p>{$resultado}</p>";
        }
    } else {

        echo "<p>Nenhum egresso encontrado</p>";
    }



} else {
    echo "<p>Não foi possivel realizar a pesquisa!</p>";
}



