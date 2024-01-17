<?php
    error_reporting(0);
    function API_PF($email, $password){
        $date = date('d/m/Y H:i:s');
        $http = [
            'Host: api.contadigital.pinpag.com.br',
            'Sec-Ch-Ua: "Not_A Brand";v="8", "Chromium";v="120"',
            'Accept: application/json, text/plain, */*',
            'Content-Type: application/json',
            'Sec-Ch-Ua-Mobile: ?0',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.6099.71 Safari/537.36',
            'Sec-Ch-Ua-Platform: "Windows"',
            'Origin: https://www.contadigital.pinpag.com.br',
            'Sec-Fetch-Site: same-site',
            'Sec-Fetch-Mode: cors',
            'Sec-Fetch-Dest: empty',
            'Referer: https://www.contadigital.pinpag.com.br/',
            'Priority: u=1, i',
        ];
        $post = '{"document_type":"PF","email":"'.$email.'","document":null,"password":"'.$password.'","session_id":null,"location":"Beberibe-Ceará-BR","datetime":"'.$date.'"}';
        $curl = curl_init();
        curl_setopt_array($curl,[
            CURLOPT_URL => "https://api.contadigital.pinpag.com.br/v1/app/client/auth",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => $http,
            CURLOPT_POSTFIELDS => $post,
        ]);
        $result = curl_exec($curl);
        curl_close($curl);
        $result =  json_decode($result, true);
        var_dump($result);
}

function API_PJ($email,$password){
    $date = date('d/m/Y H:i:s');
    $http = [
        'Host: api.contadigital.pinpag.com.br',
        'Sec-Ch-Ua: "Not_A Brand";v="8", "Chromium";v="120"',
        'Accept: application/json, text/plain, */*',
        'Content-Type: application/json',
        'Sec-Ch-Ua-Mobile: ?0',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.6099.71 Safari/537.36',
        'Sec-Ch-Ua-Platform: "Windows"',
        'Origin: https://www.contadigital.pinpag.com.br',
        'Sec-Fetch-Site: same-site',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Dest: empty',
        'Referer: https://www.contadigital.pinpag.com.br/',
        'Priority: u=1, i',
    ];
    $post = '{"document_type":"PJ","email":"'.$email.'","document":null,"password":"'.$password.'","session_id":null,"location":"Beberibe-Ceará-BR","datetime":"'.$date.'"}';
    $curl = curl_init();
    curl_setopt_array($curl,[
        CURLOPT_URL => "https://api.contadigital.pinpag.com.br/v1/app/client/auth",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPHEADER => $http,
        CURLOPT_POSTFIELDS => $post,
    ]);
    $result = curl_exec($curl);
    curl_close($curl);
    $result =  json_decode($result, true);
    var_dump($result);
}
?>