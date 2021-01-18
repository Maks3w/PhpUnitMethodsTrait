<?php

declare(strict_types=1);

namespace Maks3w\PhpUnitMethodsTrait;

/**
 * Example of a reusable trait of test methods.
 */
trait FooTrait
{
    use Framework\TestCaseTrait;

    public function testFoo()
    {
        /** @var \ArrayAccess|\PHPUnit\Framework\MockObject\MockObject $mockArrayAccess */
        $mockArrayAccess = $this->createMock(\ArrayAccess::class);

        $mockArrayAccess->expects(\PHPUnit\Framework\TestCase::any())
            ->method('offsetExists')
            ->willReturn(true);

        \PHPUnit\Framework\Assert::assertTrue($mockArrayAccess->offsetExists('foo'));

        $this->expectException('Exception');
        throw new \Exception();
    }
}
