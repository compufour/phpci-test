<?php

namespace ArtesanatoSoftware;

class CaixaEletronico
{
	private $notas = [100, 50, 20, 10];
	private $result = [];

	public function saque($valor)
	{
		if ($valor % 10 != 0) {
			throw new \Exception("Valor deve ser múltiplo de 10");
		}

		$this->montaNotas($valor);

		return $this->result;
	}

	private function montaNotas($valor)
	{
		if (!$valor) {
			return;
		}

		foreach ($this->notas as $n) {
			if ($valor >= $n) {
				$this->result[] = ['value' => $n];
				$valor = $this->montaNotas($valor - $n);
			}
		}
	}
}