<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Formulários — Método POST - Exercício");

?>

<form action="index_processar.php" method="POST">
    <input type="full name" name="nomeCompleto" placeholder="Nome Completo"><br>
    <input type="cpf" name="cpf" placeholder="CPF"><br>
    <input type="telephone" name="telefone" placeholder="Telefone"><br>
    <input type="email" name="email" placeholder="E-mail"><br>
    <input type="password" name="senha" placeholder="Senha"><br>
    <input type="confirm password" name="confirmarSenha" placeholder="Confirmar senha"><br>
    <input type="flat" name="plano" placeholder="Plano"><br>
    <button type="submit">Entrar</button>
</form>

