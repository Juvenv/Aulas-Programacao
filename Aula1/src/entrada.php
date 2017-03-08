<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Exercicios.php';

echo stream_get_line(STDIN, 8, PHP_EOL);
//multa ( stream_get_line ( STDIN, 1024, PHP_EOL ), stream_get_line ( STDIN, 1024, PHP_EOL ) );