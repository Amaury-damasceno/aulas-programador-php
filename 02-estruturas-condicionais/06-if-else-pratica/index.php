<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Estruturas Condicionais — if, else, elseif");
?>

<?php senacClassSession("if — sozinho - prática", __LINE__);

$valorTotalDoCarrinho = 370.00;
$valorMinimoFreteGratis = 249.90;

if ($valorTotalDoCarrinho >= $valorMinimoFreteGratis){
    echo "<p>Você ganhou frete grátis na sua compra!</p>";
}


//Números pares e ímpares

$numero = 5;

if($numero % 2 === 0){
    echo "<p>O número {$numero} é par!</p>";
}else{
    echo "<p>O número {$numero} é ímpar!</p>";
}

//Horario do check-in

$horarioDeChegada = 20;

if($horarioDeChegada >= 14 && $horarioDeChegada <= 22){
    echo "<p>Pode fazer check-in</p>";
}else{
    echo "<p>Check-in está indisponível</p>";
}

// qual pet combina com você

$tipoDeMoradia = "apartamento";// apartamento ou casa
$tempoDisponivel = "pouco";// pouco ou muito
$prefereSilencio = true;//true = prefere ou false= não prefere

if ($tipoDeMoradia === "apartemento" && $tempoDisponivel === "pouco") {
    echo "<p>Você pode ter um peixe de estimação</p>";
}
else if ($tipoDeMoradia === "apartamento" && $prefereSilencio === true) {
     echo "<p>Você pode ter um gato de estimação</p>";
}
else if ($tipoDeMoradia === "casa" && $tempoDisponivel === "muito") {
    echo "<p>Você pode ter um cachorro de estimação</p>";
} else {
    echo "<p>Você pode ter um hamster de estimação</p>";
}

//Atividade de RPG

$tipoDEPersonagem = "força";// força ou magia
$trabalhoEmEquipe = true;// true ou false
$tipoDeDisputa = "atacar";// atacar ou defender

if ($tipoDEPersonagem === )
    