<?php

declare(strict_types=1);

namespace Maks3w\PhpUnitMethodsTrait;

use Laminas\Code\Generator\DocBlockGenerator;
use Laminas\Code\Generator\FileGenerator;
use Laminas\Code\Generator\MethodGenerator;
use Laminas\Code\Generator\ParameterGenerator;
use Laminas\Code\Generator\TraitGenerator;
use Laminas\Code\Reflection\ClassReflection;
use Laminas\Code\Reflection\MethodReflection;

/**
 * class with useful methods for placeholders checks.
 */
class Compiler
{
    private string $inputClass;
    private TraitGenerator $basicTrait;

    /**
     * @var string[]
     */
    private array $blackListMethodNames;
    private string $traitNamespace;

    /**
     * @param string[] $blackListMethodNames List of methods to exclude from the result
     */
    public function __construct(string $inputClass, string $traitNamespace, array $blackListMethodNames = [])
    {
        $this->inputClass = $inputClass;
        $this->traitNamespace = $traitNamespace;
        $this->blackListMethodNames = array_merge(
            [
                '__construct',
            ],
            $blackListMethodNames
        );
        $this->basicTrait = $this->process($inputClass);
    }

    public function exportAsAbstractMethods()
    {
        $file = new FileGenerator();
        $file->setClass($this->basicTrait);

        return $file->generate();
    }

    protected function process(string $class): TraitGenerator
    {
        $classReflection = new ClassReflection($class);

        // Build trait name
        $traitName = $classReflection->getName();
        $delimiter = null;
        if (strpos($traitName, '_') !== false) {
            $delimiter = '_';
        } elseif (strpos($traitName, '\\') !== false) {
            $delimiter = '\\';
        }

        if ($delimiter) {
            $traitNameParts = explode($delimiter, $traitName);
            $traitName = array_pop($traitNameParts);
        }

        $traitName .= 'Trait';

        // Create trait from original class
        $traitGenerator = new TraitGenerator($traitName, $this->traitNamespace);

        foreach ($classReflection->getMethods() as $reflectionMethod) {
            if (
                $reflectionMethod->isPrivate() ||
                $reflectionMethod->isStatic() ||
                $this->methodIsBlackListed($reflectionMethod->getName()) ||
                !$reflectionMethod->getBody()
            ) {
                continue;
            }

            $method = $this->methodGeneratorFromReflection($reflectionMethod);

            $traitGenerator->addMethodFromGenerator($method);
        }

        return $traitGenerator;
    }

    protected function methodGeneratorFromReflection(MethodReflection $reflectionMethod): MethodGenerator
    {
        $method = new MethodGenerator();

        $method->setSourceContent($reflectionMethod->getContents(false));
        $method->setSourceDirty(false);

        if (!empty($reflectionMethod->getDocComment())) {
            $method->setDocBlock(DocBlockGenerator::fromReflection($reflectionMethod->getDocBlock()));
        }

        $method->setAbstract(true);
        $method->setFinal($reflectionMethod->isFinal());

        if ($reflectionMethod->isPrivate()) {
            $method->setVisibility(MethodGenerator::VISIBILITY_PRIVATE);
        } elseif ($reflectionMethod->isProtected()) {
            $method->setVisibility(MethodGenerator::VISIBILITY_PROTECTED);
        } else {
            $method->setVisibility(MethodGenerator::VISIBILITY_PUBLIC);
        }

        $method->setStatic($reflectionMethod->isStatic());

        $method->setName($reflectionMethod->getName());

        foreach ($reflectionMethod->getParameters() as $reflectionParameter) {
            $method->setParameter(ParameterGenerator::fromReflection($reflectionParameter));
        }

        $origReturnType = $reflectionMethod->getReturnType();
        if ($origReturnType) {
            $method->setReturnType(($origReturnType->allowsNull() ? '?' : '') . $origReturnType->getName());
        }

        return $method;
    }

    protected function methodIsBlackListed(string $methodName): bool
    {
        return in_array($methodName, $this->blackListMethodNames, true);
    }
}
