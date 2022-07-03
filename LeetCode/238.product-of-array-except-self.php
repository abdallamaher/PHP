/*
 * @lc app=leetcode id=238 lang=php
 *
 * [238] Product of Array Except Self
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $right = $nums;
        $left = $nums;
        $n = count($nums);

        for($i=1; $i < $n; $i++){
            $left[$i] *= $left[$i -1];
        }

        for($i = $n - 2; $i >= 0; $i--){
            $right[$i] *= $right[$i + 1];
        }

        for($i = 0; $i < $n; $i++){
            if($i == 0)
                $nums[$i] = $right[$i + 1];
            else if($i == $n - 1)
                $nums[$i] = $left[$i - 1];
            else 
                $nums[$i] = $left[$i  -1] * $right[$i + 1];
        }

        return $nums;
    }
}
// @lc code=end

