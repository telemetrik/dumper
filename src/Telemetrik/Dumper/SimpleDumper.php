<?php

namespace Telemetrik\Dumper;

class SimpleDumper implements Dumper
{
    public static function dump($data)
    {
        print_r($data);
    }
}