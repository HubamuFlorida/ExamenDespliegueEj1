<?php

use PHPUnit\Framework\TestCase;
use App\DNI; 

class DNITest extends TestCase
{
    public function testCalcularDNIConLetra()
    {
        $dniSinLetra = 12345678;
        $dni = new DNI($dniSinLetra);
        $dniConLetra = $dni->getDNIConLetra();

        $this->assertEquals('12345678Z', $dniConLetra); 
    }

}