<?php

function directory($dir)
{
    //$dir = '/var/www/example.com/html/4';

    return scandir($dir);
}

print_r(directory(__DIR__));
//print_r(directory($dir));