<?php
    use PHPUnit\Framework\TestCase;
    use Sample\PatchiSample;

    class PatchiSampleTest extends TestCase
    {
        public function testGet_name()
        {
            $name = "test";
            $patchiSample = new PatchiSample($name);
            $this->assertEquals($name, $patchiSample->get_name());
        }
    }
