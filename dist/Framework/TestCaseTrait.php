<?php

namespace Maks3w\PhpUnitMethodsTrait\Framework;

trait TestCaseTrait
{

    /**
     * Returns a string representation of the test case.
     *
     * @return string
     */
    abstract public function toString();
    /**
     * Counts the number of test cases executed by run(TestResult result).
     *
     * @return int
     */
    abstract public function count();
    abstract public function getGroups();
    /**
     * @param array $groups
     */
    abstract public function setGroups(array $groups);
    /**
     * Returns the annotations for this test.
     *
     * @return array
     */
    abstract public function getAnnotations();
    /**
     * Gets the name of a TestCase.
     *
     * @param bool $withDataSet
     *
     * @return string
     */
    abstract public function getName($withDataSet = true);
    /**
     * Returns the size of the test.
     *
     * @return int
     */
    abstract public function getSize();
    /**
     * @return bool
     */
    abstract public function hasSize();
    /**
     * @return bool
     */
    abstract public function isSmall();
    /**
     * @return bool
     */
    abstract public function isMedium();
    /**
     * @return bool
     */
    abstract public function isLarge();
    /**
     * @return string
     */
    abstract public function getActualOutput();
    /**
     * @return bool
     */
    abstract public function hasOutput();
    /**
     * @return bool
     */
    abstract public function doesNotPerformAssertions();
    /**
     * @param string $expectedRegex
     *
     * @throws Exception
     */
    abstract public function expectOutputRegex($expectedRegex);
    /**
     * @param string $expectedString
     */
    abstract public function expectOutputString($expectedString);
    /**
     * @return bool
     */
    abstract public function hasExpectationOnOutput();
    /**
     * @return null|string
     */
    abstract public function getExpectedException();
    /**
     * @return null|int|string
     */
    abstract public function getExpectedExceptionCode();
    /**
     * @return string
     */
    abstract public function getExpectedExceptionMessage();
    /**
     * @return string
     */
    abstract public function getExpectedExceptionMessageRegExp();
    /**
     * @param string $exception
     */
    abstract public function expectException($exception);
    /**
     * @param int|string $code
     *
     * @throws Exception
     */
    abstract public function expectExceptionCode($code);
    /**
     * @param string $message
     *
     * @throws Exception
     */
    abstract public function expectExceptionMessage($message);
    /**
     * @param string $messageRegExp
     *
     * @throws Exception
     */
    abstract public function expectExceptionMessageRegExp($messageRegExp);
    /**
     * Sets up an expectation for an exception to be raised by the code under test.
     * Information for expected exception class, expected exception message, and
     * expected exception code are retrieved from a given Exception object.
     */
    abstract public function expectExceptionObject(\Exception $exception);
    /**
     * @param bool $flag
     */
    abstract public function setRegisterMockObjectsFromTestArgumentsRecursively($flag);
    abstract protected function setExpectedExceptionFromAnnotation();
    /**
     * @param bool $useErrorHandler
     */
    abstract public function setUseErrorHandler($useErrorHandler);
    abstract protected function setUseErrorHandlerFromAnnotation();
    abstract protected function checkRequirements();
    /**
     * Returns the status of this test.
     *
     * @return int
     */
    abstract public function getStatus();
    abstract public function markAsRisky();
    /**
     * Returns the status message of this test.
     *
     * @return string
     */
    abstract public function getStatusMessage();
    /**
     * Returns whether or not this test has failed.
     *
     * @return bool
     */
    abstract public function hasFailed();
    /**
     * Runs the test case and collects the results in a TestResult object.
     * If no TestResult object is passed a new one will be created.
     *
     * @param TestResult $result
     *
     * @return TestResult|null
     *
     * @throws Exception
     */
    abstract public function run(\PHPUnit\Framework\TestResult $result = null);
    /**
     * Runs the bare test sequence.
     */
    abstract public function runBare();
    /**
     * Override to run the test and assert its state.
     *
     * @return mixed
     *
     * @throws Exception|Exception
     * @throws Exception
     */
    abstract protected function runTest();
    /**
     * Verifies the mock object expectations.
     */
    abstract protected function verifyMockObjects();
    /**
     * Sets the name of a TestCase.
     *
     * @param  string
     */
    abstract public function setName($name);
    /**
     * Sets the dependencies of a TestCase.
     *
     * @param string[] $dependencies
     */
    abstract public function setDependencies(array $dependencies);
    /**
     * Returns true if the tests has dependencies
     *
     * @return bool
     */
    abstract public function hasDependencies();
    /**
     * Sets
     *
     * @param array $dependencyInput
     */
    abstract public function setDependencyInput(array $dependencyInput);
    /**
     * @param bool $beStrictAboutChangesToGlobalState
     */
    abstract public function setBeStrictAboutChangesToGlobalState($beStrictAboutChangesToGlobalState);
    /**
     * Calling this method in setUp() has no effect!
     *
     * @param bool $backupGlobals
     */
    abstract public function setBackupGlobals($backupGlobals);
    /**
     * Calling this method in setUp() has no effect!
     *
     * @param bool $backupStaticAttributes
     */
    abstract public function setBackupStaticAttributes($backupStaticAttributes);
    /**
     * @param bool $runTestInSeparateProcess
     *
     * @throws Exception
     */
    abstract public function setRunTestInSeparateProcess($runTestInSeparateProcess);
    /**
     * @param bool $runClassInSeparateProcess
     *
     * @throws Exception
     */
    abstract public function setRunClassInSeparateProcess($runClassInSeparateProcess);
    /**
     * @param bool $preserveGlobalState
     *
     * @throws Exception
     */
    abstract public function setPreserveGlobalState($preserveGlobalState);
    /**
     * @param bool $inIsolation
     *
     * @throws Exception
     */
    abstract public function setInIsolation($inIsolation);
    /**
     * @return bool
     */
    abstract public function isInIsolation();
    /**
     * @return mixed
     */
    abstract public function getResult();
    /**
     * @param mixed $result
     */
    abstract public function setResult($result);
    /**
     * @param callable $callback
     *
     * @throws Exception
     */
    abstract public function setOutputCallback($callback);
    /**
     * @return TestResult
     */
    abstract public function getTestResultObject();
    /**
     * @param TestResult $result
     */
    abstract public function setTestResultObject(\PHPUnit\Framework\TestResult $result);
    /**
     * @param MockObject $mockObject
     */
    abstract public function registerMockObject(\PHPUnit\Framework\MockObject\MockObject $mockObject);
    /**
     * This method is a wrapper for the ini_set() function that automatically
     * resets the modified php.ini setting to its original value after the
     * test is run.
     *
     * @param string $varName
     * @param string $newValue
     *
     * @throws Exception
     */
    abstract protected function iniSet($varName, $newValue);
    /**
     * This method is a wrapper for the setlocale() function that automatically
     * resets the locale to its original value after the test is run.
     *
     * @param int    $category
     * @param string $locale
     *
     * @throws Exception
     */
    abstract protected function setLocale();
    /**
     * Returns a builder object to create mock objects using a fluent interface.
     *
     * @param string|string[] $className
     *
     * @return MockBuilder
     */
    abstract public function getMockBuilder($className);
    /**
     * Returns a test double for the specified class.
     *
     * @param string $originalClassName
     *
     * @return MockObject
     *
     * @throws Exception
     */
    abstract protected function createMock($originalClassName);
    /**
     * Returns a configured test double for the specified class.
     *
     * @param string $originalClassName
     * @param array  $configuration
     *
     * @return MockObject
     *
     * @throws Exception
     */
    abstract protected function createConfiguredMock($originalClassName, array $configuration);
    /**
     * Returns a partial test double for the specified class.
     *
     * @param string   $originalClassName
     * @param string[] $methods
     *
     * @return MockObject
     *
     * @throws Exception
     */
    abstract protected function createPartialMock($originalClassName, array $methods);
    /**
     * Returns a test proxy for the specified class.
     *
     * @param string $originalClassName
     * @param array  $constructorArguments
     *
     * @return MockObject
     *
     * @throws Exception
     */
    abstract protected function createTestProxy($originalClassName, array $constructorArguments = array());
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
     * @return string
     *
     * @throws Exception
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
     * @return MockObject
     *
     * @throws Exception
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
     * @return MockObject
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
     * @return MockObject
     *
     * @throws Exception
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
     * @return object
     *
     * @throws Exception
     */
    abstract protected function getObjectForTrait($traitName, array $arguments = array(), $traitClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true);
    /**
     * @param string|null $classOrInterface
     *
     * @return \Prophecy\Prophecy\ObjectProphecy
     *
     * @throws \LogicException
     */
    abstract protected function prophesize($classOrInterface = null);
    /**
     * Adds a value to the assertion counter.
     *
     * @param int $count
     */
    abstract public function addToAssertionCount($count);
    /**
     * Returns the number of assertions performed by this test.
     *
     * @return int
     */
    abstract public function getNumAssertions();
    /**
     * @return bool
     */
    abstract public function usesDataProvider();
    /**
     * @return string
     */
    abstract public function dataDescription();
    /**
     * @return int|string
     */
    abstract public function dataName();
    abstract public function registerComparator(\SebastianBergmann\Comparator\Comparator $comparator);
    /**
     * Gets the data set description of a TestCase.
     *
     * @param bool $includeData
     *
     * @return string
     */
    abstract public function getDataSetAsString($includeData = true);
    /**
     * Gets the data set of a TestCase.
     *
     * @return array
     */
    abstract protected function getProvidedData();
    /**
     * Creates a default TestResult object.
     *
     * @return TestResult
     */
    abstract protected function createResult();
    abstract protected function handleDependencies();
    /**
     * This method is called when a test method did not execute successfully.
     *
     * @param Throwable $t
     *
     * @throws Throwable
     */
    abstract protected function onNotSuccessfulTest(\Throwable $t);

}

