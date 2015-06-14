<?php

namespace Maks3w\PhpUnitMethodsTraitTest;

/**
 * Verify use the trait does not produce execution issues.
 */
class ExampleTest extends \PHPUnit_Framework_TestCase
{
    use FooTrait;
}
