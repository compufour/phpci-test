<?php

namespace ArtesanatoSoftware;

class CaixaEletronicoTest extends \PHPUnit_Framework_TestCase
{

	public function testDez()
	{
		$caixa = new CaixaEletronico;
		$notas = $caixa->saque(10);
		$this->assertEquals(1, count($notas));
		$this->assertEquals(10, $notas[0]['value']);
	}

	public function testVinte()
	{
		$caixa = new CaixaEletronico;
		$notas = $caixa->saque(20);
		$this->assertEquals(1, count($notas));
		$this->assertEquals(20, $notas[0]['value']);
	}

	public function testTrinta()
	{
		$caixa = new CaixaEletronico;
		$notas = $caixa->saque(30);
		$this->assertEquals(2, count($notas));
		$this->assertEquals(20, $notas[0]['value']);
		$this->assertEquals(10, $notas[1]['value']);
	}

	public function testQuarenta()
	{
		$caixa = new CaixaEletronico;
		$notas = $caixa->saque(40);
		$this->assertEquals(2, count($notas));
		$this->assertEquals(20, $notas[0]['value']);
		$this->assertEquals(20, $notas[1]['value']);
	}

	public function testCinquenta()
	{
		$caixa = new CaixaEletronico;
		$notas = $caixa->saque(50);
		$this->assertEquals(1, count($notas));
		$this->assertEquals(50, $notas[0]['value']);
	}

	public function testOitenta()
	{
		$caixa = new CaixaEletronico;
		$notas = $caixa->saque(80);
		$this->assertEquals(3, count($notas));
		$this->assertEquals(50, $notas[0]['value']);
		$this->assertEquals(20, $notas[1]['value']);
		$this->assertEquals(10, $notas[2]['value']);
	}

	public function testCem()
	{
		$caixa = new CaixaEletronico;
		$notas = $caixa->saque(100);
		$this->assertEquals(1, count($notas));
		$this->assertEquals(100, $notas[0]['value']);
	}

	public function testCentoETrinta()
	{
		$caixa = new CaixaEletronico;
		$notas = $caixa->saque(130);
		$this->assertEquals(3, count($notas));
		$this->assertEquals(100, $notas[0]['value']);
		$this->assertEquals(20, $notas[1]['value']);
		$this->assertEquals(10, $notas[2]['value']);
	}

	/**
     * @expectedException Exception
     * @expectedExceptionMessage Valor deve ser múltiplo de 10
     */
	public function testSetentaECinco()
	{
		$caixa = new CaixaEletronico;
		$notas = $caixa->saque(75);
		
	}

}