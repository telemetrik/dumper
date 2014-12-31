<?php

namespace Telemetrik\Dumper;

class HtmlDumper implements Dumper
{
    public static function dump($data)
    {
        echo '<pre style="white-space: pre;padding:10px;font-family:Consolas,Menlo,Monaco,Lucida Console,Liberation Mono,DejaVu Sans Mono,Bitstream Vera Sans Mono,Courier New,monospace,serif;margin-bottom:10px;background-color:#eee">';
        SimpleDumper::dump($data);
        echo '</pre>';
    }
}