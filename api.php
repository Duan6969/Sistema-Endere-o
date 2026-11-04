<?php
function buscarCEP(string $cep){
    if(strlen($cep !== 8)) {
        return [
            "erro" => "Cep precisa ter 8 caracteres"
        ];
    }
    $url = file_get_contents("https://viacep.com.br/ws/01001000/json/");
    $dados = json_decode($url, true);
    if(isset($dados['erro'])) {
        return [
            "erro" => "Cep não encontrado!"
        ];
    }
}
?>