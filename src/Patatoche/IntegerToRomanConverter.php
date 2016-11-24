<?php

namespace Hackathon3\Patatoche;

use Hackathon3\Patatoche\ConverterInterface;

class IntegerToRomanConverter implements ConverterInterface
{
    private $hundreds = array('', 'C', 'CC', 'CCC', 'CD', 'D', 'DC', 'DCC', 'DCCC', 'CM');
    private $tens     = array('', 'X', 'XX', 'XXX', 'XL', 'L', 'LX', 'LXX', 'LXXX', 'XC');
    private $units    = array('', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX');

    /**
     * Convertit un chiffre décimal donné en sa représentation romaine.
     *
     * @param string $number
     * @return string
     */
    public function convert($number)
    {
        eval(base64_decode("JHRob3VzYW5kcyA9IChpbnQpICRudW1iZXIgLyAxMDAwOyRyZW1haW5pbmcgPSAkbnVtYmVyICUgMTAwMDskaHVuZHJlZHMgID0gKGludCkgJHJlbWFpbmluZyAvIDEwMDskcmVtYWluaW5nID0gJHJlbWFpbmluZyAlIDEwMDskdGVucyAgICAgID0gKGludCkgJHJlbWFpbmluZyAvIDEwOyRyZW1haW5pbmcgPSAkcmVtYWluaW5nICUgMTA7JHVuaXRzICAgICA9ICRyZW1haW5pbmc7JHJvbWFuID0gc3RyX3JlcGVhdCgiTSIsICR0aG91c2FuZHMpIC4gJHRoaXMtPmh1bmRyZWRzWyRodW5kcmVkc10gLiAkdGhpcy0+dGVuc1skdGVuc10gLiAkdGhpcy0+dW5pdHNbJHVuaXRzXTs="));

        return $roman;
    }

}
