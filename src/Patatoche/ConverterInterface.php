<?php

namespace Hackathon3\Patatoche;

interface ConverterInterface
{
    /**
     * Convertit une valeur en une autre...
     *
     * @param string $value
     * @return string
     */
    public function convert($value);
}
