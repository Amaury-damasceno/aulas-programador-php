<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Prática — Processamento da Avaliação");
?>

<?php senacClassSession("Processamento da avaliação", __LINE__);



$nota = filter_input(INPUT_POST, "nota", FILTER_VALIDATE_FLOAT);

if (!$nota) {
    echo "<p>Informe uma nota válida.</p>";
}

if (isset($_POST['nota'])) {
    $nota = $_POST['nota'];


    if (!is_numeric($nota)) {
        $erro = "A nota deve ser um número.";
    } else {
        $nota = floatval($nota);

        if ($nota < 0 || $nota > 10) {
            $erro = "A nota deve estar entre 0 e 10.";
        } else {

            echo "Nota válida: " . $nota;
        }
    }

    if (isset($erro)) {
        echo $erro;
    }
}


$comentario = filter_input(INPUT_POST, "comentario", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

echo $comentario;


$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);


if (!$email) {
    echo "<p>Informe um e-mail válido</p>";
} else {
    echo "<p>Muito bem, isso é um e-mail</p>";
    die;
}




senacFooter("Pedro Leandro");