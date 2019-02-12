<?php
use App\Calcul;
use PHPUnit\Framework\TestCase;

final class CalculTest extends TestCase{

    private $calculClass;

    public function Init() : void
    {
        $this->calculClass = new Calcul();
    }

    public function MakeEmpty() : void
    {
        $this->calculClass = NULL;
    }

    public function testCalcul() : void
    {
        $init = new Calcul();
        $res = $init->add(4,6);
        $this->assertEquals(10, $res);
    }
}