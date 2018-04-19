<?php
/**
 * Created by PhpStorm.
 * User: mattcrl
 * Date: 19/04/18
 * Time: 10:19
 */

namespace Converts;


class BinToDec
{
    public function convert(int $bin)
    {
        $result = 0;
        $len = strlen((string)$bin);
        $puissance = $len - 1;
        for ($i=0; $i < $len; $i++) {
            $result += (int)(substr((string)$bin, $i, 1)) * 2 ** $puissance;
            $puissance -= 1;
        }
        return $result;
    }
}
