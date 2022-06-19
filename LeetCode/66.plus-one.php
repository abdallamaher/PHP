/*
 * @lc app=leetcode id=66 lang=php
 *
 * [66] Plus One
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $len = count($digits);
        $digits = array_reverse($digits);
        $plush = false;
        for($i = 0; $i<$len; $i++) {
            if($i === 0 || $plus === true) {
                $digits[$i]++;
                $plus = false;
            }

            if($digits[$i] === 10){
                $plus = true;
                $digits[$i] = 0;
            }
        }
        if($plus === true) {
            array_push($digits, 1);
        }
        $digits = array_reverse($digits);
        return $digits;
    }
}
// @lc code=end

