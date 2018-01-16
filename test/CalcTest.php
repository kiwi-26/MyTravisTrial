<?php
use PHPUnit\Framework\TestCase;
use Sample\Calc;

class CalcTest extends TestCase
{
    public function testAdd()
    {
        $calc = new Calc();
        $this->assertEquals($calc->add(1, 2), 3);
    }

    public function testSub()
    {
        $calc = new Calc();
        $this->assertEquals($calc->sub(2, 1), 1);
    }
}
?>