<?php

function predict($input1,$input2){
    return request("http://python/predict?p1=$input1&p2=$input2");
}