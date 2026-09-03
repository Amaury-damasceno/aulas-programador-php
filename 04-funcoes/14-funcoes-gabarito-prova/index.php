<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Avaliação");

/* =====================================================================
   GABARITO — Lista de Exercícios: Funções
   Professor: Pedro Leandro | SENAC Caxias — Programador Web
   ===================================================================== */


/* ---------------------------------------------------------------------
   QUESTÃO 1 — Sistema de Estoque
   Calcula o valor total de um produto em estoque (quantidade x preço).
   --------------------------------------------------------------------- */
function calcularValorEmEstoque(float $precoUnitario, float $produtoParado){
return($produtoParado * $precoUnitario);


}
$precoUnitario = 219.90;
$produtoParado = 10;

$resultado = calcularValorEmEstoque(10, 219.90);
echo $resultado;
echo "<br>";
/* ---------------------------------------------------------------------
   QUESTÃO 2 — Sistema Financeiro Pessoal
   Formata um valor numérico no padrão brasileiro de dinheiro,
   usando a função nativa number_format().
   --------------------------------------------------------------------- */
function formatarValorGasto(float $valor){
   return "R$" . number_format($valor, 2, ",", ".") . "reais";
}
print formatarValorGasto(1500);
echo "<br>";
print formatarValorGasto(35025022);
echo "<br>";

/* ---------------------------------------------------------------------
   QUESTÃO 3 — Biblioteca Municipal
   Calcula a multa por atraso na devolução de um livro.
   Os 3 primeiros dias são tolerados sem cobrança.
   Cada dia de atraso além disso custa R$ 1,00.
   --------------------------------------------------------------------- */
function calcularMulta($diasAtraso){
if ($diasAtraso <= 3){
   return 0;
}else{
   return($diasAtraso - 3) * 1;
}
}
echo calcularMulta(5);
echo "<br>";
echo calcularMulta(7);
echo "<br>";
/* ---------------------------------------------------------------------
   QUESTÃO 4 — Chamados de Manutenção
   Conta quantos chamados, dentro de um array de status,
   ainda estão como "pendente". Usa foreach e count().
   --------------------------------------------------------------------- */
function contarChamadosPendentes(){

}


/* ---------------------------------------------------------------------
   QUESTÃO 5 — Banco de Talentos de Egressos
   Calcula a pontuação de compatibilidade de um egresso com uma vaga,
   com base no nível de experiência, e um bônus opcional de certificação.

   Iniciante = 40 pontos | pleno = 70 pontos | sênior = 100 pontos
   com certificação relevante: +10 pontos (parâmetro opcional)
   --------------------------------------------------------------------- */

