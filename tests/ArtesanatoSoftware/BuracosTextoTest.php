<?php 
namespace ArtesanatoSoftware;

class BuracosTextoTest extends \PHPUnit_Framework_TestCase
{
    public function testZeroBuracos()
    {
        $service = new BuracosTexto;
        $count = $service->getBuracos('');
        $this->assertEquals(0, $count);
    }

    public function testZeroBuracosComEspaco()
    {
        $service = new BuracosTexto;
        $count = $service->getBuracos(' ');
        $this->assertEquals(0, $count);
    }

    public function testUmBuraco()
    {
        $service = new BuracosTexto;
        $count = $service->getBuracos('a');
        $this->assertEquals(1, $count);
    }

    public function testZeroBuracoB()
    {
        $service = new BuracosTexto;
        $count = $service->getBuracos('b');
        $this->assertEquals(1, $count);
    }

    public function testZeroBuracoAB()
    {
        $service = new BuracosTexto;
        $count = $service->getBuracos('ab');
        $this->assertEquals(2, $count);
    }

    public function testZeroBuracoC()
    {
        $service = new BuracosTexto;
        $count = $service->getBuracos('c');
        $this->assertEquals(0, $count);
    }

    public function testTextoComEspacos()
    {
        $service = new BuracosTexto;
        $count = $service->getBuracos('abe gh');
        $this->assertEquals(5, $count);
    }

    public function testTextoMaiusculo()
    {
        $service = new BuracosTexto;
        $count = $service->getBuracos('ABE GH');
        $this->assertEquals(3, $count);

        $count = $service->getBuracos('ABE GH.1oPK');
        $this->assertEquals(5, $count);
    }

     public function testTextoQuebraDeLinha()
    {
        $service = new BuracosTexto;
        $count = $service->getBuracos('ABE GH
            novo');
        $this->assertEquals(5, $count);
    }
}