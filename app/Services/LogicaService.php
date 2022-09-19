<?php

namespace App\Services;

use App\Contracts\Logica;

class LogicaService
{

    /**
     * @param array $casos
     * @return array
     */
    public function tratamento(array $casos): array
    {
        $resposta = [];
        for ($posicao = 2; $posicao <= 2 * $casos[0]; $posicao += 2) {
            $caso = explode(" ", $casos[$posicao]);
            $reservatorio = new Logica($caso);
            $reservatorio->derramarAgua();
            $resposta[] = $reservatorio->pegarAgua();
        }

        return $resposta;
    }

    /**
     * @param int $valorEsquerdo
     * @param int $valorDireito
     * @return int
     */
    public function menorValor(int $valorEsquerdo, int $valorDireito): int
    {
        return min($valorEsquerdo, $valorDireito);
    }

    /**
     * @param array $array
     * @return int
     */
    public function maiorValor(array $array): int
    {
        return max($array);
    }
}
