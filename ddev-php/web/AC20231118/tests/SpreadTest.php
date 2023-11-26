<?php
namespace Web\AC20231118\Tests;

use Web\AC20231118\Spread;
use PHPUnit\Framework\TestCase;

class SpreadTest extends TestCase{
    private Spread $spread;

    public function setUp(): void{
        $this->spread = new Spread();
    }
    
    public function testSpread(){
        $this->assertEquals("A B C", $this->spread->spread("ABC"));
        $this->assertEquals("Z Z Z Z Z Z Z", $this->spread->spread("ZZZZZZZ"));
        $this->assertEquals("O O X X O O", $this->spread->spread("OOXXOO"));
    }
}
