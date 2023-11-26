<?php
namespace Web\AC20231125\Tests;

use Web\AC20231125\MiniABS;
use PHPUnit\Framework\TestCase;

class MiniABSTest extends TestCase{
    private MiniABS $miniABS;

    public function setUp(): void{
        $this->miniABS = new MiniABS();
    }
    
    public function testMiniABS1(){
        $input1 = '5 4 7';
        $input2 = '3 1 4 9 7';
        $this->assertEquals("4 4 4 7 7", $this->miniABS->miniABS($input1, $input2));
    }
    
    
}
