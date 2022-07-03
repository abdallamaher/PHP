/*
 * @lc app=leetcode id=169 lang=php
 *
 * [169] Majority Element
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $count = 0;
        $mx = 0;
        foreach($nums as $num) {
            if($count === 0) $mx = $num;
            if($mx === $num)$count++;
            else $count--;
        }
        return $mx;
    }
}
// @lc code=end

