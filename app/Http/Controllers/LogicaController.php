<?php

namespace App\Http\Controllers;

use App\Services\ArquivoService;
use App\Services\LogicaService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;


class LogicaController
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('create');
    }

    /**
     * @return void
     */
    public function store()
    {
        try {

            $modelo = (new Environment(new FilesystemLoader('views')))->load('agua.html');

            if (empty($_FILES['cases'])) throw new \Exception('Arquivo não existe!');

            if ($_FILES['cases']['type'] !== 'text/plain') throw new \Exception('Arquivo inválido!');

            echo $modelo->render(
                [
                    'quantidade' => (new LogicaService())
                        ->tratamento((new ArquivoService($_FILES['cases']['tmp_name']))
                            ->leitura())
                ]
            );

        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
