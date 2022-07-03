/*
 * @lc app=leetcode id=15 lang=php
 *
 * [15] 3Sum
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        $ans = [];
        $n = count($nums);
        sort($nums);

        for($i = 0; $i < $n - 2; $i++) {
            if($i && $nums[$i - 1] == $nums[$i])continue;
            $l = $i + 1;
            $r = $n - 1;
            while($l < $r) {
                $sum = $nums[$i] + $nums[$l] + $nums[$r];
                if($sum == 0){
                    array_push($ans, [ $nums[$i], $nums[$l], $nums[$r] ]);
                    $l++;
                    $r--;
                    while($l < $r && $nums[$l - 1] == $nums[$l])$l++;
                    while($l < $r && $nums[$r] == $nums[$r + 1])$r--;
                }
                else if($sum < 0) {
                    $l++;
                }
                else if($sum > 0){
                    $r--;
                }
            }
        }

        return $ans;
    }
}
// @lc code=end

