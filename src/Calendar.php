<?php
    class Calendar
    {
        function checkCalendar($date)
        {
            $straight_date = explode('-', $date);

            $jd_date = cal_to_jd(CAL_GREGORIAN, $straight_date[1], $straight_date[2], $straight_date[0]);

            $day_of_week = jddayofweek($jd_date, 1);

            return $day_of_week;


        }
    }
?>
