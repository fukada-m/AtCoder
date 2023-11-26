<?php
namespace Web\AC20231125\Tests;

use Web\AC20231125\CountingPasses;
use PHPUnit\Framework\TestCase;

class CountingPassesTest extends TestCase{
    private CountingPasses $countingPasses;

    public function setUp(): void{
        $this->countingPasses = new CountingPasses();
    }
    
    public function testCountingPasses1(){
        $input1 = '5 60';
        $input2 = '60 20 100 90 40';
        $this->assertEquals("3", $this->countingPasses->countPass($input1, $input2));
    }
    public function testCountingPasses2(){
        $input1 = '4 80';
        $input2 = '79 78 77 76';
        $this->assertEquals("0", $this->countingPasses->countPass($input1, $input2));
    }
    public function testCountingPasses3(){
        $input1 = '10 50';
        $input2 = '31 41 59 26 53 58 97 93 23 84';
        $this->assertEquals("6", $this->countingPasses->countPass($input1, $input2));
    }
    
}
