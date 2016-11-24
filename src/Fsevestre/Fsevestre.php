<?php

namespace Hackathon3\Fsevestre;

class Fsevestre
{
    /**
     * TODO: Améliorer les performances (-> mémoire utilisée uniquement <-) de cette méthode.
     * TODO: La création d'autres méthodes ou classes est autorisée, tant que les tests passent (sans être modifiés).
     */
    public function getLinesFromFileName($fileName)
    {
        $fileHandle = fopen($fileName, 'r');

        $lines = [];
        while (false !== $line = fgets($fileHandle)) {
            $lines[] = $line;
        }

        fclose($fileHandle);

        return $lines;
    }
}

