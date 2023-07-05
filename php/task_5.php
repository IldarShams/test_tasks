<?php
    function getDegrees($hours, $minutes) {
        if (0 > $hours or $hours >= 24 or 0 > $minutes or $minutes >= 60)
        {
            return "Error";
        }
        $h_step = 30;
        $m_step = 6;
        
        $h_d = $hours % 12 * $h_step;
        $m_d = $minutes * 6;
        
        $d = $h_d - $m_d;
        if ($d < 0)
        {
            $d = $d * -1;
        }
        return $d;
    };
?>