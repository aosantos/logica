<?php

namespace App\Services;

class ArquivoService
{
  private $arquivo;

    /**
     * @param $file
     */
    function __construct($file)
  {
    $this->arquivo = $file;
  }

    /**
     * @return array
     */
    public function leitura(): array
  {
    $casos = [];

      /** @var TYPE_NAME $file */
      if ($file = fopen($this->arquivo, "r")) {
      while (!feof($file)) {
        $line = fgets($file);
        $casos[] = str_replace("\n", "", $line);
      }
      fclose($file);
    }

    return $casos;
  }
}
