<?php


if (isset($_GET['path'])) {
    $path = explode("/", $_GET['path']);
} else {
    echo "Caminho não existe";
    exit;
}

if (isset($path[0])) {
    $api = $path[0];
} else {
    echo "Caminho não existe";
    exit;
}

if (isset($path[1])) {
    $acao = $path[1];
} else {
    echo $acao = '';;
}

if (isset($path[2])) {
    $param = $path[2];
} else {
    echo $param = '';;
}
$method = $_SERVER['REQUEST_METHOD'];


var_dump($method);


include_once "api/produtos/produtos.php";
