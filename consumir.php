<?php

/* url da api */
$url_api = "";

/* inicia a api */
$iniciar = curl_init($url_api);

/* converte a resposta em um array e não deixa em uma unica string*/
curl_setopt($iniciar,CURLOPT_RETURNTRANSFER,true);

/* verifica a ssl */
curl_setopt($iniciar,CURLOPT_SSL_VERIFYPEER,false);

/* Converte json para objeto php */
$acessa = json_decode(curl_exec($iniciar));

/* lista os dados */
foreach($acessa->dados as $coluna) {
   /*especifique a coluna seguida do operador -> para se rerenciar ao campo */
    echo '$coluna' . '->' . 'campo';
}

