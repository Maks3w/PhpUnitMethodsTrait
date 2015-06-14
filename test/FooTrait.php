<?php

namespace Maks3w\PhpUnitMethodsTraitTest;

/**
 * Example of a reusable trait of test methods.
 */
trait FooTrait
{
    use \Maks3w\PhpUnitMethodsTrait\Framework\TestCaseTrait;

    public function testFoo()
    {
        /** @var \ArrayAccess|\PHPUnit_Framework_MockObject_MockObject $mockArrayAccess */
        $mockArrayAccess = $this->getMock('ArrayAccess');

        $mockArrayAccess->expects(\PHPUnit_Framework_TestCase::any())
            ->method('offsetExists')
            ->willReturn(true);

        \PHPUnit_Framework_Assert::assertTrue($mockArrayAccess->offsetExists('foo'));

        $this->setExpectedException('Exception');
        throw new \Exception;
    }
}
