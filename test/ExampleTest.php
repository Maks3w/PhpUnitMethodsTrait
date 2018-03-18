<?php

declare(strict_types=1);

namespace Maks3w\PhpUnitMethodsTraitTest;

/**
 * Verify use the trait does not produce execution issues.
 */
class ExampleTest extends \PHPUnit\Framework\TestCase
{
    use FooTrait;
}
