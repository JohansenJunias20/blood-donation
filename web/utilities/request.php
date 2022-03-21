<?php
function request($url, $method = "GET", $headers = array(), $body = array())
{
    $method = strtoupper($method);
    if ($method != "POST" && $method != "GET") {
        throw "Unrecognized $method method, only support POST and GET request";
    }

    $real_header = "Accept-language: en";
    foreach ($headers as $header) {
        $real_header = "$real_header\r\n$header";
    }
    $opts = array(
        'http' => array(
            'method' => $method,
            'header' => $real_header,
        )
    );

    $context = stream_context_create($opts);
    return file_get_contents($url,false, $context);
}
