<?php


if (isset($_GET['path'])) {
    $path = explode("/", $_GET['path']);
} else {
    echo "Caminho não existe";
    exit;;
}

if (isset($path[1])) {
    $api = $path[1];
} else {
    echo $acao = '';;
}

if (isset($path[2])) {
    $acao = $param[2];
} else {
    echo $param = '';;
}
$method = $_SERVER['REQUEST_METHOD'];


var_dump($method);


include_once "api/produtos/produtos.php";
