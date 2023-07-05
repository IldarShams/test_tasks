<?php
    function getDayMonth(int $day, int $month)
    {
        if (1 > $day and $day > 31 or 1 < $month and $month > 12)
        {
            return "Error";
        }
        $months = array("января",
                        "февраля",
                        "марта",
                        "апреля",
                        "мая",
                        "июня",
                        "июля",
                        "августа",
                        "сентября",
                        "октября",
                        "ноября",
                        "декабря");
        return $day . " " . $months[$month - 1];
    }
    echo getDayMonth(5, 12)
?>

