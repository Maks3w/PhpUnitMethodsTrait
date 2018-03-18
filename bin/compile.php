<?php

use Maks3w\PhpUnitMethodsTrait\Compiler;

include_once __DIR__ . '/../vendor/autoload.php';

$distFolder = __DIR__ . '/../dist';
$classes = [
    PHPUnit\Framework\TestCase::class => [
        'destination' => $distFolder . '/Framework/TestCaseTrait.php',
        'methodsBlackList' => [
        ],
        'namespace' => 'Maks3w\\PhpUnitMethodsTrait\\Framework',
    ],
];

foreach ($classes as $inputClass => $options) {
    echo 'Processing ', $inputClass, '...', PHP_EOL;

    $compiler = new Compiler($inputClass, $options['namespace'], $options['methodsBlackList']);

    $destination = $options['destination'];
    $folderName = dirname($destination);
    if (!file_exists($folderName)) {
        mkdir($folderName);
    }
    file_put_contents($destination, $compiler->exportAsAbstractMethods());
}

echo 'Done.', PHP_EOL;
