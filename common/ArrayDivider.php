<?php
/**
 * Created by PhpStorm.
 * User: sheershoff
 * Date: 12/25/17
 * Time: 10:48 PM
 */

namespace app\common;


class ArrayDivider
{
    /**
     * Returns divider position so that the quantity of n in left part equals quantity of non-n on the right part.
     * Returned is the position before which the divider should be placed.
     * Returns -1 if the division is impossible.
     * @param int $n
     * @param array $a
     * @return int
     */
    public static function process(int $n, array $a)
    {
        if (sizeof($a) < 2) {
            return -1;
        }

        $l_count = 0;
        $r_count = 0;
        $l_pos = -1;
        $r_pos = sizeof($a);

        while ($l_pos < $r_pos) {
            if ($l_count < $r_count) {
                $l_pos++;
                if ($a[$l_pos] == $n) {
                    $l_count++;
                }
            } else {
                $r_pos--;
                if ($a[$r_pos] != $n) {
                    $r_count++;
                }
            }
        }

        if ($l_count == 0) {
            return -1;
        }
        return ($l_count != $r_count) ? -1 : $l_pos;
    }
}