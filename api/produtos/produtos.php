<?php
$prodList = "Produtosregex.txt";
//preg_match_all("([A-z]+s)+", $prodList);
if ($api == 'produtos') {
    if ($method == "GET") {
        if ($acao == '' && $param == '') echo json_encode(["ERRO" => 'Caminho nao encontrado']); {
            if ($acao == 'lista' && $param == '') {
                $handle = fopen($prodList, "r");
                while (!feof($handle)) {
                    // pega o texto linha a linha
                    $resposta = fgets($handle,);
                    // imprime os conteudo do arquivo
                    print_r($resposta);
                    if ($resposta) {
                        echo json_encode(["Produto: " => $resposta]);
                    } else {
                        echo json_encode(["dados" => 'Não existem dados para retornar']);
                    }
                }
            }
        }
    }
}
