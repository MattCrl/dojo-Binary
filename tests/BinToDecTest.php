<?php

use Converts\BinToDec;
use PHPUnit\Framework\TestCase;
/**
 * Created by PhpStorm.
 * User: mattcrl
 * Date: 19/04/18
 * Time: 10:15
 */

class BinToDecTest extends TestCase
{
    public function testBinToDec()
    {
        $binToDec = new BinToDec();
        $this->assertEquals(0, $binToDec->convert(0));
        $this->assertEquals(1, $binToDec->convert(1));
        $this->assertEquals(4, $binToDec->convert(100));
        $this->assertEquals(341, $binToDec->convert(101010101));
    }

}
