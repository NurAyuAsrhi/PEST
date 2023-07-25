<?php

use PHPUnit\Framework\TestCase;

test('checks if two values are equal using expect->toBe()', function () {
    $value1 = 10;
    $value2 = 5 + 5;

    expect($value1)->toBe($value2);
});

/*
it('checks if a variable is an array using expect->toBeInstanceOf()', function () {
    $array = [1, 2, 3];

    expect($array)->toBeInstanceOf('array');
});
*/

/*
it('checks if a variable is empty using expect->toBeEmpty()', function () {
    $emptyArray = [];
    $notEmptyArray = [1, 2, 3];

    expect($emptyArray)->toBeEmpty();
    expect($notEmptyArray)->not->toBeEmpty();
});
*/

/*
it('checks if a value is true using expect->toBeTrue()', function () {
    $trueValue = true;
    $falseValue = false;

    expect($trueValue)->toBeTrue();
    expect($falseValue)->not->toBeTrue();
});
*/

/*
it('checks if a value is truthy using expect->toBeTrue()', function () {
    $trueValue = true;
    $falseValue = false;
    $truthyValue = 'hello';
    $falsyValue = '';

    expect($trueValue)->toBeTrue();
    expect($falseValue)->toBeFalse();
    expect($truthyValue)->toBeTrue();
    expect($falsyValue)->toBeFalse();
});
*/

/*
it('checks if a value is truthy using expect->toBeTrue()', function () {
    $trueValue = true;
    $falseValue = false;
    $truthyValue = 'hello';
    $falsyValue = '';

    expect($trueValue)->toBeTrue();
    expect($falseValue)->toBeFalse();
    expect($truthyValue)->toBeTrue();
    expect($falsyValue)->toBeFalse();
});
*/

/*
it('checks if a value is falsy using expect->toBeFalse()', function () {
    $trueValue = true;
    $falseValue = false;
    $truthyValue = 'hello';
    $falsyValue = '';

    expect($trueValue)->toBeTrue();
    expect($falseValue)->toBeFalse();
    expect($truthyValue)->toBeTrue();
    expect($falsyValue)->toBeFalse();
});
*/

/*
it('checks if a value is greater than another value using expect and assertGreaterThan()', function () {
    $value1 = 10;
    $value2 = 5;

    expect($value1)->toBeGreaterThan($value2);
});
*/

/*
it('checks if a value is greater than or equal to another value using expect and assertGreaterThanOrEqual()', function () {
    $value1 = 10;
    $value2 = 5;

    expect($value1)->toBeGreaterThanOrEqual($value2);
    expect($value2)->toBeGreaterThanOrEqual($value2);
});
*/

/*
it('checks if a value is less than another value using expect and assertLessThan()', function () {
    $value1 = 5;
    $value2 = 10;

    expect($value1)->toBeLessThan($value2);
});
*/

/*
it('checks if a value is less than or equal to another value using expect and assertLessThanOrEqual()', function () {
    $value1 = 5;
    $value2 = 10;

    expect($value1)->toBeLessThanOrEqual($value2);
    expect($value2)->toBeLessThanOrEqual($value2);
}
*/

/*
it('checks if an array or string contains a specific value using expect and assertContains()', function () {
    $array = [1, 2, 3, 4, 5];
    $string = 'hello, world';

    expect($array)->toContain(3);
    expect($string)->toContain('hello');
});
*/

/*
class ExampleClass {}

it('checks if an array contains only instances of a specific class using expect and assertContainsOnlyInstancesOf()', function () {
    $array = [new ExampleClass(), new ExampleClass()];

    expect($array)->toContainOnlyInstancesOf(ExampleClass::class);
});
*/

/*
it('checks the count of elements in an array using expect and assertCount()', function () {
    $array = [1, 2, 3, 4, 5];

    expect($array)->toHaveCount(5);
});
*/

/*
class ExampleClass
{
    public function exampleMethod()
    {
        // Some method implementation
    }
}
it('checks if an object has a specific method using expect and assertObjectHasAttribute()', function () {
    $example = new ExampleClass();

    expect($example)->toHaveMethod('exampleMethod');
});
*/

/*
class ExampleClass
{
    public function method1()
    {
        // Some method implementation
    }

    public function method2()
    {
        // Some method implementation
    }
}
it('checks if a class has multiple specific methods using expect and assertClassHasMethods()', function () {
    expect(ExampleClass::class)->toHaveMethods(['method1', 'method2']);
});
*/

/*
class ExampleClass
{
    public $property1;
    private $property2;
}
it('checks if a class has a specific property using expect and assertClassHasAttribute()', function () {
    expect(ExampleClass::class)->toHaveProperty('property1');
    expect(ExampleClass::class)->not->toHaveProperty('property3');
});
*/

/*
class ExampleClass
{
    public $property1;
    private $property2;
}
it('checks if a class has multiple specific properties using expect and assertClassHasAttributes()', function () {
    expect(ExampleClass::class)->toHaveProperties(['property1', 'property2']);
    expect(ExampleClass::class)->not->toHaveProperties(['property3', 'property4']);
});
*/

/*
it('checks if an array matches a subset of expected data using expect and assertArraySubset()', function () {
    $data = ['name' => 'John Doe', 'age' => 30, 'email' => 'johndoe@example.com'];

    expect($data)->toMatchArray(['name' => 'John Doe', 'age' => 30]);
});
*/

/*
class ExampleClass
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}
it('checks if an object matches the properties and values of an expected object using expect and assertEquals()', function () {
    $actualObject = new ExampleClass('John Doe', 30);
    $expectedObject = new ExampleClass('John Doe', 30);

    expect($actualObject)->toMatchObject($expectedObject);
});
*/

/*
it('checks if two values are equal using expect and toEqual()', function () {
    $value1 = 10;
    $value2 = 10;

    expect($value1)->toEqual($value2);
});
*/

/*
it('checks if a value is a boolean type using expect and assertIsBool()', function () {
    $boolValue = true;

    expect($boolValue)->toBeBool();
});
*/

/*
function exampleFunction() {
    return 'Hello, world!';
}

class ExampleClass {
    public function exampleMethod() {
        return 'Hello from ExampleClass!';
    }
}

it('checks if a value is callable using expect and assertIsCallable()', function () {
    $callable1 = 'strlen';
    $callable2 = [new ExampleClass(), 'exampleMethod'];
    $callable3 = 'exampleFunction';
    $nonCallable = 'nonExistentFunction';

    expect($callable1)->toBeCallable();
    expect($callable2)->toBeCallable();
    expect($callable3)->toBeCallable();
    expect($nonCallable)->not->toBeCallable();
});
*/

/*
it('checks if a file exists using expect and assertFileExists()', function () {
    $filePath = 'path/to/your/file.txt';

    expect($filePath)->toBeFile();
});
*/

/*
it('checks if a value is of type float using expect and assertIsFloat()', function () {
    $floatValue = 3.14;

    expect($floatValue)->toBeFloat();
});
*/

/*
it('checks if a value is of type integer using expect and assertIsInt()', function () {
    $intValue = 42;

    expect($intValue)->toBeInt();
});
*/

/*
it('checks if a value is iterable using expect and assertIsIterable()', function () {
    $arrayValue = [1, 2, 3];
    $iterableObject = new ArrayIterator($arrayValue);

    expect($arrayValue)->toBeIterable();
    expect($iterableObject)->toBeIterable();
});
*/

/*
it('checks if a value is numeric using expect and assertIsNumeric()', function () {
    $numericValue = 42;
    $stringValue = '123';

    expect($numericValue)->toBeNumeric();
    expect($stringValue)->toBeNumeric();
});
*/

/*
class ExampleClass {
    public function greet() {
        return 'Hello, world!';
    }
}

it('checks if a value is an object using expect and assertIsObject()', function () {
    $objectValue = new ExampleClass();

    expect($objectValue)->toBeObject();
});
*/

/*
it('checks if a value is a resource using expect and assertIsResource()', function () {
    $fileHandle = fopen('path/to/your/file.txt', 'r');

    expect($fileHandle)->toBeResource();

    // Remember to close the file handle to avoid resource leaks
    fclose($fileHandle);
});
*/

/*
it('checks if a value is scalar using expect and assertIsScalar()', function () {
    $intValue = 42;
    $floatValue = 3.14;
    $stringValue = 'Hello, world!';
    $boolValue = true;

    expect($intValue)->toBeScalar();
    expect($floatValue)->toBeScalar();
    expect($stringValue)->toBeScalar();
    expect($boolValue)->toBeScalar();
});
*/

/*
it('checks if a value is a string using expect and assertIsString()', function () {
    $stringValue = 'Hello, world!';

    expect($stringValue)->toBeString();
});
*/

/*
it('checks if a value is a valid JSON string using expect and assertJson()', function () {
    $jsonString = '{"name": "John", "age": 30}';

    expect($jsonString)->toBeJson();
});
*/

/*
it('checks if a value is NaN using expect and assertNan()', function () {
    $nanValue = acos(8); // acos function returns NaN for input greater than 1

    expect($nanValue)->toBeNan();
});
*/

/*
it('checks if a value is null using expect and assertNull()', function () {
    $nullValue = null;

    expect($nullValue)->toBeNull();
});
*/