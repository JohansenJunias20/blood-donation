<?php

function predict($input1,$input2,$input3){
// function predict($input1,$input2,$input3,$input4){
    // return request("http://python/predict?p1=$input1&p2=$input2&p3=$input3&p4=$input4");
    $input3 = join(",",$input3);
    $url = "http://python/predict?p1=$input1&p2=$input2&p3=$input3";
    echo $url;
    return request($url);
}