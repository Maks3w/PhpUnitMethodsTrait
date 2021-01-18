<?php

namespace Maks3w\PhpUnitMethodsTrait\Framework;

trait TestCaseTrait
{
    /**
     * Returns a string representation of the test case.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    abstract public function toString() : string;
    abstract public function count() : int;
    abstract public function getActualOutputForAssertion() : string;
    abstract public function expectOutputRegex(string $expectedRegex) : void;
    abstract public function expectOutputString(string $expectedString) : void;
    /**
     * @psalm-param class-string<\Throwable> $exception
     */
    abstract public function expectException(string $exception) : void;
    /**
     * @param int|string $code
     */
    abstract public function expectExceptionCode($code) : void;
    abstract public function expectExceptionMessage(string $message) : void;
    abstract public function expectExceptionMessageMatches(string $regularExpression) : void;
    /**
     * Sets up an expectation for an exception to be raised by the code under test.
     * Information for expected exception class, expected exception message, and
     * expected exception code are retrieved from a given Exception object.
     */
    abstract public function expectExceptionObject(\Exception $exception) : void;
    abstract public function expectNotToPerformAssertions() : void;
    abstract public function expectDeprecation() : void;
    abstract public function expectDeprecationMessage(string $message) : void;
    abstract public function expectDeprecationMessageMatches(string $regularExpression) : void;
    abstract public function expectNotice() : void;
    abstract public function expectNoticeMessage(string $message) : void;
    abstract public function expectNoticeMessageMatches(string $regularExpression) : void;
    abstract public function expectWarning() : void;
    abstract public function expectWarningMessage(string $message) : void;
    abstract public function expectWarningMessageMatches(string $regularExpression) : void;
    abstract public function expectError() : void;
    abstract public function expectErrorMessage(string $message) : void;
    abstract public function expectErrorMessageMatches(string $regularExpression) : void;
    abstract public function getStatus() : int;
    abstract public function markAsRisky() : void;
    abstract public function getStatusMessage() : string;
    abstract public function hasFailed() : bool;
    /**
     * Runs the test case and collects the results in a TestResult object.
     * If no TestResult object is passed a new one will be created.
     *
     * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
     * @throws \SebastianBergmann\CodeCoverage\UnintentionallyCoveredCodeException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws CodeCoverageException
     * @throws UtilException
     */
    abstract public function run(?\PHPUnit\Framework\TestResult $result = null) : \PHPUnit\Framework\TestResult;
    /**
     * Returns a builder object to create mock objects using a fluent interface.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $className
     * @psalm-return MockBuilder<RealInstanceType>
     */
    abstract public function getMockBuilder(string $className) : \PHPUnit\Framework\MockObject\MockBuilder;
    abstract public function registerComparator(\SebastianBergmann\Comparator\Comparator $comparator) : void;
    /**
     * @return string[]
     *
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function doubledTypes() : array;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function getGroups() : array;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function setGroups(array $groups) : void;
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function getName(bool $withDataSet = true) : string;
    /**
     * Returns the size of the test.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function getSize() : int;
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function hasSize() : bool;
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function isSmall() : bool;
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function isMedium() : bool;
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function isLarge() : bool;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function getActualOutput() : string;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function hasOutput() : bool;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function doesNotPerformAssertions() : bool;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function hasExpectationOnOutput() : bool;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function getExpectedException() : ?string;
    /**
     * @return null|int|string
     *
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function getExpectedExceptionCode();
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function getExpectedExceptionMessage() : ?string;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function getExpectedExceptionMessageRegExp() : ?string;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function setRegisterMockObjectsFromTestArgumentsRecursively(bool $flag) : void;
    /**
     * @throws Throwable
     *
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function runBare() : void;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function setName(string $name) : void;
    /**
     * @param list<ExecutionOrderDependency> $dependencies
     *
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function setDependencies(array $dependencies) : void;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function setDependencyInput(array $dependencyInput) : void;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function setBeStrictAboutChangesToGlobalState(?bool $beStrictAboutChangesToGlobalState) : void;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function setBackupGlobals(?bool $backupGlobals) : void;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function setBackupStaticAttributes(?bool $backupStaticAttributes) : void;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function setRunTestInSeparateProcess(bool $runTestInSeparateProcess) : void;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function setRunClassInSeparateProcess(bool $runClassInSeparateProcess) : void;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function setPreserveGlobalState(bool $preserveGlobalState) : void;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function setInIsolation(bool $inIsolation) : void;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function isInIsolation() : bool;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function getResult();
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function setResult($result) : void;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function setOutputCallback(callable $callback) : void;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function getTestResultObject() : ?\PHPUnit\Framework\TestResult;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function setTestResultObject(\PHPUnit\Framework\TestResult $result) : void;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function registerMockObject(\PHPUnit\Framework\MockObject\MockObject $mockObject) : void;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function addToAssertionCount(int $count) : void;
    /**
     * Returns the number of assertions performed by this test.
     *
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function getNumAssertions() : int;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function usesDataProvider() : bool;
    /**
     * @return int|string
     *
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function dataName();
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function getDataSetAsString(bool $includeData = true) : string;
    /**
     * Gets the data set of a TestCase.
     *
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function getProvidedData() : array;
    /**
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract public function addWarning(string $warning) : void;
    abstract public function sortId() : string;
    /**
     * Returns the normalized test name as class::method.
     *
     * @return list<ExecutionOrderDependency>
     */
    abstract public function provides() : array;
    /**
     * Returns a list of normalized dependency names, class::method.
     *
     * This list can differ from the raw dependencies as the resolver has
     * no need for the [!][shallow]clone prefix that is filtered out
     * during normalization.
     *
     * @return list<ExecutionOrderDependency>
     */
    abstract public function requires() : array;
    /**
     * Override to run the test and assert its state.
     *
     * @throws \SebastianBergmann\ObjectEnumerator\InvalidArgumentException
     * @throws AssertionFailedError
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws Throwable
     */
    abstract protected function runTest();
    /**
     * This method is a wrapper for the ini_set() function that automatically
     * resets the modified php.ini setting to its original value after the
     * test is run.
     *
     * @throws Exception
     */
    abstract protected function iniSet(string $varName, string $newValue) : void;
    /**
     * This method is a wrapper for the setlocale() function that automatically
     * resets the locale to its original value after the test is run.
     *
     * @throws Exception
     */
    abstract protected function setLocale(... $args) : void;
    /**
     * Makes configurable stub for the specified class.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param    class-string<RealInstanceType> $originalClassName
     * @psalm-return   Stub&RealInstanceType
     */
    abstract protected function createStub(string $originalClassName) : \PHPUnit\Framework\MockObject\Stub;
    /**
     * Returns a mock object for the specified class.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    abstract protected function createMock(string $originalClassName) : \PHPUnit\Framework\MockObject\MockObject;
    /**
     * Returns a configured mock object for the specified class.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    abstract protected function createConfiguredMock(string $originalClassName, array $configuration) : \PHPUnit\Framework\MockObject\MockObject;
    /**
     * Returns a partial mock object for the specified class.
     *
     * @param string[] $methods
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    abstract protected function createPartialMock(string $originalClassName, array $methods) : \PHPUnit\Framework\MockObject\MockObject;
    /**
     * Returns a test proxy for the specified class.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    abstract protected function createTestProxy(string $originalClassName, array $constructorArguments = []) : \PHPUnit\Framework\MockObject\MockObject;
    /**
     * Mocks the specified class and returns the name of the mocked class.
     *
     * @param null|array $methods $methods
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType>|string $originalClassName
     * @psalm-return class-string<MockObject&RealInstanceType>
     */
    abstract protected function getMockClass(string $originalClassName, $methods = [], array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = false, bool $callOriginalClone = true, bool $callAutoload = true, bool $cloneArguments = false) : string;
    /**
     * Returns a mock object for the specified abstract class with all abstract
     * methods of the class mocked. Concrete methods are not mocked by default.
     * To mock concrete methods, use the 7th parameter ($mockedMethods).
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    abstract protected function getMockForAbstractClass(string $originalClassName, array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true, array $mockedMethods = [], bool $cloneArguments = false) : \PHPUnit\Framework\MockObject\MockObject;
    /**
     * Returns a mock object based on the given WSDL file.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType>|string $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    abstract protected function getMockFromWsdl(string $wsdlFile, string $originalClassName = '', string $mockClassName = '', array $methods = [], bool $callOriginalConstructor = true, array $options = []) : \PHPUnit\Framework\MockObject\MockObject;
    /**
     * Returns a mock object for the specified trait with all abstract methods
     * of the trait mocked. Concrete methods to mock can be specified with the
     * `$mockedMethods` parameter.
     *
     * @psalm-param trait-string $traitName
     */
    abstract protected function getMockForTrait(string $traitName, array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true, array $mockedMethods = [], bool $cloneArguments = false) : \PHPUnit\Framework\MockObject\MockObject;
    /**
     * Returns an object for the specified trait.
     *
     * @psalm-param trait-string $traitName
     */
    abstract protected function getObjectForTrait(string $traitName, array $arguments = [], string $traitClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true) : object;
    /**
     * @throws \Prophecy\Exception\Doubler\ClassNotFoundException
     * @throws \Prophecy\Exception\Doubler\DoubleException
     * @throws \Prophecy\Exception\Doubler\InterfaceNotFoundException
     *
     * @psalm-param class-string|null $classOrInterface
     */
    abstract protected function prophesize(?string $classOrInterface = null) : \Prophecy\Prophecy\ObjectProphecy;
    /**
     * Creates a default TestResult object.
     *
     * @internal This method is not covered by the backward compatibility promise for
     * PHPUnit
     */
    abstract protected function createResult() : \PHPUnit\Framework\TestResult;
    /**
     * This method is called when a test method did not execute successfully.
     *
     * @throws Throwable
     */
    abstract protected function onNotSuccessfulTest(\Throwable $t) : void;
    abstract protected function recordDoubledType(string $originalClassName) : void;
}

