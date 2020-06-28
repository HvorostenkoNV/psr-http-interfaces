<?php
declare(strict_types=1);

use Psr\Http\Message\RequestInterface;

include '..'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

$answer = interface_exists(RequestInterface::class)
    ? [
        'OK',
        '=)',
    ]
    : [
        'Something wrong!',
        '=(',
    ];

echo implode("\n", $answer)."\n";