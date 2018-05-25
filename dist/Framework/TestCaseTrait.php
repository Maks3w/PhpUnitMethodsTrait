<?php

namespace Maks3w\PhpUnitMethodsTrait\Framework;

trait TestCaseTrait
{

    /**
     * Returns a string representation of the test case.
     *
     * @throws SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    abstract public function toString() : string;
    abstract public function count() : int;
    abstract public function getGroups() : array;
    abstract public function setGroups(array $groups) : void;
    abstract public function getAnnotations() : array;
    /**
     * @throws SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    abstract public function getName(bool $withDataSet = true) : ?string;
    /**
     * Returns the size of the test.
     *
     * @throws SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    abstract public function getSize() : int;
    /**
     * @throws SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    abstract public function hasSize() : bool;
    /**
     * @throws SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    abstract public function isSmall() : bool;
    /**
     * @throws SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    abstract public function isMedium() : bool;
    /**
     * @throws SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    abstract public function isLarge() : bool;
    abstract public function getActualOutput() : string;
    abstract public function hasOutput() : bool;
    abstract public function doesNotPerformAssertions() : bool;
    abstract public function expectOutputRegex(string $expectedRegex) : void;
    abstract public function expectOutputString(string $expectedString) : void;
    abstract public function hasExpectationOnOutput() : bool;
    abstract public function getExpectedException() : ?string;
    /**
     * @return null|int|string
     */
    abstract public function getExpectedExceptionCode();
    abstract public function getExpectedExceptionMessage() : string;
    abstract public function getExpectedExceptionMessageRegExp() : string;
    abstract public function expectException(string $exception) : void;
    /**
     * @param int|string $code
     */
    abstract public function expectExceptionCode($code) : void;
    abstract public function expectExceptionMessage(string $message) : void;
    abstract public function expectExceptionMessageRegExp(string $messageRegExp) : void;
    /**
     * Sets up an expectation for an exception to be raised by the code under test.
     * Information for expected exception class, expected exception message, and
     * expected exception code are retrieved from a given Exception object.
     */
    abstract public function expectExceptionObject(\Exception $exception) : void;
    abstract public function setRegisterMockObjectsFromTestArgumentsRecursively(bool $flag) : void;
    abstract public function setUseErrorHandler(bool $useErrorHandler) : void;
    abstract public function getStatus() : int;
    abstract public function markAsRisky() : void;
    abstract public function getStatusMessage() : string;
    abstract public function hasFailed() : bool;
    /**
     * Runs the test case and collects the results in a TestResult object.
     * If no TestResult object is passed a new one will be created.
     *
     * @throws CodeCoverageException
     * @throws ReflectionException
     * @throws SebastianBergmann\CodeCoverage\CoveredCodeNotExecutedException
     * @throws SebastianBergmann\CodeCoverage\InvalidArgumentException
     * @throws SebastianBergmann\CodeCoverage\MissingCoversAnnotationException
     * @throws SebastianBergmann\CodeCoverage\RuntimeException
     * @throws SebastianBergmann\CodeCoverage\UnintentionallyCoveredCodeException
     * @throws SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    abstract public function run(?\PHPUnit\Framework\TestResult $result = null) : \PHPUnit\Framework\TestResult;
    abstract public function runBare() : void;
    abstract public function setName(string $name) : void;
    /**
     * @param string[] $dependencies
     */
    abstract public function setDependencies(array $dependencies) : void;
    abstract public function hasDependencies() : bool;
    abstract public function setDependencyInput(array $dependencyInput) : void;
    abstract public function setBeStrictAboutChangesToGlobalState(?bool $beStrictAboutChangesToGlobalState) : void;
    abstract public function setBackupGlobals(?bool $backupGlobals) : void;
    abstract public function setBackupStaticAttributes(?bool $backupStaticAttributes) : void;
    abstract public function setRunTestInSeparateProcess(bool $runTestInSeparateProcess) : void;
    abstract public function setRunClassInSeparateProcess(bool $runClassInSeparateProcess) : void;
    abstract public function setPreserveGlobalState(bool $preserveGlobalState) : void;
    abstract public function setInIsolation(bool $inIsolation) : void;
    abstract public function isInIsolation() : bool;
    /**
     * @return mixed
     */
    abstract public function getResult();
    /**
     * @param mixed $result
     */
    abstract public function setResult($result) : void;
    abstract public function setOutputCallback(callable $callback) : void;
    abstract public function getTestResultObject() : ?\PHPUnit\Framework\TestResult;
    abstract public function setTestResultObject(\PHPUnit\Framework\TestResult $result) : void;
    abstract public function registerMockObject(\PHPUnit\Framework\MockObject\MockObject $mockObject) : void;
    /**
     * Returns a builder object to create mock objects using a fluent interface.
     *
     * @param string|string[] $className
     */
    abstract public function getMockBuilder($className) : \PHPUnit\Framework\MockObject\MockBuilder;
    abstract public function addToAssertionCount(int $count) : void;
    /**
     * Returns the number of assertions performed by this test.
     */
    abstract public function getNumAssertions() : int;
    abstract public function usesDataProvider() : bool;
    abstract public function dataDescription() : string;
    /**
     * @return int|string
     */
    abstract public function dataName();
    abstract public function registerComparator(\SebastianBergmann\Comparator\Comparator $comparator) : void;
    abstract public function getDataSetAsString(bool $includeData = true) : string;
    /**
     * Override to run the test and assert its state.
     *
     * @throws AssertionFailedError
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws SebastianBergmann\ObjectEnumerator\InvalidArgumentException
     * @throws Throwable
     *
     * @return mixed
     */
    abstract protected function runTest();
    /**
     * This method is a wrapper for the ini_set() function that automatically
     * resets the modified php.ini setting to its original value after the
     * test is run.
     *
     * @param mixed $newValue
     *
     * @throws Exception
     */
    abstract protected function iniSet(string $varName, $newValue) : void;
    /**
     * This method is a wrapper for the setlocale() function that automatically
     * resets the locale to its original value after the test is run.
     *
     * @throws Exception
     */
    abstract protected function setLocale(... $args) : void;
    /**
     * Returns a test double for the specified class.
     *
     * @param string|string[] $originalClassName
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \InvalidArgumentException
     */
    abstract protected function createMock($originalClassName) : \PHPUnit\Framework\MockObject\MockObject;
    /**
     * Returns a configured test double for the specified class.
     *
     * @param string|string[] $originalClassName
     * @param array           $configuration
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \InvalidArgumentException
     */
    abstract protected function createConfiguredMock($originalClassName, array $configuration) : \PHPUnit\Framework\MockObject\MockObject;
    /**
     * Returns a partial test double for the specified class.
     *
     * @param string|string[] $originalClassName
     * @param string[]        $methods
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \InvalidArgumentException
     */
    abstract protected function createPartialMock($originalClassName, array $methods) : \PHPUnit\Framework\MockObject\MockObject;
    /**
     * Returns a test proxy for the specified class.
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \InvalidArgumentException
     */
    abstract protected function createTestProxy(string $originalClassName, array $constructorArguments = []) : \PHPUnit\Framework\MockObject\MockObject;
    /**
     * Mocks the specified class and returns the name of the mocked class.
     *
     * @param string $originalClassName
     * @param array  $methods
     * @param array  $arguments
     * @param string $mockClassName
     * @param bool   $callOriginalConstructor
     * @param bool   $callOriginalClone
     * @param bool   $callAutoload
     * @param bool   $cloneArguments
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \InvalidArgumentException
     */
    abstract protected function getMockClass($originalClassName, $methods = [], array $arguments = [], $mockClassName = '', $callOriginalConstructor = false, $callOriginalClone = true, $callAutoload = true, $cloneArguments = false) : string;
    /**
     * Returns a mock object for the specified abstract class with all abstract
     * methods of the class mocked. Concrete methods are not mocked by default.
     * To mock concrete methods, use the 7th parameter ($mockedMethods).
     *
     * @param string $originalClassName
     * @param array  $arguments
     * @param string $mockClassName
     * @param bool   $callOriginalConstructor
     * @param bool   $callOriginalClone
     * @param bool   $callAutoload
     * @param array  $mockedMethods
     * @param bool   $cloneArguments
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \InvalidArgumentException
     */
    abstract protected function getMockForAbstractClass($originalClassName, array $arguments = [], $mockClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true, $mockedMethods = [], $cloneArguments = false) : \PHPUnit\Framework\MockObject\MockObject;
    /**
     * Returns a mock object based on the given WSDL file.
     *
     * @param string $wsdlFile
     * @param string $originalClassName
     * @param string $mockClassName
     * @param array  $methods
     * @param bool   $callOriginalConstructor
     * @param array  $options                 An array of options passed to
     * SOAPClient::_construct
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \InvalidArgumentException
     */
    abstract protected function getMockFromWsdl($wsdlFile, $originalClassName = '', $mockClassName = '', array $methods = [], $callOriginalConstructor = true, array $options = []) : \PHPUnit\Framework\MockObject\MockObject;
    /**
     * Returns a mock object for the specified trait with all abstract methods
     * of the trait mocked. Concrete methods to mock can be specified with the
     * `$mockedMethods` parameter.
     *
     * @param string $traitName
     * @param array  $arguments
     * @param string $mockClassName
     * @param bool   $callOriginalConstructor
     * @param bool   $callOriginalClone
     * @param bool   $callAutoload
     * @param array  $mockedMethods
     * @param bool   $cloneArguments
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \InvalidArgumentException
     */
    abstract protected function getMockForTrait($traitName, array $arguments = [], $mockClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true, $mockedMethods = [], $cloneArguments = false) : \PHPUnit\Framework\MockObject\MockObject;
    /**
     * Returns an object for the specified trait.
     *
     * @param string $traitName
     * @param array  $arguments
     * @param string $traitClassName
     * @param bool   $callOriginalConstructor
     * @param bool   $callOriginalClone
     * @param bool   $callAutoload
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \InvalidArgumentException
     *
     * @return object
     */
    abstract protected function getObjectForTrait($traitName, array $arguments = [], $traitClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true);
    /**
     * @param null|string $classOrInterface
     *
     * @throws Prophecy\Exception\Doubler\ClassNotFoundException
     * @throws Prophecy\Exception\Doubler\DoubleException
     * @throws Prophecy\Exception\Doubler\InterfaceNotFoundException
     */
    abstract protected function prophesize($classOrInterface = null) : \Prophecy\Prophecy\ObjectProphecy;
    /**
     * Gets the data set of a TestCase.
     */
    abstract protected function getProvidedData() : array;
    /**
     * Creates a default TestResult object.
     */
    abstract protected function createResult() : \PHPUnit\Framework\TestResult;
    /**
     * This method is called when a test method did not execute successfully.
     *
     * @throws Throwable
     */
    abstract protected function onNotSuccessfulTest(\Throwable $t);

}

