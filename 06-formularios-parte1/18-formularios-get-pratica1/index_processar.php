<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Prática — Resultado da Busca");
?>

<?php senacClassSession("Processamento da busca", __LINE__); ?>

<?php
$livros = [
    "Dom Casmurro",
    "O Cortiço",
    "Memórias Póstumas de Brás Cubas",
    "Iracema",
    "Vidas Secas",
    "O Guarani",
    "Grande Sertão: Veredas",
];

// A lógica de busca será construída aqui

if(isset($_GET["busca"])){

$termoBuscado = $_GET["busca"];
echo "<p>Resultados para: {$termoBuscado}</p>";


$resultados = [];
foreach($livros as $livro){
if(mb_stristr($livro, $termoBuscado)){
    $resultados [] = $livro;
}
}

if(count($resultados) != 0){
    foreach($resultados as $resultado){
        echo "<p>{$resultado}</p>";
    }
}else{

echo "<p>Nenhum livro foi encontrado</p>";
}



}else{
    echo"<p>Não foi possivel realizar a pesquisa!</p>";
}

?>

<?php
senacFooter("Pedro Leandro");
?>
