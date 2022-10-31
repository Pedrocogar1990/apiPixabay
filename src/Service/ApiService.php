<?php

namespace Src\Service;

use Src\Modelos;

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__."/../../"); //indico el .env
$dotenv->load();

define("URL", $_ENV["URL_BASE"] . $_ENV["API_KEY"] . "&q=" . $_ENV["BUSQUEDA"]);

class ApiService
{
    public function devolverFotos()
    {

        $fotos = [];
        $datosUrl = file_get_contents(URL);
        $datosJson = json_decode($datosUrl);
        $datosFotos = $datosJson->hits;
        $cont=1;
        foreach ($datosFotos as $foto) {
            $fotos[] = (new Modelos\Fotos)->setFoto($foto->webformatURL)->setAutor($foto->user)->setLikes($foto->likes);
            if($cont==20) break;
            $cont++;
        }
        return $fotos;
    }
}
