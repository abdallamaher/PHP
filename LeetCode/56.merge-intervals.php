/*
 * @lc app=leetcode id=56 lang=php
 *
 * [56] Merge Intervals
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[][] $intervals
     * @return Integer[][]
     */
    function merge($intervals) {
        sort($intervals);
        array_push($intervals, [PHP_INT_MAX, PHP_INT_MAX]);
        $n = count($intervals);
        $ans = [];
        for($i = 0; $i < $n; $i++){
            $a = &$intervals[$i];
            $b = &$intervals[$i + 1];
            if($a[1] < $b[0])
                array_push($ans, [ $a[0], $a[1] ]);
            else {
                $b[0] = $a[0];
                $b[1] = max($a[1], $b[1]);
            }
        }
        return $ans;
    }
}
// @lc code=end

