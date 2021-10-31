<?php
function curl($url='')
{
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_SSL_VERIFYPEER => false, //跳過驗證檢查
        CURLOPT_SSL_VERIFYHOST => false, //從證書中檢查SSL加密演算法是否存在
    ));
    $response = curl_exec($curl);
    if($error = curl_error($curl))
    {
        die($error);
    }
    curl_close($curl);
    return $response;
}

function removeQuote($data)
{
    if (!$data) {
        return [];
    }

    foreach($data as $k => $v) {
        $data[$k] = str_replace('"', '', $v);
    }
    return $data;
}

function changeUrlAll($data)
{
    if (!$data) {
        return [];
    }

    foreach($data as $k => $v) {
        $data[$k] = str_replace(MARJORIE_URL, '..', $v);
    }
    return $data;
}

function changeUrlOne($img)
{
    if (!$img) {
        return '';
    }

    $img = str_replace("/template/", "https://www.marjorie.co/template/", $img);
    return $img;
}