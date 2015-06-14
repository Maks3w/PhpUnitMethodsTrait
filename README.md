# PHPUnit methods trait

Provide a PHP Trait with methods present in PHPUnit Test Framework and expected to be implemented by TestCase.

This is useful when traits are used for test reuse and it's necessary to access to PHPUnit_Framework_TestCase
methods from the trait.

## Installing via Composer

You can use [Composer](https://getcomposer.org) .

```bash
composer require maks3w/phpunit-methods-trait
```

## Usage

Example of use in a trait

```php

use PHPUnit_Framework_Assert as Assert;
use PHPUnit_Framework_TestCase as TestCase;

trait FooTrait {
  use \Maks3w\PhpUnitMethodsTrait\Framework\TestCaseTrait;

  public function testFoo() {
    $mockFoo = $this->getMock('Foo');
    $mockFoo->expects(TestCase::any())
      ->method('getFoo')
      ->willReturn(true)
    ;

    Assert::assertTrue($mockFoo->getFoo());
  }
}
```

## FAQ

<dl>
  <dt>Q: Assertion methods are not recognized. Why?</dt>
  <dd>
    A: Assertion methods like `assertTrue` are static methods present in `PHPUnit_Framework_Assert` just access them
       using static method call `PHPUnit_Framework_Assert::assertTrue(...)`
  </dd>
</dl>

## License

  Code licensed under BSD 2 clauses terms & conditions.

  See [LICENSE.txt](LICENSE.txt) for more information.
