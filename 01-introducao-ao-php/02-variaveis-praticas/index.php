<?php

$nome = "Amaury Damasceno";
$anoDeNascimento = 1995;
$curso = "Programador Web";
$altura = 1.68;
$peso = 70.0;
$temTatuagem = true;

echo "Meu nome é {$nome} e eu faço o curso de {$curso}, eu nasci no ano de {$anoDeNascimento}";

var_dump($altura, $peso);
var_dump($temTatuagem);


// Exercicío prático





$filme = "Vingadores - Guerre infinita";
$genero = "ficção científica";
$anoDeLancamento = 2018;
$sinopse = "O filme relata uma guerra interna no grupo de heróis: Vingadores, onde a equipe se divide em dois grupos defendendo seus interesses, daí para frente é herói VS herói, além de tiro, porrada e bomba...";



echo "<h2>{$filme}</h2>";
echo "<h3>O genero do filme é {$genero}, lançado nos cinemas no ano de {$anoDeLancamento}</h3>";
echo "<p>{$sinopse}</p>";