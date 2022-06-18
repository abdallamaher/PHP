/*
 * @lc app=leetcode id=121 lang=php
 *
 * [121] Best Time to Buy and Sell Stock
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $ans = 0;
        $min = PHP_INT_MAX;
        foreach($prices as $price) {
            if($price < $min) {
                $min = $price;
                continue;
            }
            $ans = max($ans, $price - $min);
        }
        return $ans;
    }
}
// @lc code=end

