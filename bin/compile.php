<?php

use Maks3w\PhpUnitMethodsTrait\Compiler;

include_once __DIR__ . '/../vendor/autoload.php';

$distFolder = __DIR__ . '/../dist';
$files = [
    'PHPUnit_Framework_TestCase' => [
        'destination' => $distFolder . '/Framework/TestCaseTrait.php',
        'methodsBlackList' => [
            'onNotSuccessfulTest',
        ],
        'namespace' => 'Maks3w\\PhpUnitMethodsTrait\\Framework',
    ],
];

foreach ($files as $inputClass => $options) {
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
