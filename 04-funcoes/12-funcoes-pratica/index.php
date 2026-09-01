<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Estrutura de Repetição — for");
?>

<?php senacClassSession("Estrutura for — sintaxe e uso", __LINE__);
echo "<h1>Prática 01 - funções</h1>";

function olaMundo(){
    echo "<p>Olá, Mundo!</p>";
}
for($contador = 0; $contador < 3; $contador++){
    olaMundo();
}
//com parâmetros e tipos
function saudacao(string $nome){
    echo "<p>Olá, {$nome}. seja muito bem vindo(a)!</p>";
}
saudacao("Amaury");
$aluno = "Guilherme";
saudacao($aluno);
saudacao("Milena");
saudacao("1054896");


function calcularIdade(int $anoNascimento){
    $idade = date("Y") - $anoNascimento;
    echo "<p>Nasceu em {$anoNascimento} e nesse ano você faz {$idade} anos de idade</p>";
}
calcularIdade(1995);
calcularIdade(2004);

// com parâmetros obrigatorios e opcionais

function saudacaoPersonalizada(string $nome, string $saudacao = "Seja muito bem vindo(a)!"){
echo "<p>Olá, {$nome}. {$saudacao}</p>";
}
saudacaoPersonalizada("Elisabeth");
saudacaoPersonalizada("Milena", "chegou seu pedido!");

// Aprendendo a função do => return




function verificarMaiorIdade(int $anoNascimento){
$idade = 2026 - $anoNascimento;

if($idade < 18){
    return false;
}else if($idade >= 18){
    return true;
}
}
if(verificarMaiorIdade(2005) === true){
    echo "<p>Você é MAIOR de idade!!</p>";
}else{
    echo "<p>Você é MENOR idade!!</p>";
}

function calculaIdade(int $anoNascimento, string $nome = ""){
    $idade = 2026 - $anoNascimento;
    return $idade;
}
$idadeDaFabricia = calculaIdade(1998, "Fabricia");
echo calculaIdade(2011) . " anos de idade";

//


echo "Olá, mundo!";

function echo_p(string $string){
    echo "<p>{$string}</p>";
}
echo_p("Olá, Mundo");
echo_p("A Fabricia tem {$idadeDaFabricia} anos de idade");
echo_p(calcularIdade(2011) . "anos de idade");

//

$comissao = 20000 * 0.1;
echo "R$ " . number_format($comissao, 2, ",", ".");

