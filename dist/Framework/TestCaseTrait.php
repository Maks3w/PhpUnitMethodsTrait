<?php

namespace Maks3w\PhpUnitMethodsTrait\Framework;

trait TestCaseTrait
{

    /**
     * Returns a string representation of the test case.
     *
     * @throws SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    abstract public function toString();
    abstract public function count();
    abstract public function getGroups();
    abstract public function setGroups(array $groups);
    abstract public function getAnnotations();
    /**
     * @throws SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    abstract public function getName(bool $withDataSet = true);
    /**
     * Returns the size of the test.
     *
     * @throws SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    abstract public function getSize();
    /**
     * @throws SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    abstract public function hasSize();
    /**
     * @throws SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    abstract public function isSmall();
    /**
     * @throws SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    abstract public function isMedium();
    /**
     * @throws SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    abstract public function isLarge();
    abstract public function getActualOutput();
    abstract public function hasOutput();
    abstract public function doesNotPerformAssertions();
    abstract public function expectOutputRegex(string $expectedRegex);
    abstract public function expectOutputString(string $expectedString);
    abstract public function hasExpectationOnOutput();
    abstract public function getExpectedException();
    /**
     * @return null|int|string
     */
    abstract public function getExpectedExceptionCode();
    abstract public function getExpectedExceptionMessage();
    abstract public function getExpectedExceptionMessageRegExp();
    abstract public function expectException(string $exception);
    /**
     * @param int|string $code
     */
    abstract public function expectExceptionCode($code);
    abstract public function expectExceptionMessage(string $message);
    abstract public function expectExceptionMessageRegExp(string $messageRegExp);
    /**
     * Sets up an expectation for an exception to be raised by the code under test.
     * Information for expected exception class, expected exception message, and
     * expected exception code are retrieved from a given Exception object.
     */
    abstract public function expectExceptionObject(\Exception $exception);
    abstract public function setRegisterMockObjectsFromTestArgumentsRecursively(bool $flag);
    abstract public function setUseErrorHandler(bool $useErrorHandler);
    abstract public function getStatus();
    abstract public function markAsRisky();
    abstract public function getStatusMessage();
    abstract public function hasFailed();
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
    abstract public function run(\PHPUnit\Framework\TestResult $result = null);
    abstract public function runBare();
    abstract public function setName(string $name);
    /**
     * @param string[] $dependencies
     */
    abstract public function setDependencies(array $dependencies);
    abstract public function hasDependencies();
    abstract public function setDependencyInput(array $dependencyInput);
    abstract public function setBeStrictAboutChangesToGlobalState(bool $beStrictAboutChangesToGlobalState);
    abstract public function setBackupGlobals(bool $backupGlobals);
    abstract public function setBackupStaticAttributes(bool $backupStaticAttributes);
    abstract public function setRunTestInSeparateProcess(bool $runTestInSeparateProcess);
    abstract public function setRunClassInSeparateProcess(bool $runClassInSeparateProcess);
    abstract public function setPreserveGlobalState(bool $preserveGlobalState);
    abstract public function setInIsolation(bool $inIsolation);
    abstract public function isInIsolation();
    /**
     * @return mixed
     */
    abstract public function getResult();
    /**
     * @param mixed $result
     */
    abstract public function setResult($result);
    abstract public function setOutputCallback(callable $callback);
    abstract public function getTestResultObject();
    abstract public function setTestResultObject(\PHPUnit\Framework\TestResult $result);
    abstract public function registerMockObject(\PHPUnit\Framework\MockObject\MockObject $mockObject);
    /**
     * Returns a builder object to create mock objects using a fluent interface.
     *
     * @param string|string[] $className
     */
    abstract public function getMockBuilder($className);
    abstract public function addToAssertionCount(int $count);
    /**
     * Returns the number of assertions performed by this test.
     */
    abstract public function getNumAssertions();
    abstract public function usesDataProvider();
    abstract public function dataDescription();
    /**
     * @return int|string
     */
    abstract public function dataName();
    abstract public function registerComparator(\SebastianBergmann\Comparator\Comparator $comparator);
    abstract public function getDataSetAsString(bool $includeData = true);
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
    abstract protected function iniSet(string $varName, $newValue);
    /**
     * This method is a wrapper for the setlocale() function that automatically
     * resets the locale to its original value after the test is run.
     *
     * @throws Exception
     */
    abstract protected function setLocale(... $args);
    /**
     * Returns a test double for the specified class.
     *
     * @param string|string[] $originalClassName
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \InvalidArgumentException
     */
    abstract protected function createMock($originalClassName);
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
    abstract protected function createConfiguredMock($originalClassName, array $configuration);
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
    abstract protected function createPartialMock($originalClassName, array $methods);
    /**
     * Returns a test proxy for the specified class.
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \InvalidArgumentException
     */
    abstract protected function createTestProxy(string $originalClassName, array $constructorArguments = array());
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
    abstract protected function getMockClass($originalClassName, $methods = array(), array $arguments = array(), $mockClassName = '', $callOriginalConstructor = false, $callOriginalClone = true, $callAutoload = true, $cloneArguments = false);
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
    abstract protected function getMockForAbstractClass($originalClassName, array $arguments = array(), $mockClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true, $mockedMethods = array(), $cloneArguments = false);
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
    abstract protected function getMockFromWsdl($wsdlFile, $originalClassName = '', $mockClassName = '', array $methods = array(), $callOriginalConstructor = true, array $options = array());
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
    abstract protected function getMockForTrait($traitName, array $arguments = array(), $mockClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true, $mockedMethods = array(), $cloneArguments = false);
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
    abstract protected function getObjectForTrait($traitName, array $arguments = array(), $traitClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true);
    /**
     * @param null|string $classOrInterface
     *
     * @throws Prophecy\Exception\Doubler\ClassNotFoundException
     * @throws Prophecy\Exception\Doubler\DoubleException
     * @throws Prophecy\Exception\Doubler\InterfaceNotFoundException
     */
    abstract protected function prophesize($classOrInterface = null);
    /**
     * Gets the data set of a TestCase.
     */
    abstract protected function getProvidedData();
    /**
     * Creates a default TestResult object.
     */
    abstract protected function createResult();
    /**
     * This method is called when a test method did not execute successfully.
     *
     * @throws Throwable
     */
    abstract protected function onNotSuccessfulTest(\Throwable $t);

}

