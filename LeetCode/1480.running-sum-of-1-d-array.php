/*
 * @lc app=leetcode id=1480 lang=php
 *
 * [1480] Running Sum of 1d Array
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        foreach($nums as $key => $val) {
            if($key === 0)continue;
            $nums[$key] += $nums[$key - 1];
        }
        return $nums;
    }
}
// @lc code=end

