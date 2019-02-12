<?php

use App\Calcul;
use PHPUnit\Framework\TestCase;

final class CalculTest extends TestCase
{

    private $calculClass;

    public function Init(): void
    {
        try {
            $this->calculClass = new Calcul();
        } catch (Exception $e) {
            $this->addWarning("Impossible de créer la classe");
        }

    }

    public function MakeEmpty(): void
    {
        try {
            $this->calculClass = NULL;
        } catch (Exception $e) {
            $this->addWarning("Impossible de vider la classe");
        }
    }

    public function testCalculAdd(): void
    {
        try {
            $init = new Calcul();
            $res = $init->add(4, 6);
            $this->assertEquals(10, $res);
        } catch (Exception $e) {
            $this->addWarning("Impossible d'effectuer le calcul / Le resultat est peut être faux");
        }
    }

    public function testCalculMultiply(): void
    {
        try {
            $init = new Calcul();
            $res = $init->multiply(4, 3);
            $this->assertEquals(12, $res);
        } catch (Exception $e) {
            $this->addWarning("Impossible d'effectuer le calcul / Le resultat est peut être faux");
        }
    }
}