<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Prática — Upload de imagem");
?>

<?php senacClassSession("Upload de imagem", __LINE__);


$foto = $_FILES["foto"];

if(!isset($foto) || $foto["error"] !== UPLOAD_ERR_OK){
echo "<p>Arquivo corrompido ou não existe!</p>";
die;
}

const TAMANHO_MAXIMO = 2 * 1024 * 1024; // 2MB

if($foto["size"] >TAMANHO_MAXIMO){
    echo "<P>ARQUIVO EXCEDEU O TAMANHO PERMITIDO!</P>";
    die;
    }

$extensoesPermitidas = [
    "jpg",
    "jpeg",
    "png",
    "webp"
];

$extensaoFoto = mb_strtolower(pathinfo($foto["name"], PATHINFO_EXTENSION));

if(!in_array($extensaoFoto, $extensoesPermitidas)){
   echo "<p>O arquivo não tem o tipo de extensão permitido!</p>";
   die;
}

$mimeTypesPermitidos = [
    "image/png",
    "image/jpeg",
    "image/webp"
];

$mimeTypesfoto = mime_content_type($foto["tmp_name"]);
if(!in_array($mimeTypesfoto, $mimeTypesPermitidos)){
    echo "<p> O arquivo não tem o conteudo aceito!</p>";
    die;
}

$novoNome = uniqid() . "." . $extensaoFoto;

$destino = __DIR__ . "/uploads/" . $novoNome;

if(move_uploaded_file($foto["tmp_name"], $destino)){
    echo"<p>Imagem adicionada com sucesso!</p>";
}else{
    echo"<p>Erro ao enviar arquivo</p>";
};
