/*
 * @lc app=leetcode id=724 lang=php
 *
 * [724] Find Pivot Index
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums) {
        $n = count($nums);

        $sumL = $nums;
        for($i = 1; $i < $n; $i++){
            $sumL[$i] += $sumL[$i - 1];
        }

        $sumR = $nums;
        for($i = $n - 2; $i >= 0; $i--){
            $sumR[$i] += $sumR[$i + 1];
        }
        //print_r( $nums );
        for($i = 0; $i < $n; $i++){
            //echo( $sumL[$i - 1] . ' ' . $sumR[$i + 1]);
            if($sumL[$i - 1] == $sumR[$i + 1])return $i; 
        }
        return -1;
    }
}
// @lc code=end

