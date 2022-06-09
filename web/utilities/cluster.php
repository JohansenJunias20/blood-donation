<?php

function cluster($unix_dates)
{
    //check if unix_dates array empty than return 0
    if (empty($unix_dates)) {
        return "";
    }
    $unix_dates = join(",", $unix_dates);
    $url = "http://python/cluster?p1=$unix_dates";
    return request($url);
}
