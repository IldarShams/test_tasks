<?php
    function countMoney(float $contrib, int $months, float $rate)
    {
        return $contrib * (1 + $rate / 1200 * $months); 
    }
    echo countMoney(1000, 9, 1)
?>

