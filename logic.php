<?php
# logic.php

//date_default_timezone_set('America/New_York');
//echo 'now in Boston:';

date_default_timezone_set('Europe/Sarajevo');
echo 'now in Sarajevo:';

//date_default_timezone_set('Asia/Hong_Kong');
//echo 'now in Hong Kong:';

//date_default_timezone_set('Pacific/Honolulu');
//echo 'now in Hawaii:';

$now =  date('D M j g:i A');

$hour = date('G');

if ($hour>=5 && $hour<11){
    echo 'Morning';
    $timeOfDay = 'morning';
}
elseif ($hour>=11 && $hour<16){
    echo 'Afternoon';
    $timeOfDay = 'afternoon';
}
elseif ($hour>=16 && $hour<20){
    echo 'Evening';
    $timeOfDay = 'evening';
}
else {
    echo 'Night';
    $timeOfDay = 'night';
}
