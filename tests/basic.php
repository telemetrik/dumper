<?php

require_once __DIR__ . '/../vendor/autoload.php';

$printrDumper = new Telemetrik\Dumper\SimpleDumper();
$preDecorator = new \Telemetrik\Dumper\HtmlDumper($printrDumper);

dump('string');
dump(['foo' => 'bar', 'mega' => 'deth']);
dump(new DateTime());
