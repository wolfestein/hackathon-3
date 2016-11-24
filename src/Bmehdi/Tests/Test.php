<?php

namespace Hackathon3\Bmehdi\Tests;

use Hackathon3\Bmehdi\Lozenge;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testToString()
    {
        $lozenge = <<<L
 o 
o o
 o 
L;

        $this->assertSame($lozenge, (string) (new Lozenge(1)));

        $lozenge = <<<L
  o  
 o o 
o   o
 o o 
  o  
L;

        $this->assertSame($lozenge, (string) (new Lozenge(2)));

        $lozenge = <<<L
   o   
  o o  
 o   o 
o     o
 o   o 
  o o  
   o   
L;

        $this->assertSame($lozenge, (string) (new Lozenge(3)));

        $this->assertSame('c40eb861c21d37231b6cf39b9ec7def233f05749', sha1(new Lozenge(200)));
    }
}
