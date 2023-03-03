<?php

declare(strict_types=1);

namespace Tests;

use ReflectionProperty;
use CastModels\Model;
use Illuminate\Support\Collection;

trait CompareArrayModel
{
    /** @param array<mixed> $data */
    private function compareArrayModel(mixed &$data, Model $object): void
    {
        foreach ($data as $propertyName => $expected) {
            if (! empty($expected)) {
                if (is_string($propertyName)) {
                    $this->compareProperty($object, $propertyName, $expected);
                }

                if (is_int($propertyName)) {
                    $this->compareArrayProperty($object, $propertyName, $expected);
                }
            }
		}
    }

    private function compareProperty(Model $object, mixed $propertyName, mixed $expected): void
    {
        $actual = $object->$propertyName;
        $rProperty = new ReflectionProperty($object, $propertyName);
        $rType = $rProperty->getType();

        if ($rType->isBuiltin()) {// @phpstan-ignore-line
            $this->compareArrayBuiltin($expected, $actual, $propertyName);
        } else {
            $this->compareArrayNotBuiltin($expected, $actual, $propertyName);
        }
    }

    private function compareArrayProperty(Model $object, int $index, mixed $expected): void
    {
        $actual = $object->$index;

        $this->compareArrayModel($expected, $actual);
    }

    private function compareArrayBuiltin(mixed &$expected, mixed $actual, string $propertyName): void
    {
        if (is_object($actual)) {
            $actual = (array) $actual;
        }

        if (is_array($actual)) {
            foreach ($expected as $key => $value) {
                $this->assertSame($value, $actual[$key], "Failed comparing on $propertyName :: $key");
            }
        } else {
            $this->assertSame($expected, $actual, "Failed comparing on $propertyName");
        }
    }

    private function compareArrayNotBuiltin(mixed &$expected, mixed $actual, string $propertyName): void
    {
        if (method_exists($actual, 'tryFrom')) {
            $this->assertSame($expected, $actual->value, "Failed comparing on $propertyName");// @phpstan-ignore-line
            return;
        }

        if ($actual instanceof Model) {
            $this->compareArrayModel($expected, $actual);
            return;
        }

        if ($actual instanceof Collection) {
            $actual->each(fn ($item, $key) => $this->compareArrayModel($expected[$key], $item));
            return;
        }
    }
}
