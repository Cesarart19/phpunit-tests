<?php
include "./src/Calc.php";
use PHPUnit\Framework\TestCase;

class CalcTest extends TestCase
{

    public function testAdd()
    {       //Inicializacion
            $calcInstace = new Calc();
            $mockA = 4;
            $mockB = 3;
            $expected = 5;

            //Llamado de la funcion
            $result = $calcInstace->add($mockA, $mockB);


            //Comparecion de valores 
            $this->assertEquals($expected, $result);
    }

}