<?php
    class Calendar
    {
        function checkCalendar($date)
        {
            //Explodes input string into array.
            $straight_date = explode('-', $date);

            //Converts array into Julian Day number.
            $jd_date = cal_to_jd(CAL_GREGORIAN, $straight_date[1], $straight_date[2], $straight_date[0]);

            //Converts Julian Day into day of week.
            $day_of_week = jddayofweek($jd_date, 1);

            return $day_of_week;
        }
    }
?>
