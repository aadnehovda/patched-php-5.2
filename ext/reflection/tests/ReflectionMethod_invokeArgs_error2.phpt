--TEST--
ReflectionMethod::invokeArgs() further errors
--SKIPIF--
<?php extension_loaded('reflection') or die('skip'); ?>
--FILE--
<?php

class TestClass {

    public function foo() {
        echo "Called foo()\n";
        var_dump($this);
        return "Return Val";
    }
}

$foo = new ReflectionMethod('TestClass', 'foo');

$testClassInstance = new TestClass();

try {
    var_dump($foo->invokeArgs($testClassInstance, true));
} catch (Exception $e) {
    var_dump($e->getMessage());
}

?>
--EXPECTF--
Catchable fatal error: Argument 2 passed to ReflectionMethod::invokeArgs() must be an array, boolean given in %s on line %d
