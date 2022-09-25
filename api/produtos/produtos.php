<?php

$prodList = "Produtos.txt";
$pattern = "/s/";

if ($api == 'produtos') {
    if ($method == "GET") {
        if ($acao == '' && $param == '') echo json_encode(["ERRO" => 'Caminho nao encontrado']); {
            if ($acao == 'lista' && $param == '') {
                $handle = fopen($prodList, "r");
                while (!feof($handle)) {
                    $resposta = fgets($handle,);
                    $resposta = str_ireplace(array("\r", "\n", '\r', '\n'), '', $resposta);
                    if (preg_match($pattern, $prodList)) {
                        echo "<hr>";
                        echo json_encode(["Produtos:" => $resposta]);
                    }
                }
            }
        }
    }
}
