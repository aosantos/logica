<?php

namespace App\Contracts;

use App\Services\LogicaService;

class Logica
{
    private $silhuetas;
    private $agua;

    /**
     * @param $silhuetas
     */
    public function __construct($silhuetas)
    {
        $this->silhuetas = $silhuetas;
        $this->agua = 0;
    }

    /**
     * @return int
     */
    public function pegarAgua(): int
    {
        return $this->agua;
    }


    /**
     * @return void
     */
    public function derramarAgua(): void
    {
        $silhuetas = $this->silhuetas;

        foreach ($silhuetas as $chave => $silhueta) {
            $valorDireito = array_slice($silhuetas, $chave);
            $valorEsquerdo = array_slice($silhuetas,  0, $chave);

            if (empty($valorDireito) || empty($valorEsquerdo)) {
                continue;
            }
            $reservatorio = new LogicaService();
            $esquerda = $reservatorio->maiorValor($valorEsquerdo);
            $direita = $reservatorio->maiorValor($valorDireito);
            $diferenca = $reservatorio->menorValor($esquerda, $direita) - $silhueta;
            if ($diferenca <= 0) {
                continue;
            }
            $this->agua += $diferenca;
        }
    }
}
