<?php

use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{
    public function testAlwaysReturnsTrue()
    {
        $condition = true;
        $this->assertTrue($condition, 'This should always be true!');
    }
}
