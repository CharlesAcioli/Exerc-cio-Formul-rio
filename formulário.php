<?php
$folder = __DIR__ . "/uploads/";

if(!file_exists($folder) || !is_dir($folder)){
    mkdir($folder,  0755);
}

var_dump([                   //isso sera configurações no do nosse servidor
    "filesize" => ini_get("upload_max_filesize"),   //tamanho maximo do arquivo
    "postsize" => ini_get("post_max_size"),         //soma de todos os arquivos do servidor
]);


$getPost = filter_input(INPUT_GET, "post", FILTER_VALIDATE_BOOLEAN);
var_dump($_FILES);
//VAMOS LIMITAR TAMANHO DO UPLOAD PARA O TIPO BOOLEANO

if($_FILES && !empty($_FILES['file']['name'])) {
    $fileUpload = $_FILES['file'];
    var_dump($_FILES);

    $allowebTypes = [ /*Tipo de arquivos que vamos aceitar, na documentação podemos pesquisar por todos os name types*/
        "image/jpeg",
        "image/png",
        "application/pdf"
    ];
}elseif ( $getPost){ /*Posso usar esse elseif para caso o arquivo passe ele emita um aviso de arquivo grande*/
    echo "<p class='trigger warning'>Whoops parece que o arquivo que você selecionou é grande demais!</p>";
} else{
    if($_FILES){
        echo "<p class='trigger warning'>Selecione um arquivo antes de Enviar!</p>";
    }
}

include __DIR__ . "/index.html";
var_dump(scandir(__DIR__ ."/uploads"));
?>