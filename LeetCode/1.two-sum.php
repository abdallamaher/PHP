/*
 * @lc app=leetcode id=1 lang=php
 *
 * [1] Two Sum
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $map = [];
        foreach($nums as $key => $val) {
            // echo $key . ' ' . $val . "\n";
            $diff = $target - $val;
            if(array_key_exists($diff, $map)) {
                return [$map[$diff], $key];
            }
            $map[$val] = $key;
        }       
        return [];
    }
}
// @lc code=end

