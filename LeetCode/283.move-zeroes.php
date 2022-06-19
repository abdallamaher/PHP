/*
 * @lc app=leetcode id=283 lang=php
 *
 * [283] Move Zeroes
 */

// @lc code=start
class Solution {
    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $len = count($nums);
        $a = 0;
        $b = 0;
        while(max($a, $b) < $len) {
            // search for zeros
            if($nums[$a] !== 0){
                $a++;
                continue;
            }
            if($a >= $len)break;
            
            // from the found zero, search for non zeros
            $b = max($b, $a);
            while(($b < $len) AND ($nums[$b] === 0))$b++;
            if($b >= $len)break;

            $tmp = $nums[$b];
            $nums[$b] = $nums[$a];
            $nums[$a] = $tmp;
        }
    }
    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroesWithoutMaintainOrder(&$nums) {
        $last = count($nums) - 1;
        //while($nums[$last] === 0) $last--;
        $curr = 0;
        while($curr < $last) {
            //echo "{$curr} {$last}\n";
            if($nums[$curr] === 0) {
                $tmp = $nums[$curr];
                $nums[$curr] = $nums[$last];
                $nums[$last] = $tmp;
                do{
                    $last--;
                } while($nums[$last] === 0);
            }
            //print_r($nums);
            $curr++;
        }
    }
}
// @lc code=end

