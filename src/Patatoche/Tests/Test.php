<?php

namespace Hackathon3\Patatoche\Tests;

use Hackathon3\Patatoche\RomanToIntegerConverter;
use Hackathon3\Patatoche\RomanNumber;
use Hackathon3\Patatoche\IntegerToRomanConverter;

class Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider romanProvider
     */
    public function testA($value, $expected)
    {
        $romanConverter = new RomanToIntegerConverter();
        $roman = new RomanNumber($value, $romanConverter);
        $this->assertEquals($roman->getConvertedValue(), $expected);
    }

    public function romanProvider()
    {
        $tests = array(
            array('I', 1),
            array('V', 5),
            array('X', 10),
            array('L', 50),
            array('C', 100),
            array('D', 500),
            array('M', 1000),
            array('II', 2),
            array('III', 3),
            array('IIII', 4),
            array('IV', 4),
            array('VI', 6),
            array('VII', 7),
            array('VIII', 8),
            array('IX', 9),
            array('DM', 500),
            array('DMM', 1500),
            array('MMXVI', 2016),
            array('XLVIII', 48),
            array('XLIX', 49),
            array('XCIII', 93),
            array('XCIV', 94),
            array('DCXCVII', 697),
            array('MCMLXXXIX', 1989),
            array('MMMMDCCCCLXXXVIII', 4988),
        );

        return $tests;
    }

    /**
     * Les tests précédant sont très jolis, mais réussir l'exercice en écrivant une méthode
     * inversant le tableau du testA aurait été trop simple. :)
     */
    public function testB()
    {
        $maxRandomTests = 100;

        $integerConverter = new IntegerToRomanConverter();

        for ($i = 0; $i < $maxRandomTests; $i++) {
            $randomNumber = rand(1, 4988);
            $romanRandomNumber = $integerConverter->convert($randomNumber);

            $romanConverter = new RomanToIntegerConverter();
            $roman = new RomanNumber($romanRandomNumber, $romanConverter);

            $this->assertEquals($roman->getConvertedValue(), $randomNumber);
        }
    }
}
