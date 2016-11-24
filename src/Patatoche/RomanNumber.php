<?php

namespace Hackathon3\Patatoche;

use Hackathon3\Patatoche\ConverterInterface;

class RomanNumber
{
    // Valeur du nombre romain
    protected $romanValue;

    /**
     * @param string $roman
     * @param ConverterInterface $converter
     */
    public function __construct($roman, ConverterInterface $converter)
    {
        $this->converter = $converter;
        $this->setRomanValue($roman);
    }

    /**
     * Retourne la valeur du nombre romain
     *
     * @return string
     */
    public function getRomanValue()
    {
        return $this->romanValue;
    }

    /**
     * Met à jour la valeur du nombre romain
     *
     * @param string $romanValue
     */
    public function setRomanValue($romanValue)
    {
        $this->romanValue = $romanValue;
    }

    /**
     * Retourne la valeur convertie du nombre romain
     *
     * @return string
     */
    public function getConvertedValue()
    {
        return $this->converter->convert($this->getRomanValue());
    }
}
