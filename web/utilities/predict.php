<?php

function predict($input){
    return request("http://python/predict?p1=$input");
}