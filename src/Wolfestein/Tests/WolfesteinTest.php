<?php

namespace Hackathon3\Wolfestein\Tests;

use Hackathon3\Wolfestein\Debug;

class WolfesteinTest extends \PHPUnit_Framework_TestCase
{
    public function testA()
    {
        $token = date('His');
	$test = new Debug($token);
        $this->assertEquals(
            $test->myHomophones('Jm ng srxvvh ezig xts vuaik'),
            ['pousse','pouce']);
    }

    public function testB()
    {
        $token = date('His');
	$test = new Debug($token);

        $this->assertEquals(
            $test->myHomophones('Kf fqtu vrxv pe yjsyj gbki zh bivbm'),
            ['tente','tante']);
    }

    public function testC()
    {
        $token = date('His');
	$test = new Debug($token);

        $this->assertEquals(
            $test->myHomophones('Vof rnckpg sohlqh hi afhmj'),
            ['plaine','pleine']);
    }
}
