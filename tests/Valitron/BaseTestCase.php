<?php

use PHPUnit\Framework\TestCase;

class BaseTestCase extends TestCase
{
    public function setUp()
    {
    }

    public function tearDown()
    {
        $this->resetProperty('_lang');
        $this->resetProperty('_langDir');
        $this->resetProperty('_rules', []);
        $this->resetProperty('_ruleMessages', []);
    }

    protected function resetProperty($name, $value = null)
    {
        $prop = new \ReflectionProperty('Valitron\Validator', $name);
        $prop->setAccessible(true);
        $prop->setValue($value);
        $prop->setAccessible(false);
    }
}
