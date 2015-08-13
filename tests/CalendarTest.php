<?php
    require_once "src/Calendar.php";

    class CalendarTest extends PHPUnit_Framework_TestCase
    {

        function test_checkCalendar_oneDate()
        {
            //Arrange
            $test_Calendar = new Calendar;
            $input = '2003-08-01';

            //Act
            $result = $test_Calendar->checkCalendar($input);

            //Assert
            $this->assertEquals('Friday', $result);
        }

    }
?>
