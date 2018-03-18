<?php

namespace Maks3w\PhpUnitMethodsTrait\Framework;

use PHPUnit_Framework_Exception;
use PHPUnit_Framework_TestResult;
use Exception;
use PHPUnit_Framework_MockObject_MockObject;
use PHPUnit_Framework_MockObject_MockBuilder;
use PHPUnit_Framework_MockObject_Generator;

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
     * @throws PHPUnit_Framework_Exception
     */
    abstract public function expectOutputRegex($expectedRegex);
    /**
     * @param string $expectedString
     */
    abstract public function expectOutputString($expectedString);
    /**
     * @return bool
     *
     * @deprecated Use hasExpectationOnOutput() instead
     */
    abstract public function hasPerformedExpectationsOnOutput();
    /**
     * @return bool
     */
    abstract public function hasExpectationOnOutput();
    /**
     * @return string
     */
    abstract public function getExpectedException();
    /**
     * @param mixed      $exception
     * @param string     $message   Null means we do not check message at all, string
     * (even empty) means we do. Default: null.
     * @param int|string $code      Null means we do not check code at all, non-null
     * means we do.
     *
     * @throws PHPUnit_Framework_Exception
     *
     * @deprecated Method deprecated since Release 5.2.0; use expectException() instead
     */
    abstract public function setExpectedException($exception, $message = '', $code = null);
    /**
     * @param mixed  $exception
     * @param string $messageRegExp
     * @param int    $code
     *
     * @throws PHPUnit_Framework_Exception
     *
     * @deprecated Method deprecated since Release 5.6.0; use
     * expectExceptionMessageRegExp() instead
     */
    abstract public function setExpectedExceptionRegExp($exception, $messageRegExp = '', $code = null);
    /**
     * @param string $exception
     */
    abstract public function expectException($exception);
    /**
     * @param int|string $code
     *
     * @throws PHPUnit_Framework_Exception
     */
    abstract public function expectExceptionCode($code);
    /**
     * @param string $message
     *
     * @throws PHPUnit_Framework_Exception
     */
    abstract public function expectExceptionMessage($message);
    /**
     * @param string $messageRegExp
     *
     * @throws PHPUnit_Framework_Exception
     */
    abstract public function expectExceptionMessageRegExp($messageRegExp);
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
     * @param PHPUnit_Framework_TestResult $result
     *
     * @return PHPUnit_Framework_TestResult
     *
     * @throws PHPUnit_Framework_Exception
     */
    abstract public function run(\PHPUnit_Framework_TestResult $result = null);
    /**
     * Runs the bare test sequence.
     */
    abstract public function runBare();
    /**
     * Override to run the test and assert its state.
     *
     * @return mixed
     *
     * @throws Exception|PHPUnit_Framework_Exception
     * @throws PHPUnit_Framework_Exception
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
     * @param array $dependencies
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
     * @throws PHPUnit_Framework_Exception
     */
    abstract public function setRunTestInSeparateProcess($runTestInSeparateProcess);
    /**
     * @param bool $preserveGlobalState
     *
     * @throws PHPUnit_Framework_Exception
     */
    abstract public function setPreserveGlobalState($preserveGlobalState);
    /**
     * @param bool $inIsolation
     *
     * @throws PHPUnit_Framework_Exception
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
     * @throws PHPUnit_Framework_Exception
     */
    abstract public function setOutputCallback($callback);
    /**
     * @return PHPUnit_Framework_TestResult
     */
    abstract public function getTestResultObject();
    /**
     * @param PHPUnit_Framework_TestResult $result
     */
    abstract public function setTestResultObject(\PHPUnit_Framework_TestResult $result);
    /**
     * @param PHPUnit_Framework_MockObject_MockObject $mockObject
     */
    abstract public function registerMockObject(\PHPUnit_Framework_MockObject_MockObject $mockObject);
    /**
     * This method is a wrapper for the ini_set() function that automatically
     * resets the modified php.ini setting to its original value after the
     * test is run.
     *
     * @param string $varName
     * @param string $newValue
     *
     * @throws PHPUnit_Framework_Exception
     */
    abstract protected function iniSet($varName, $newValue);
    /**
     * This method is a wrapper for the setlocale() function that automatically
     * resets the locale to its original value after the test is run.
     *
     * @param int    $category
     * @param string $locale
     *
     * @throws PHPUnit_Framework_Exception
     */
    abstract protected function setLocale();
    /**
     * Returns a builder object to create mock objects using a fluent interface.
     *
     * @param string|string[] $className
     *
     * @return PHPUnit_Framework_MockObject_MockBuilder
     */
    abstract public function getMockBuilder($className);
    /**
     * Returns a test double for the specified class.
     *
     * @param string $originalClassName
     *
     * @return PHPUnit_Framework_MockObject_MockObject
     *
     * @throws PHPUnit_Framework_Exception
     */
    abstract protected function createMock($originalClassName);
    /**
     * Returns a configured test double for the specified class.
     *
     * @param string $originalClassName
     * @param array  $configuration
     *
     * @return PHPUnit_Framework_MockObject_MockObject
     *
     * @throws PHPUnit_Framework_Exception
     */
    abstract protected function createConfiguredMock($originalClassName, array $configuration);
    /**
     * Returns a partial test double for the specified class.
     *
     * @param string $originalClassName
     * @param array  $methods
     *
     * @return PHPUnit_Framework_MockObject_MockObject
     *
     * @throws PHPUnit_Framework_Exception
     */
    abstract protected function createPartialMock($originalClassName, array $methods);
    /**
     * Returns a mock object for the specified class.
     *
     * @param string     $originalClassName       Name of the class to mock.
     * @param array|null $methods                 When provided, only methods whose
     * names are in the array
     *                                            are replaced with a configurable test
     * double. The behavior
     *                                            of the other methods is not changed.
     *                                            Providing null means that no methods
     * will be replaced.
     * @param array      $arguments               Parameters to pass to the original
     * class' constructor.
     * @param string     $mockClassName           Class name for the generated test
     * double class.
     * @param bool       $callOriginalConstructor Can be used to disable the call to
     * the original class' constructor.
     * @param bool       $callOriginalClone       Can be used to disable the call to
     * the original class' clone constructor.
     * @param bool       $callAutoload            Can be used to disable __autoload()
     * during the generation of the test double class.
     * @param bool       $cloneArguments
     * @param bool       $callOriginalMethods
     * @param object     $proxyTarget
     *
     * @return PHPUnit_Framework_MockObject_MockObject
     *
     * @throws PHPUnit_Framework_Exception
     *
     * @deprecated Method deprecated since Release 5.4.0; use createMock() or
     * getMockBuilder() instead
     */
    abstract protected function getMock($originalClassName, $methods = array(), array $arguments = array(), $mockClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true, $cloneArguments = false, $callOriginalMethods = false, $proxyTarget = null);
    /**
     * Returns a mock with disabled constructor object for the specified class.
     *
     * @param string $originalClassName
     *
     * @return PHPUnit_Framework_MockObject_MockObject
     *
     * @throws PHPUnit_Framework_Exception
     *
     * @deprecated Method deprecated since Release 5.4.0; use createMock() instead
     */
    abstract protected function getMockWithoutInvokingTheOriginalConstructor($originalClassName);
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
     * @throws PHPUnit_Framework_Exception
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
     * @return PHPUnit_Framework_MockObject_MockObject
     *
     * @throws PHPUnit_Framework_Exception
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
     * @return PHPUnit_Framework_MockObject_MockObject
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
     * @return PHPUnit_Framework_MockObject_MockObject
     *
     * @throws PHPUnit_Framework_Exception
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
     * @param bool   $cloneArguments
     *
     * @return object
     *
     * @throws PHPUnit_Framework_Exception
     */
    abstract protected function getObjectForTrait($traitName, array $arguments = array(), $traitClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true, $cloneArguments = false);
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
     * Gets the data set description of a TestCase.
     *
     * @param bool $includeData
     *
     * @return string
     */
    abstract protected function getDataSetAsString($includeData = true);
    /**
     * Gets the data set of a TestCase.
     *
     * @return array
     */
    abstract protected function getProvidedData();
    /**
     * Creates a default TestResult object.
     *
     * @return PHPUnit_Framework_TestResult
     */
    abstract protected function createResult();
    abstract protected function handleDependencies();
    /**
     * Get the mock object generator, creating it if it doesn't exist.
     *
     * @return PHPUnit_Framework_MockObject_Generator
     */
    abstract protected function getMockObjectGenerator();

}

