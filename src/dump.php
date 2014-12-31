<?php

use Telemetrik\Dumper\SimpleDumper;
use Telemetrik\Dumper\HtmlDumper;

function dump($data)
{
    if ('cli' === PHP_SAPI) {
        SimpleDumper::dump($data);
        echo "\n\n";

        return;
    }

    HtmlDumper::dump($data);
}