<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Prática — Processamento do Login");
?>

<?php senacClassSession("Processamento do login - Damasceno", __LINE__); ?>

<?php
$contas = [
    ["nome" => "Ana Souza",   "email" => "ana@email.com",   "senha" => "123456"],
    ["nome" => "Carlos Lima", "email" => "carlos@email.com", "senha" => "abcdef"],
    ["nome" => "Amaury Damasceno", "email" => "amaury@email.com", "senha" => "13579"]
];

$email = $_POST["email"];
$senha = $_POST["senha"];

if(empty($email) || empty($senha)){
    echo "<p>Os campos e-mail e senha são obrigatórios</p>";
    die;
}

foreach ($contas as $conta){

    $loginVerificado = false;

    if($email === $conta["email"] && $senha === $conta["senha"]){
$loginVerificado = true;
    }
}

if($loginVerificado){
echo "<p>Loguin efetuado com sucesso!</p>";
}else{
    echo "<p>Email e/ou senha incorretos!</p>";
}

?>

<?php
senacFooter("Pedro Leandro");
?>
