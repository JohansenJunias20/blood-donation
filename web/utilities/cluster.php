<?php

function cluster($unix_dates)
{
    $unix_dates = join(",", $unix_dates);
    $url = "http://python/cluster?p1=$unix_dates";
    return request($url);
}
