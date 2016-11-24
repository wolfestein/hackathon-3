<?php

namespace Hackathon3\Patatoche;
use Hackathon3\Patatoche\ConverterInterface;

class RomanToIntegerConverter implements ConverterInterface
{
    protected $romanInteger = array('I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000);

    /**
     * Retourne la conversion d'une valeur romaine "élémentaire".
     * Par exemple 5 pour 'V', 10 pour 'X', etc.
     *
     * @param string $roman
     * @return string
     */
    protected function getRomanInteger($roman)
    {
        return $this->romanInteger[$roman];
    }

    /**
     * Convertit un chiffre romain donné en sa représentation décimale.
     *
     * @param string $roman
     * @return string
     */
    public function convert($roman)
    {
        // TODO: écrire la fonction de conversion des chiffres romains en décimaux !
    }
}
