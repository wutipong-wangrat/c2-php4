<?php
function day_name(){
    $day1 = "Monday";
    $day2 = "Tuesday";
    $day3 = "Wednesday";
    $day4 = "Thursday";
    $day5 = "Friday";
    $day6 = "Saturday";
    $day7 = "Sunday";
    return array($day1,$day2,$day3,$day4,$day5,$day6,$day7);
}
// $days = day_name();
// echo $days[0]."<br />".$days[1]."<br />".$days[2]."<br />".$days[3]."<br />".$days[4]."<br />".$days[5]."<br />".$days[6]."<br />".$day[7];

list($day_1,$day_2,$day_3,$day_4,$day_5,$day_6,$day_7) = day_name();
echo $day_1."<br />".$day_2."<br />".$day_3."<br />".$day_4."<br />".$day_5."<br />".$day_6."<br />".$day_7;