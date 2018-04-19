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
        $multiplier = 1;
        $len = strlen((string)$bin);
        for ($i=$len-1; $i>=0; $i--) {

            $result += (int)(substr((string)$bin, $i, 1)) * $multiplier;

            $multiplier *= 2;
        }

        return $result;
    }
}
