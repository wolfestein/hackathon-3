<?php

namespace Hackathon3\Bmehdi;

class Lozenge
{
    private $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    /**
     * Returns lozenge as a string.
     *
     * Examples :
     *
     * For a lozenge with size 1, returns :
     *
     *  o 
     * o o
     *  o 
     *
     * For a lozenge with size 2, returns :
     * 
     *   o  
     *  o o 
     * o   o
     *  o o 
     *   o  
     *
     * For a lozenge with size 3, returns :
     *
     *    o   
     *   o o  
     *  o   o 
     * o     o
     *  o   o 
     *   o o  
     *    o   
     *
     * Etc.
     */
    public function __toString()
    {
        $lozenge = '';

        // todo : update $lozenge

        return $lozenge;
    }
}
