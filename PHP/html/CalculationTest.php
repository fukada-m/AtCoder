<?php
require_once "test.php";

use PHPUnit\Framework\TestCase;

class CalculationTest extends TestCase
{
    public function testAddition()
    {
        $this->assertSame(2, addition());
    }
}
