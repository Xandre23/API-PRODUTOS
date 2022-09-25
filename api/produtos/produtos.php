<?php

$prodList = "Produtos.txt";
$pattern = "/s/";
//preg_match($pattern, $prodList, $matches);

if ($api == 'produtos') {
    if ($method == "GET") {
        if ($acao == '' && $param == '') echo json_encode(["ERRO" => 'Caminho nao encontrado']); {
            if ($acao == 'lista' && $param == '') {
                $handle = fopen($prodList, "r");
                while (!feof($handle)) {

                    // pega o texto linha a linha
                    $resposta = fgets($handle,);
                    $resposta = str_ireplace(array("\r", "\n", '\r', '\n'), '', $resposta);
                    if (preg_match($pattern, $prodList)) {
                        echo "<hr>";
                        echo json_encode(["Produtos:" => $resposta]);
                        var_dump(($resposta));
                    }
                }
            }
        }
    }
}
